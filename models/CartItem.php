<?php
// CartItem.php
require_once 'Model.php';

class CartItem extends Model {
    private $cart_id;
    
    public function __construct($cart_id = null) {
        parent::__construct('cart_items');
        if ($cart_id) {
            $this->cart_id = $cart_id;
        }
    }
    
    public function setCartId($cart_id) {
        $this->cart_id = $cart_id;
    }
    
    public function add($product_id, $quantity = 1) {
        // Check if item already exists in cart
        $result = $this->query(
            "SELECT id, quantity FROM cart_items WHERE cart_id = :cart_id AND product_id = :product_id",
            ['cart_id' => $this->cart_id, 'product_id' => $product_id],
            false
        );
        
        if ($result) {
            // Update quantity if item exists
            $newQuantity = $result['quantity'] + $quantity;
            return $this->update($result['id'], ['quantity' => $newQuantity]);
        } else {
            // Add new item
            return $this->create([
                'cart_id' => $this->cart_id,
                'product_id' => $product_id,
                'quantity' => $quantity
            ]);
        }
    }
    
    public function update($item_id, $data) {
        return parent::update($item_id, $data);
    }
    
    public function updateQuantity($item_id, $quantity) {
        return $this->update($item_id, ['quantity' => $quantity]);
    }
    
    public function remove($item_id) {
        return $this->delete($item_id);
    }
}