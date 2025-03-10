<?php
require_once 'Model.php';

class UserModel extends Model
{
    public function __construct()
    {
        parent::__construct('users');
        $this->primaryKey = 'user_id';
    }

    /**
     * Find a user by ID
     * 
     * @param int $userId The user ID to find
     * @return array|false User data or false on failure
     */
    public function find($userId)
    {
        try {
            $sql = "SELECT * FROM {$this->table} WHERE {$this->primaryKey} = :id";
            $params = ['id' => $userId];
            $result = $this->query($sql, $params, false); // Set fetchAll to false

            // For debugging
            if (!$result) {
                error_log("UserModel::find - No user found with ID: {$userId}");
            }

            return $result;
        } catch (Exception $e) {
            error_log("UserModel::find - Exception: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Get a user's order history
     * 
     * @param int $userId The user ID to get orders for
     * @return array|false Array of orders or false on failure
     */
    public function getUserOrders($userId)
    {
        try {
            // Check if it's order_date or created_at in your database
            $sql = "SELECT order_id, total_amount, created_at as order_date, status FROM orders 
                WHERE user_id = :user_id 
                ORDER BY created_at DESC";

            $result = $this->query($sql, ['user_id' => $userId], true);

            if ($result === false) {
                error_log("UserModel::getUserOrders - No results returned for user ID: {$userId}");
                return [];
            }

            return $result;
        } catch (Exception $e) {
            error_log("UserModel::getUserOrders - Exception: " . $e->getMessage());
            return [];
        }
    }

    /**
     * Update a user's information
     * 
     * @param int $userId The user ID to update
     * @param array $data The data to update
     * @return bool Success or failure
     */
    // In UserModel.php, the update method should be:
    public function update($userId, $data)
    {
        try {
            return parent::update($userId, $data);

            // Or if you need custom behavior:
            /*
        $setClause = '';
        foreach (array_keys($data) as $key) {
            $setClause .= "{$key} = :{$key}, ";
        }
        $setClause = rtrim($setClause, ', ');
        
        $sql = "UPDATE {$this->table} SET {$setClause} WHERE {$this->primaryKey} = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $userId);
        
        foreach ($data as $key => $value) {
            $stmt->bindValue(":{$key}", $value);
        }
        
        return $stmt->execute();
        */
        } catch (Exception $e) {
            error_log("UserModel::update - Exception: " . $e->getMessage());
            return false;
        }
    }
}
