<?php
session_start();
// require_once './configs/config_database.php';
// if (config_database::config_database()->connect_error) {
//     die("Connection failed: " . config_database::config_database()->connect_error);
// } else {
//     echo 'Hello world';
// }
$page = $_GET['page'] ?? 'home';

if (!isset($_SESSION['user']) && $page !== 'auth') {
    header('Location: index.php?page=auth');
    exit();
}

require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/itemsController.php';
require_once 'app/controllers/sizeController.php';
require_once 'app/controllers/AuthController.php';


$func = $_POST['func'] ?? 'index';
$fn = $_GET['fn'] ?? null;

switch ($page) {
    //~ for login and register
    case 'auth':
        $auth = new AuthController();
        if ($fn) {
            $auth->signUpForm();
            exit(); // Exit after handling the signUpForm to prevent further processing
        }
        switch ($func) {
            //^ for signUp account 
            // case 'signUp':
            //     break;
            //* for singIn account
            case 'signIn':
                break;
            case 'logout':
                break;
            case 'signUpForm':
                $auth->signUpFrom();
                break;
            default:
                $auth->index();
                break;
        }
        break;
    case 'home':
        $home = new HomeController();
        switch ($func) {
            case 'home':
            // $home->index();
            // break;
            default:
                $home->index();
                break;
        }
        break;
    case 'itemsPage':
        $items = new ItemsController();
        switch ($func) {
            case 'home':
            // $home->index();
            // break;
            default:
                $items->index();
                break;
        }
        // $controller->index();
        break;
    case 'sizePage':
        $size = new SizeController();
        switch ($func) {
            case 'home':
            // $home->index();
            // break;
            default:
                $size->index();
                break;
        }
        break;
}