<?php
class HomeController{
    public function index(){
        require_once('Model/News.php');
        require_once('Model/Category.php');
        $category_model = new Category();
        $all_category = $category_model->getAll();
        $model_new = new News();
        $arr_news = $model_new->getAllNews();
       
        include('Views/layout/header.php');
        include('Views/home/index.php');
        include('Views/layout/footer.php');
    }
}