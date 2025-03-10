<?php

require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/config/Router.php';
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . "/controllers/PageController.php";
require_once __DIR__ . "/controllers/AuthController.php";
require_once __DIR__ . "/controllers/CountryController.php";
require_once __DIR__ . "/controllers/CategoryController.php";
require_once __DIR__ . "/controllers/CartController.php";
require_once __DIR__ . "/controllers/AdminController.php";
require_once __DIR__ . "/controllers/CheckoutController.php";
require_once __DIR__ . "/controllers/ProfileController.php";

$router = new Router();

// $router->get('/', function(){
//    return view('home');
// }, 'home');

$router->get('/about', 'PageController@about', 'home.about');
// $router->get('/cart', 'PageController@cart', 'cart.show');
$router->get('/fav', 'PageController@fav', 'home.fav');
// $router->get("/country/{id}", ) ;
// Sign Up Page Routes
$router->get('/register', 'PageController@register', 'register.show');
$router->post('/register', 'AuthController@registration', 'registration.submit');

// Login Page Routes
$router->get('/login', 'AuthController@loginPage', 'login.show');
$router->post('/login', 'AuthController@login', 'login.submit');
$router->get('/logout', 'AuthController@logout', 'auth.logout');

// Route for listing all profile
$router->get('/countries', 'CountryController@index', 'countries.index');
$router->get('/profile', 'PageController@profile', 'profile.profile');
// $router->get('/category', 'PageController@category', 'category.show');

// Route for showing a specific country and its products
$router->get('/country/show/{id}', 'CountryController@show', 'country.show');

$router->get('/contact', 'PageController@contact', 'home.contact');
$router->post('/contact', 'PageController@submitContact', 'home.submitContact');

// Cart routes
$router->get('/cart', 'CartController@index');
$router->post('/cart/add', 'CartController@add');
$router->post('/cart/update', 'CartController@update');
$router->get('/cart/remove/{id}', 'CartController@remove');
$router->get('/cart/clear', 'CartController@clear');

// Checkout routes
$router->get('/checkout', 'CheckoutController@index');
$router->post('/checkout/process', 'CheckoutController@process');
$router->get('/checkout/confirmation/{order_id}', 'CheckoutController@confirmation', 'checkout.confirmation');

// Update these routes in index.php:
$router->get('/profile', 'ProfileController@index', 'profile.index');
$router->post('/profile/update', 'ProfileController@update', 'profile.update');


// ---------------------------------------------------------------
// ---------------------------------------------------------------
// ---------------------------------------------------------------
// Admin Dasboard Routes

//Users routes
$router->get('admin/login', 'AdminController@login', 'admin.login');
$router->post('admin/login', 'AdminController@authenticate', 'admin.authenticate');


$router->get('/users', 'UserController@index', 'user.list');

$router->get('/users/create', 'UserController@create', 'user.create');
$router->post('/users/create', 'UserController@store', 'user.store');

$router->get('/users/{id}/edit', 'UserController@edit', 'user.edit');
$router->put('/users/{id}/edit', 'UserController@update', 'user.update');

$router->delete('/users/{id}', 'UserController@destroy', 'user.destroy');
$router->get('/users/{id}', 'UserController@show', 'user.show');

//Products routes
$router->get('/products', 'ProductController@index', 'product.index');

$router->get('/products/create', 'ProductController@create', 'product.create');
$router->post('/products/create', 'ProductController@store', 'product.store');

$router->get('/products/{id}/edit', 'ProductController@edit', 'product.edit');
$router->put('/products/{id}/edit', 'ProductController@update', 'product.update');

$router->delete('/products/{id}', 'ProductController@destroy', 'product.destroy');

$router->get('/products/{id}', 'ProductController@show', 'product.show');

$router->get('/', 'HomeController@index', 'home.index');

// Categories routes
$router->get('/categories', 'CategoryController@index', 'category.index');

$router->get('/categories/create', 'CategoryController@create', 'category.create');
$router->post('/categories/create', 'CategoryController@store', 'category.store');

$router->get('/categories/{id}/edit', 'CategoryController@edit', 'category.edit');
$router->put('/categories/{id}/edit', 'CategoryController@update', 'category.update');

$router->delete('/categories/{id}', 'CategoryController@destroy', 'category.destroy');

// Admins routes
$router->get('/admins', 'AdminController@index', 'admins.index');

$router->get('/admins/create', 'AdminController@create', 'admins.create');
$router->post('/admins/create', 'AdminController@store', 'admins.store');

$router->get('/admins/{id}/edit', 'AdminController@edit', 'admins.edit');
$router->put('/admins/{id}/edit', 'AdminController@update', 'admins.update');

$router->delete('/admins/{id}', 'AdminController@destroy', 'admins.destroy');

$router->dispatch();