<?php
require_once 'Controller.php';
require_once 'models/UserModel.php';

class ProfileController extends Controller
{
    private $userModel;
    
    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
    }
    
    public function index()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            // Redirect to login page if not logged in
            $this->setFlash('error', 'Please login to view your profile');
            $this->redirect('/login');
            return;
        }
        
        $userId = $_SESSION['user_id'];
        
        // Get user details with error handling
        $user = $this->userModel->find($userId);
        if (!$user) {
            $this->setFlash('error', 'Failed to retrieve user data. Please try again later.');
            $user = ['username' => 'Unknown', 'email' => 'Unknown'];
        }
        
        // Get user orders with error handling
        $orders = $this->userModel->getUserOrders($userId);
        if ($orders === false) {
            $this->setFlash('error', 'Failed to retrieve order history. Please try again later.');
            $orders = [];
        }
        
        // Debug information (remove in production)
        /*
        echo '<pre>';
        echo 'User ID: ' . $userId . '<br>';
        echo 'User data: ';
        print_r($user);
        echo 'Orders data: ';
        print_r($orders);
        echo '</pre>';
        */
        
        // Render the profile view with user data
        $this->render('public.pages.profile', [
            'user' => $user,
            'orders' => $orders
        ]);
    }
    
    public function update()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            $this->setFlash('error', 'Please login to update your profile');
            $this->redirect('/login');
            return;
        }
        
        $userId = $_SESSION['user_id'];
        
        // Validate input
        $rules = [
            'username' => 'required|min:3',
            'email' => 'required|email'
        ];
        
        $errors = $this->validate($rules, $_POST); // Should be like this // Make sure you're validating $_POST
        
        if (!empty($errors)) {
            // Set error messages
            foreach ($errors as $field => $fieldErrors) {
                foreach ($fieldErrors as $error) {
                    $this->setFlash('error', $error);
                }
            }
            
            // Redirect back to profile page
            $this->redirect('/profile');
            return;
        }
        
        // Update user data
        $data = [
            'username' => $_POST['username'],
            'email' => $_POST['email']
        ];
        
        // Add password update if provided
        if (!empty($_POST['password'])) {
            $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }
        
        $result = $this->userModel->update($userId, $data);
        
        if ($result) {
            $this->setFlash('success', 'Profile updated successfully');
        } else {
            $this->setFlash('error', 'Failed to update profile');
        }
        
        $this->redirect('/profile');
    }
}