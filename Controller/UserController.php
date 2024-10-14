<?php
    
class UserController {  
        public function index() {
            
            require_once('Model/User.php');
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                if($email != '' && $password != ''){
                    $user = new User;
                    $check = $user->checkUser($email,$password);
                    if($check != NULL){
                        $_SESSION['logged'] = true;
                        $_SESSION['email'] = $email;
                        header("Location: home.php");
                    }else{
                        echo 'Thong tin khong chinh xac';
                    }
                }
            }

            include('Views/login.php');
        }

    public function logout() {
    unset($_SESSION['logged']);
    unset($_SESSION['email']);

    // // // Điều hướng về trang đăng nhập hoặc trang chủ
    header("Location: home.php?route=user/login");
    
    }
}
