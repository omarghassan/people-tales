<?php
require_once 'models/Category.php';
require_once 'controllers/Controller.php';
class CategoryController extends Controller
{

    public function index()
    {
        $category = $this->model('category');
        $categories = $category->all();

        $title = 'Categories';
        $this->render('admin.categories.index', [
            'pageTitle' => 'All Categories',
            'categories' => $categories
        ]);
    }


    public function show($id)
    {
        echo "<h1>Showing user with ID: {$id}</h1>";
    }
    public function create()
    {
        $this->render('admin.categories.create', ['title' => 'Create Category']);
    }

    public function store()
    {
        // 1. Retrieve data from POST
        $name = $_POST['name'] ?? null;

        // 2. (Optionally) Validate the data
        $errors = $this->validate([
            'name' => 'required|alphanumeric|min:3',
        ]);

        // If validation fails, re-render form with errors
        if (!empty($errors)) {
            // In a real app, you might:
            //   - Store errors in session or re-render the form
            //   - For simplicity, we'll just dump them:
            dd($errors);
        }
        $user = $this->model('category');
        $user->create([
            'name' => $name,
        ]);
        $this->redirect('/categories');
    }


    public function edit($id)
    {
        $category = $this->model('category');
        $category = $category->find($id);
        $this->render('admin.categories.edit', ['category' => $category]);
    }

    public function update($id)
    {
        $data = [
            'name' => $_POST['name'] ?? '',
        ];

        // Update the user record
        $categoryModel = $this->model('category'); // "user" maps to User.php, extends Model
        $result = $categoryModel->update($id, $data);

        if ($result) {
            // Update succeeded
            // Redirect or show a success message
            $this->redirect('/categories');
        } else {
            // Update failed
            echo "Error updating user with ID: " . htmlspecialchars($id);
        }
    }

    public function destroy($id)
    {
        $category = $this->model('category');
        $category->delete($id);
        $this->redirect('/categories'); {
        }
    }
}