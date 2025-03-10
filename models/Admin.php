<?php
require_once 'config/Database.php';

class Admin extends Model
{

    public function __construct() {
        parent::__construct('admins');
        $this->primaryKey = 'id'; // Set this to match your users table
    }

}