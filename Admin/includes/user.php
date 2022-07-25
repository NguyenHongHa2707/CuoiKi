<?php 
    Class user{
        private $conn;
        private $table="user";
        public $ID;
        public $username;
        public $password;
        public $email;
        public function __construct($db)
        {
            $this->conn=$db;
        }

        //doc 
        public function read(){
            $sql="SELECT * FROM $this->table";
            $stmt=$this->conn->prepare($sql);
            $stmt->execute();
            return $stmt;
        
        }
        //create one record
        public function create(){
            //create querry
            $query="INSERT INTO $this->table SET ID=:id,Username =:Username,password=:password,email=:Email";
            $stmt=$this->conn->prepare($query);
            //clean data
            $this->message =htmlspecialchars(strip_tags($this->message));
            //bind data
            $stmt->bindParam('ID',$this->id);
            $stmt->bindParam('username',$this->username);
            $stmt->bindParam('password',$this->password);
            $stmt->bindParam('email',$this->email);
            if($stmt->execute())
            {
                return true;
            }
            printf("Error:%s .\n, $stmt->error");
            return false;
            
        }
        public function update(){
            // //create sql
            // $query="UPDATE $this ->table 
            // SET username=:Username,password=:Password,email=:Email WHERE id=:ID";
            // $stmt=$this->conn->prepare($query);
            // //clean data
            // $this->message=htmlspecialchars(strip_tags($this->))
        }
        public function delete(){
            $query="DELETE FROM $this->table WHERE id=:get_id";
            $stmt=$this->conn->prepare($query);
            //clean data
            $this->id=htmlspecialchars(strip_tags($this->id));
            //bind data
            $stmt->bindParam(':get_id,$this->id');
            //execute querry
            if($stmt->execute())
            {
                return true;

            }
            printf("Error: %s.\n", $stmt->error);
            return false;
        }
        public function last_id(){
            $this->last_insert_id=$this->conn->lastinsertId();
            return $this->last_insert_id;   
        }

        
    }
?>