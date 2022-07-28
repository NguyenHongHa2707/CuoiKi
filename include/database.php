
<?php 
    class database{
        public $conn;
        protected $severName  = "bklbrb259rl7ne9gdwir-mysql.services.clever-cloud.com";
        protected $userName = "uf5kzzltypxtsou1";
        protected $passWord ="AqvQhpMrrXFASuyXrxSx";
        protected $databaseName = "bklbrb259rl7ne9gdwir";

        function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->severName;dbname=$this->databaseName", $this->userName, $this->passWord);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
        }
        function insertCategories($title,$description){
          $sql = "INSERT INTO categories (description, name) VALUES ('$description', '$title')";
          $this->conn->exec($sql);
        }
        function selectCategories(){
          $stmt = $this->conn->query("SELECT id, name, description FROM categories");
          $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $data;
        }
        function updateCate($title,$description,$id){
          $sql = "UPDATE categories SET description='$description', name = '$title' WHERE id= $id";
          $stmt = $this->conn->prepare($sql);
          $stmt->execute();
        }
        function deleteCate($id){
          $sql = "DELETE FROM categories WHERE id=$id";
          $this->conn->exec($sql);
        }
        function insertPost($title,$categori,$description,$content, $id_user,$image){
          $time_php=time();
          $sql = "INSERT INTO post ( title,description, id_user, time_add, content, category, link_image) VALUES ('$title', '$description','$id_user','$time_php','$content','$categori','$image')";
          $this->conn->exec($sql);
        }
        function selectPost(){
          $stmt = $this->conn->query("SELECT * FROM post");
          $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $data;
        }
        function selectPostId($id){
          $stmt = $this->conn->query("SELECT * FROM post WHERE id_post=$id");
          $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $result;
        }
        function updatePost($id,$title,$categori,$description,$content,$image){
          $sql = "UPDATE post SET title='$title', description = '$description', category ='$categori', content= '$content', link_image = '$image' WHERE id_post= $id";
          $stmt = $this->conn->prepare($sql);
          $stmt->execute();
        }
        function detetePost($id){
          $sql = "DELETE FROM post WHERE id_post=$id";
          $this->conn->exec($sql);
        }
        function insertReport($name,$email,$mess){
          $time_php=time();
          $sql = "INSERT INTO report ( name,email, mess) VALUES ('$name', '$email','$mess')";
          $this->conn->exec($sql);
        }
        //lấy tất cả
        // function SelectAll($sql){
        //   try{
        //     $query = $this->conn->prepare($sql);
        //     $query->execute();
        //     $result =  $query->fetchAll(PDO::FETCH_ASSOC);
        //     return $result;
        //   }catch(Exception $e){
        //     // echo "CÓ LỖI XẢY RA!";die;
        //   }
            
        // }
        // //lấy ra số hàng của dữ liệu
        // function SelectRow($sql){
        //   try{
        //     $query = $this->conn->prepare($sql);
        //     $query->execute();
        //     $result =  $query->rowCount();
        //   }
        //   catch(Exception $e){
           
        //   }
        //   return $result;
        // }
     
        // function ExecuteSQL($sql){
        //   try{
        //     $query = $this->conn->prepare($sql);
        //     return $query->execute();
        //   }catch(Exception $e){
            
        //   }
        // }
        // //lấy ra id sau khi insert
        // function lastInsertID($sql){
        //   try{
        //     $query = $this->conn->prepare($sql);
        //     $query->execute();
        //     $id_order = $this->conn->lastInsertId();
        //     return $id_order;
        //   }catch(Exception $e){
        //     // echo "CÓ LỖI XẢY RA!";die;
        //   }
        // }
    }
?>