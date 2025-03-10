<?php 

require_once "models/Model.php";

class Auth extends Model {
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct('users');
        $this->primaryKey = 'id'; // Set this to match your users table
    }
    
    /**
     * Find a user by email
     *
     * @param string $email
     * @return array|null User data or null if not found
     */
    public function findByEmail($email) {
        // Use the base Model's where() method
        $users = $this->where('email', $email);
        return !empty($users) ? $users[0] : null;
    }
    
    /**
     * Check if user is logged in
     *
     * @return bool True if user is logged in
     */
    public function isLoggedIn() {
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }
    
    /**
     * Get current user data
     *
     * @return array|null User data or null if not logged in
     */
    public function getCurrentUser() {
        if (!$this->isLoggedIn()) {
            return null;
        }
        
        $userId = $_SESSION['user_id'];
        // Use the base Model's find() method
        return $this->find($userId);
    }
    
    /**
     * Authenticate a user with email/username and password
     *
     * @param string $email Email or username
     * @param string $password Plain text password
     * @return array|null User data if authentication successful, null otherwise
     */
    public function authenticate($email, $password) {
        $user = $this->findByEmail($email);
        
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        
        return null;
    }
    
    /**
     * Login a user (set session)
     *
     * @param array $user User data
     * @return void
     */
    public function login($user) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['logged_in'] = true;
    }
    
    /**
     * Logout current user
     *
     * @return void
     */
    public function logout() {
        session_unset();
        session_destroy();
    }
}