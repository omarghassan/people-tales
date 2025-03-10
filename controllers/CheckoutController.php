<?php
// CheckoutController.php
require_once 'Controller.php';
require_once 'models/Cart.php';
require_once 'models/Order.php';
require_once 'models/OrderItem.php';

class CheckoutController extends Controller {
    private $cart;
    private $order;
    private $orderItem;
    private $user_id;  // Declare this as a class property
    private $cart_id;  // Declare this as a class property
    
    public function __construct() {
        parent::__construct();
        
        // Get user ID if logged in
        $this->user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
        
        // Require user to be logged in
        if (!$this->user_id) {
            $this->setFlash('error', 'Please login to checkout.');
            $this->redirect('/login?redirect=/checkout');
        }
        
        // Initialize cart
        $this->cart = new Cart();
        $this->cart_id = $this->cart->getOrCreateCart($this->user_id);
        
        // Initialize order models
        $this->order = new Order();
        $this->orderItem = new OrderItem();
    }
    
    public function index() {
        $items = $this->cart->getItems();
        $total = $this->cart->getTotalAmount();
        
        if (empty($items)) {
            $this->setFlash('error', 'Your cart is empty. Please add items before checkout.');
            $this->redirect('/cart');
        }
        
        // Use the render method from the parent Controller
        $this->render('public.checkout.index', [
            'items' => $items,
            'total' => $total
        ]);
    }
    
    public function process() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('/checkout');
        }
        
        // Validate form data - using FILTER_SANITIZE_FULL_SPECIAL_CHARS instead of deprecated FILTER_SANITIZE_STRING
        $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $payment_method = filter_input(INPUT_POST, 'payment_method', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        // Basic validation
        if (!$full_name || !$email || !$address || !$city || !$state || !$zip || !$payment_method) {
            $this->setFlash('error', 'Please fill in all required fields.');
            $this->redirect('/checkout');
        }
        
        // Get cart items and total
        $items = $this->cart->getItems();
        $total = $this->cart->getTotalAmount();
        
        if (empty($items)) {
            $this->setFlash('error', 'Your cart is empty. Please add items before checkout.');
            $this->redirect('/cart');
        }
        
        // Start transaction
        $this->order->beginTransaction();
        
        try {
            // Create order
            $order_data = [
                'user_id' => $this->user_id,
                'total_amount' => $total,
                'status' => 'pending',
                'full_name' => $full_name,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'city' => $city,
                'state' => $state,
                'zip' => $zip,
                'payment_method' => $payment_method,
                'created_at' => date('Y-m-d H:i:s')
            ];
            
            $order_id = $this->order->create($order_data);
            
            if (!$order_id) {
                throw new Exception('Failed to create order.');
            }
            
            // Create order items
            foreach ($items as $item) {
                $item_data = [
                    'order_id' => $order_id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price']
                ];
                
                $result = $this->orderItem->create($item_data);
                
                if (!$result) {
                    throw new Exception('Failed to create order item.');
                }
            }
            
            // Clear the cart
            $this->cart->clear();
            
            // Commit transaction
            $this->order->commit();
            
            // Set success message
            $this->setFlash('success', 'Order placed successfully! Your order number is #' . $order_id);
            
            // Redirect to order confirmation
            $this->redirect('/checkout/confirmation/' . $order_id);
            
        } catch (Exception $e) {
            // Rollback transaction
            $this->order->rollback();
            
            // Set error message
            $this->setFlash('error', 'Error processing your order: ' . $e->getMessage());
            
            // Redirect back to checkout
            $this->redirect('/checkout');
        }
    }
    
    public function confirmation($order_id) {
        // Get order details
        $order = $this->order->find($order_id);
        
        if (!$order || $order['user_id'] != $this->user_id) {
            $this->setFlash('error', 'Order not found.');
            $this->redirect('/');
        }
        
        // Get order items
        $items = $this->orderItem->getOrderItems($order_id);
        
        // Render confirmation page
        $this->render('public.checkout.confirmation', [
            'order' => $order,
            'items' => $items
        ]);
    }
}