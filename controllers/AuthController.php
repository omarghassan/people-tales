<?php
require_once "controllers/Controller.php";
require_once "models/Auth.php";

class AuthController extends Controller
{

    // Registration Page
    public function register()
    {
        // If user is already logged in, redirect to home
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            $this->redirect('/');
            return;
        }

        $this->render("public.pages.registration");
    }

    // Login Page
    public function loginPage()
    {
        $this->render("public.pages.login");
    }

    public function registration()
    {
        $name = $_POST['username'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ?? null;

        $errors = $this->validate([
            'username' => 'required|alphanumeric',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Check if email already exists
        $auth = $this->model('auth');
        $existingUser = $auth->findByEmail($email);

        if ($existingUser) {
            // Email already exists, add to errors
            if (!isset($errors['email'])) {
                $errors['email'] = [];
            }
            $errors['email'][] = "This email is already registered.";
        }

        if (!empty($errors)) {
            // Store errors in session flash and redirect back
            $_SESSION['form_errors'] = $errors;
            $_SESSION['form_data'] = [
                'username' => $name,
                'email' => $email
            ];
            $this->redirect('/register');
            return;
        }

        // Create user
        $userId = $auth->create([
            'username' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        if ($userId) {
            // Registration successful, create session
            $_SESSION['user_id'] = $userId;
            $_SESSION['username'] = $name;
            $_SESSION['logged_in'] = true;

            // Set success message
            $this->setFlash('success', 'Registration successful! Welcome to our store.');
            $this->redirect('/');
        } else {
            // Registration failed
            $this->setFlash('error', 'Registration failed. Please try again later.');
            $this->redirect('/register');
        }
    }

    // Process login form submission
    public function login()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Validate
        $errors = $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!empty($errors)) {
            // Store errors in session flash and redirect back
            $this->setFlash('error', 'Please fix the errors in the form.');
            $this->redirect('/login');
            return;
        }

        // Attempt login
        $auth = $this->model('auth');
        $user = $auth->findByEmail($email); // You'll need to implement this method

        // Check if user exists and password matches
        if ($user && password_verify($password, $user['password'])) {
            // Authentication successful, create session
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['logged_in'] = true;

            // Redirect to dashboard or home page
            $this->setFlash('success', 'Login successful.');
            $this->redirect('/');
        } else {
            // Authentication failed
            $this->setFlash('error', 'Invalid email or password.');
            $this->redirect('/login');
        }
    }

    // Logout method
    public function logout()
    {
        // Clear all session data
        session_unset();
        session_destroy();

        // Redirect to home page
        $this->redirect('/');
    }
}
