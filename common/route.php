<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});

//khu vực cần quan tâm
// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";


});

$router->get('product', [App\Controllers\ProductController::class, 'index']);
//hiển thị ra view add
$router->get('add-product', [App\Controllers\ProductController::class,'addProduct']);
//thực thi lệnh thêm
$router->post('add-product-post', [App\Controllers\ProductController::class,'addProductPost']);

$router->get('edit-product/{id}', [App\Controllers\ProductController::class,'editProduct']);
$router->post('edit-product-post/{id}', [App\Controllers\ProductController::class,'editProductPost']);
$router->get('delete-product/{id}', [App\Controllers\ProductController::class,'deleteProduct']);
$router->get('category',[App\Controllers\CategoryController::class,'index']);
$router->get('add-category', [App\Controllers\CategoryController::class,'addCategory']);
//thực thi lệnh thêm
$router->post('add-category-post', [App\Controllers\CategoryController::class,'addCategoryPost']);
$router->get('edit-category/{id}', [App\Controllers\CategoryController::class,'editCategory']);
$router->post('edit-category-post/{id}', [App\Controllers\CategoryController::class,'editCategoryPost']);
$router->get('delete-category/{id}', [App\Controllers\CategoryController::class,'deleteCategory']);

$router->get('user', [App\Controllers\UserController::class, 'index']);
//hiển thị ra view add
$router->get('add-user', [App\Controllers\UserController::class,'addUser']);
//thực thi lệnh thêm
$router->post('add-user-post', [App\Controllers\UserController::class,'addUserPost']);

$router->get('edit-user/{id}', [App\Controllers\UserController::class,'editUser']);
$router->post('edit-user-post/{id}', [App\Controllers\UserController::class,'editUserPost']);
$router->get('delete-user/{id}', [App\Controllers\UserController::class,'deleteUser']);

$router->get('comment', [App\Controllers\CommentController::class, 'index']);
//hiển thị ra view add
$router->get('add-comment', [App\Controllers\CommentController::class,'addComment']);
//thực thi lệnh thêm
$router->post('add-comment-post', [App\Controllers\CommentController::class,'addCommentPost']);

$router->get('edit-comment/{id}', [App\Controllers\CommentController::class,'editComment']);
$router->post('edit-comment-post/{id}', [App\Controllers\CommentController::class,'editCommentPost']);
$router->get('delete-comment/{id}', [App\Controllers\CommentController::class,'deleteComment']);

$router->get('booking', [App\Controllers\BookingController::class, 'index']);
//hiển thị ra view add
$router->get('add-booking', [App\Controllers\BookingController::class,'addBooking']);
//thực thi lệnh thêm
$router->post('add-booking-post', [App\Controllers\BookingController::class,'addBookingPost']);

$router->get('edit-booking/{id}', [App\Controllers\BookingController::class,'editBooking']);
$router->post('edit-booking-post/{id}', [App\Controllers\BookingController::class,'editBookingPost']);
$router->get('delete-booking/{id}', [App\Controllers\BookingController::class,'deleteBooking']);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>
