<?php
session_start();
// set timezone Vietnam
date_default_timezone_set('Asia/Ho_Chi_Minh');
// url có dạng: index.php?controller=<>&action=<>
// Lấy tham số controller
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
// Lấy tham số action
$action = isset($_GET['action']) ? $_GET['action'] : "index";

// product -> Product
$controller = ucfirst($controller);
//ProductController.php
$controller_file = $controller."Controller.php";

// controllers/ProductController.php
$path_controller = "controllers/$controller_file";

if(!file_exists($path_controller)){
    die("Trang bạn không tồn tại");
}

require_once "$path_controller";

$controller_class = $controller."Controller";
$object = new $controller_class();

if(!method_exists($object,$action)){
    die("Phương thức $action không tồn tại trong class $controller_class");
}

$object->$action();