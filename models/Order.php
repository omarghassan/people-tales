<?php

require_once 'Model.php';

class Order extends Model {
    public function __construct() {
        parent::__construct('orders');
    }
    
    public function beginTransaction() {
        $this->db->beginTransaction();
    }
    
    public function commit() {
        $this->db->commit();
    }
    
    public function rollback() {
        $this->db->rollBack();
    }
    
    public function getOrdersByUser($user_id) {
        return $this->query(
            "SELECT * FROM orders WHERE user_id = :user_id ORDER BY created_at DESC",
            ['user_id' => $user_id]
        );
    }
}

