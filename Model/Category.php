<?php
class Category{
    private $conn;
    public function __construct()
    {
        include('Database.php');
        $this->conn = $conn;
    }

    public function getAll(){
        $sql = "SELECT * FROM category"; // Câu lệnh cần thực thi
        $stmt = $this->conn->prepare($sql);//Đối tượng PDOStatement đại diện cho câu lệnh SQL đã được chuẩn bị              
        $stmt->execute();
        $results = $stmt->fetchAll();//trả về dữ liệu kiểu mảng
        return $results;
    }
    function getById($id){
        $sql = "SELECT * FROM category WHERE id=".$id; // Câu lệnh cần thực thi
        $stmt = $this->conn->prepare($sql);//Đối tượng PDOStatement đại diện cho câu lệnh SQL đã được chuẩn bị              
        $stmt->execute();
        $results = $stmt->fetch();//trả về dữ liệu kiểu mảng
        return $results;
    }
}