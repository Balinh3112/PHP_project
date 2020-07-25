<?php
   class data{ 
    public $conn;
    public $con;
    protected $servername='127.0.0.1:3306';
    protected $username='root';
    protected $password='1234';
    protected $db='blinh1';
    // function __construct(){
    //     $this->conn = new mysqli($this->servername, $this->username, $this->password);
    //     mysqli_select_db($this->conn,$this->db);
        
    // }
    // tao database 
    function __construct(){
        $this->conn = new mysqli($this->servername, $this->username, $this->password);
        $this->sql = "CREATE DATABASE blinh1";
        // if ($this->conn->connect_error) {
        //     die("Connection failed: " . $this->conn->connect_error);
        //     }
        // $this->con=$this->conn->query($this->sql);
        if ( $this->conn->query($this->sql) === TRUE) {
            echo "";
            } 
            // else {
            // echo "Error1 creating database: " . $this->conn->error;
            // }
        // mysqli_select_db($this->conn,$this->db);
        $this->con = new mysqli($this->servername,$this->username,$this->password,$this->db);
        $this->sql1 = "CREATE TABLE TB (
                id  INT PRIMARY KEY,
                title VARCHAR(50) NOT NULL,
                Description Text,
                image varchar(50),
                status int,
                create_at datetime,
                update_at datetime
              )"; 
        if ($this->conn->query($this->sql1) === TRUE) {
                echo "";
              } 
            //   else {
            // echo "Error creating table: " . $this->conn->error;
            //   }
    }
   }
?>  