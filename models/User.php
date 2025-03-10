<?php
require_once 'config/Database.php';

class User extends Model
{

    public function __construct() {
        parent::__construct('users');
        $this->primaryKey = 'user_id'; // Set this to match your users table
    }

}