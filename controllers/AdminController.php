<?php

require_once 'models/Admin.php';
require_once 'controllers/Controller.php';

class AdminController extends Controller
{

    public function index()
    {
        $admin = $this->model('admin');
        $admins = $admin->all();

        $title = 'Admins';
        $this->render('admin.admins.index', [
            'pageTitle' => 'All Admins',
            'admins' => $admins
        ]);
    }


    public function show($id)
    {
        echo "<h1>Showing admin with ID: {$id}</h1>";
    }
    public function create()
    {
        $this->render('admin.admins.create', ['title' => 'Create New Admin']);
    }

    public function store()
    {
        // 1. Retrieve data from POST
        $adminname = $_POST['adminname'] ?? null;
        $email    = $_POST['email'] ?? null;

        // 2. (Optionally) Validate the data
        $errors = $this->validate([
            'adminname' => 'required|alphanumeric',
            'email'    => 'required|email'
        ]);

        // If validation fails, re-render form with errors
        if (!empty($errors)) {
            // In a real app, you might:
            //   - Store errors in session or re-render the form
            //   - For simplicity, we'll just dump them:
            dd($errors);
        }
        $user = $this->model('admin');
        $user->create([
            'adminname' => $adminname,
            'email'    => $email
        ]);
        $this->redirect('/admins');
    }


    public function edit($id)
    {
        $admin = $this->model('admin');
        $admin = $admin->find($id);
        $this->render('admin.admins.edit', ['admin' => $admin]);
    }

    public function update($id)
    {
        $data = [
            'adminname' => $_POST['adminname'] ?? '',
            'email'    => $_POST['email'] ?? ''
        ];

        // Update the user record
        $adminModel = $this->model('admin');
        $result = $adminModel->update($id, $data);

        if ($result) {
            // Update succeeded
            // Redirect or show a success message
            $this->redirect('/admins');
        } else {
            // Update failed
            echo "Error updating user with ID: " . htmlspecialchars($id);
        }
    }

    public function destroy($id)
    {
        $user = $this->model('admin');
        $user->delete($id);
        $this->redirect('/admins'); {
        }
    }


    // public function login(){
    //     $this->render('admin.login', ['title' => 'Admin Login']);
    // }

    // public function authenticate(){
    //     $email = $_POST['email'] ?? null;
    //     $password = $_POST['password'] ?? null;
    //     $admin = $this->model('admin');
    //     $admin = $admin->find($email);
    //     if ($admin && password_verify($password, $admin->password)){
    //         $_SESSION['admin'] = $admin;
    //         $this->redirect('/admin');
    //     }
    //     else{
    //         echo 'Invalid email or password';
    //     }
    // }


}