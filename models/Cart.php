<?php
// Cart.php
require_once 'Model.php';

class Cart extends Model {
    private $id;
    private $user_id;
    private $session_id;
    
    public function __construct() {
        parent::__construct('carts'); // Specify the table name
    }
    
    public function getOrCreateCart($user_id = null) {
        if ($user_id) {
            // Get cart by user ID
            $this->user_id = $user_id;
            $result = $this->where('user_id', $user_id);
            if (!empty($result)) {
                $cart = $result[0];
            }
        } else {
            // Get cart by session ID
            $this->session_id = session_id();
            $result = $this->where('session_id', $this->session_id);
            if (!empty($result)) {
                $cart = $result[0];
            }
        }
        
        if (isset($cart)) {
            $this->id = $cart['id'];
        } else {
            // Create new cart
            $data = [
                'user_id' => $user_id,
                'session_id' => session_id()
            ];
            $this->id = $this->create($data);
        }
        
        return $this->id;
    }
    
    public function getItems() {
        return $this->query(
            "SELECT ci.*, p.name, p.price, p.product_image_url as image 
            FROM cart_items ci
            JOIN products p ON ci.product_id = p.id
            WHERE ci.cart_id = :cart_id",
            ['cart_id' => $this->id]
        );
    }
    
    public function getTotalAmount() {
        $result = $this->query(
            "SELECT SUM(p.price * ci.quantity) as total
            FROM cart_items ci
            JOIN products p ON ci.product_id = p.id
            WHERE ci.cart_id = :cart_id",
            ['cart_id' => $this->id],
            false
        );
        return $result['total'] ?? 0;
    }
    
    public function clear() {
        return $this->query(
            "DELETE FROM cart_items WHERE cart_id = :cart_id",
            ['cart_id' => $this->id]
        );
    }

    public function getId() {
        return $this->id;
    }
}