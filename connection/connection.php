<?php
//creating a class to connect to database
class connection{
    private $host="localhost";
    private $user="root";
    private $password="";
    private $db="pms";
    public $conn;
    //creating a constructor
    public function __construct()
    {
        $this->conn = new mysqli($this->host,$this->user,$this->password,$this->db);
        if($this->conn->connect_error){
            die("failed to connect to database".$this->conn->connect_error);

        }
    }

}




?>