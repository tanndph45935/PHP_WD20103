<?php
session_start();
require_once('Controller/HomeController.php');
require_once('Controller/DetailController.php');
require_once('Controller/CategoryController.php');
require_once('Controller/UserController.php');
require_once('Controller/admin/NewsController.php');
include('config.php');
include('function.php');
$route = isset($_GET['route']) ? $_GET['route']: '';
switch($route){
    case'home':
        $home = new HomeController();
        $home->index(); 
        break;
    case'detail':
        $home = new DetailController();
        $home->index(); 
        break;
    case'category':
        $home = new CategoryController();
        $home->index(); 
        break;
    case 'user/login':
        $login = new UserController();
        $login->index();
        break;
    case 'user/logout':
        $login = new UserController();
        $login->logout();
        break;
    case 'admin/new/listing':
        checkLogin();
        $new_listing = new NewsController();
        $new_listing->listing();
        break;
    case 'admin/new/add':
        checkLogin();
        $new_controller = new NewsController();
        $new_controller->create();
        break;
    case 'admin/new/delete':
        checkLogin();
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $new_controller = new NewsController();
        $new_controller->delete($id);
        break;
    case 'admin/new/edit':
        checkLogin();
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $new_controller = new NewsController();
        $new_controller->edit($id);
        break;
    default:
        $home = new HomeController();
        $home->index();
        break;
}