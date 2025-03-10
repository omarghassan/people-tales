<?php
// CartController.php
require_once 'Controller.php';
require_once 'models/Cart.php';
require_once 'models/CartItem.php';

class CartController extends Controller
{
    private $cart;
    private $cartItem;

    public function __construct()
    {
        parent::__construct();

        // Get user ID if logged in
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        // Initialize cart
        $this->cart = new Cart();
        $cart_id = $this->cart->getOrCreateCart($user_id);
        $this->cartItem = new CartItem();
        $this->cartItem->setCartId($cart_id);
    }

    public function index()
    {
        $items = $this->cart->getItems();
        $total = $this->cart->getTotalAmount();

        // Use the render method from the parent Controller
        $this->render('public.cart.index', [
            'items' => $items,
            'total' => $total
        ]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
            $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT) ?: 1;

            if ($product_id) {
                $this->cartItem->add($product_id, $quantity);
                // Use the redirect method from the parent Controller
                $this->setFlash('success', 'Product added to cart successfully.');
                $this->redirect($_SERVER['HTTP_REFERER'] ?? '/cart');
            }
        }

        // Invalid request
        $this->redirect('/');
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item_id = filter_input(INPUT_POST, 'item_id', FILTER_VALIDATE_INT);
            $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);

            if ($item_id && $quantity > 0) {
                $this->cartItem->updateQuantity($item_id, $quantity);
                $this->setFlash('success', 'Cart updated successfully.');
            } elseif ($item_id && $quantity === 0) {
                $this->cartItem->remove($item_id);
                $this->setFlash('success', 'Item removed from cart.');
            }

            // Redirect back to cart
            $this->redirect('/cart');
        }

        // Invalid request
        $this->redirect('/cart');
    }

    public function remove($item_id)
    {
        $this->cartItem->remove($item_id);
        $this->setFlash('success', 'Item removed from cart.');

        // Redirect back to cart
        $this->redirect('/cart');
    }

    public function clear()
    {
        $this->cart->clear();
        $this->setFlash('success', 'Cart cleared successfully.');

        // Redirect back to cart
        $this->redirect('/cart');
    }
}