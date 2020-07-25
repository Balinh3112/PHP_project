<?php
class model extends data{ 
    public function __construct(){
        parent::__construct();
    }
    public function dt(){
        $qr = "SELECT *FROM TB";
        return mysqli_query($this->con,$qr);
    }
    public function connect()
    {
        return $this->con;
    }
    // public function tong()
    // {
    //     $qr = "SELECT *FROM TB";
    //     $ds = mysqli_query($this->con,$qr);
    //     return $tongtin = mysqli_num_rows($ds);
    // }
    public function update($con,$title,$description,$image,$status,$id){
        $update_at =null; 
        $update_at= date('d/m/Y - H:i:s');
        $sql = "UPDATE TB SET title='$title',Description='$description',image='$image',status='$status' WHERE id='$id' ";
        if (mysqli_query($this->con,$sql))
        {
            header("Location:http://localhost:8080/PHP_MVC/admin/ad/");
        }

    }
    public function create($con,$title,$description,$image,$status,$id){
        $update_at =    NULL;   
        $create_at = date('d/m/Y - H:i:s');  
        $sql = "INSERT INTO TB (title,Description,image,status,id) VALUES ('$title','$description','$image','$status','$id')"; 
        // $sql = "INSERT INTO TB (id,title,Description,image,status,create_at,update_at) VALUES ('$id','1','$description','$image','$status','','$update_at)";
        if (mysqli_query($this->con,$sql))
        {
            header("Location:http://localhost:8080/PHP_MVC/admin/ad/");
        }
    }
    public function delete($con,$id){
        $sql = "DELETE FROM TB WHERE id=$id";
        
        if (mysqli_query($this->con,$sql))
            header("Location:http://localhost:8080/PHP_MVC/admin/ad/");
    }
}
?>