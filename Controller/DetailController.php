<?php
class DetailController{
    public function index(){
        require_once('Model/News.php');
        require_once('Model/Category.php');
        $category_model = new Category();
        $all_category = $category_model->getAll();
        $model_new = new News();
        $id = isset($_GET['id']) ? $_GET['id']: 0;
        $arr_news = $model_new->getNewsFromId($id);
         
        include('Views/layout/header.php');
        include('Views/home/detail.php');
        include('Views/layout/footer.php');
    }
}