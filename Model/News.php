<?php
class News{
    private $conn;
    public function __construct()
    {
        include('Database.php');
        $this->conn = $conn;
    }

    public function getAllNews(){
        $sql = "SELECT * FROM tintuc"; // Câu lệnh cần thực thi
        $stmt = $this->conn->prepare($sql);//Đối tượng PDOStatement đại diện cho câu lệnh SQL đã được chuẩn bị              
        $stmt->execute();
        $results = $stmt->fetchAll();//trả về dữ liệu kiểu mảng
        return $results;
    }

    public function getNewsFromId($id){
        $sql = "SELECT * FROM tintuc WHERE id=".$id; // Câu lệnh cần thực thi
        $stmt = $this->conn->prepare($sql);//Đối tượng PDOStatement đại diện cho câu lệnh SQL đã được chuẩn bị              
        $stmt->execute();
        $results = $stmt->fetch();//trả về dữ liệu kiểu mảng
        return $results;
    }
    public function store($title = "", $content= "", $image= ""){
        $message = "";
        if($title != ""){
        $sql = "INSERT INTO tintuc(title, content, image)
        VALUES ('".$title."', '".$content."', '".$image."')
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        // $result = $stmt->fetchAll();
        // return $result;
        $message = "them thanh cong";
        }else $message="ten khong duoc de trong";
        return $message;
    }

    public function delete($id) {
        $sql = "DELETE FROM tintuc WHERE id = ?";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]) ? "Xóa tin tức thành công!" : "Lỗi khi xóa sản phẩm!";
    }

    public function update($id ,$title, $content, $image){    
        $sql = "UPDATE tintuc SET
            title='".$title."',
            content='".$content."',
            image='".$image."'
            WHERE id =". $id;

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
    }
}