<?php
class NewsController{
    public function listing(){
        require_once('Model/News.php');
        $new_model = new News();
        $ArrNew = $new_model->getAllNews();
        include('Views/admin/new_listing.php');
    }

    public function create(){
        include('Model/News.php');
        include('Views/admin/new_add.php');
        if(isset($_POST['submit'])){
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        //xu ly anh
        // $image = isset($_POST['image']) ? $_POST['image'] : '';
        $file_image = $_FILES['image'];
        $image_name ='';
        if(getimagesize($file_image['tmp_name']) !== false){
            $image_name = time().$file_image['name'];
            $source_file = $file_image['tmp_name'];
            $target_file = 'assets/images/'.$image_name;
            move_uploaded_file($source_file, $target_file);
        }
        $new_model = new News();
        $message = $new_model->store($title, $content, $image_name );
        header("Location: home.php?route=admin/new/listing");
        }
        
    }

    public function delete($id) {
        include('Model/News.php');
        // Kiểm tra xem ID có hợp lệ không
        if ($id) {
            $new_model = new News();
            $message = $new_model->delete($id); // Gọi hàm delete từ Model Product

            // Hiển thị thông báo và chuyển hướng
            echo "<script>alert('$message'); window.location.href='home.php?route=admin/new/listing';</script>";
        } else {
            echo "<script>alert('ID không hợp lệ!'); window.location.href='home.php?route=admin/new/listing';</script>";
        }
    }

    public function edit($id){
        include('Model/News.php');
        
        $new_model = new News();
        $new_arr_edit = $new_model->getNewsFromId($id);
        if(isset($_POST['submit'])){
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        //xu ly anh
        // $image = isset($_POST['image']) ? $_POST['image'] : '';
        $file_image = $_FILES['image'];
        $image_name = isset($file_image['name']) ? $file_image['name'] : '';
        if($image_name != ''){
        if(getimagesize($file_image['tmp_name']) !== false){
            $image_name = time().$file_image['name'];
            $source_file = $file_image['tmp_name'];
            $target_file = 'assets/images/'.$image_name;
            move_uploaded_file($source_file, $target_file);
            }
        }
        if($image_name == '') $image_name = $new_arr_edit['image'];
        $new_model = new News();
        $message = $new_model->update($id ,$title, $content, $image_name );
        header("Location: home.php?route=admin/new/listing");
        }
        include('Views/admin/new_edit.php');
    }
}