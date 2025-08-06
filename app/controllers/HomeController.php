<?php 
class HomeController{
    public function index(){
        $views = "app/views/HomePage.php";
        include "app/views/index.php";
    }
}