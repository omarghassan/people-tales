<?php 
require_once "controllers/Controller.php";
class PageController extends Controller { 
    public function contact() {
        $this->render("public.pages.contact");
    }

    public function submitContact() {  
        $name = $_POST['name'] ?? null;
        $email = $_POST['email'] ?? null;
        $message = $_POST['message'] ?? null;

        $errors = $this->validate([
            'name' => 'required|alphanumeric|min:3',
            'email' => 'required',
            'message' => 'required',
        ]);
        if (!empty($errors)) {
            dd($errors);
        }
        $contact = $this->model('contact');
        $contact->create([
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]);
        $this->redirect('/contact');
    }
  
    // about Page
    public function about() {
        $this->render("public.pages.about");
    }
  
    public function fav() {
        $this->render("public.cart.fav-cart");
    }
    public function register() {
        $this->render("public.pages.registration");
    }
    public function profile() {
        $this->render("public.pages.profile");
    }
 
    public function category() {
        $this->render("admin.categories.index");
    }
 
}