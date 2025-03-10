<?php

require_once 'Model.php';

class OrderItem extends Model {
    public function __construct() {
        parent::__construct('order_items');
    }
    
    public function getOrderItems($order_id) {
        return $this->query(
            "SELECT oi.*, p.name, p.product_image_url 
            FROM order_items oi
            JOIN products p ON oi.product_id = p.id
            WHERE oi.order_id = :order_id",
            ['order_id' => $order_id]
        );
    }
}