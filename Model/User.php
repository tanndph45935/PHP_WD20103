<?php
class User {
    private $conn;
    public function __construct()
    {
        include('Database.php');
        $this->conn = $conn;
    }
    public function checkUser($email, $password){
        $sql = "SELECT * FROM user WHERE 
        email='". $email."' AND password= '". $password."' ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    
}