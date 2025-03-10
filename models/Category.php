<?php
require_once 'config/Database.php';

class Category extends Model
{
    public function __construct() {
        parent::__construct('categories');
        $this->primaryKey = 'id'; // Set this to match your users table
    }
}