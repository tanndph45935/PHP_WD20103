<?php
class CategoryController{
    public function index(){
        require_once('Model/News.php');
        require_once('Model/Category.php');
        $category_model = new Category();
        $all_category = $category_model->getAll();
        $model_new = new News();
        $id = $_GET['id'] ?? 0;
        $cat_current = $category_model->getById($id);
        
        include('Views/layout/header.php');
        include('Views/home/category.php');
        include('Views/layout/footer.php');
    }
}