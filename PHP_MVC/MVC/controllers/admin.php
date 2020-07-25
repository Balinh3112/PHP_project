<?php
class admin extends Controller {
    
    function ad($val){
        $ad = $this->model("model");
        $this->view("Index",$data=['db'=>$ad->dt(),'con'=>$ad->connect(),'page'=>$val]);    
    }
    function delete($val){ 
        $del= $this->model("model");
        $del ->delete($del->con,$val); 
       
    }
    function show($val)
    {
        $show= $this->model("model");
        $this->view("Show",$data=['db'=>$show->dt(),'id'=>$val]);
    }
    function edit($val)
    {
        $edit = $this->model("model");
        $this->view("Edit",$data=['db'=>$edit->dt(),'id'=>$val]);
        
    }
    function new()
    {
        $new = $this->model("model");
        $this->view("New",$data=['db'=>$new->dt()]);
    }
    function create()
    {
        $id =$_POST['id'];
        $title =$_POST['title'];
        $description =$_POST['description'];
        $status =$_POST['status'];
        if ($_FILES['image']['name'] =='') $image ='';
        else $image = time() ."_".$_FILES['image']['name'];
        $target ="/opt/lampp/htdocs/PHP_MVC/public/picture/".$image;
        $update_at= date('d/m/Y - H:i:s');
        move_uploaded_file($_FILES['image']['tmp_name'], $target); 
        $create = $this->model("model");
        $create->create($create->con,$title,$description,$image,$status,$id);
    }
    function edit1($val)
    {
        $id =$val;
        $title =$_POST['title'];
        $description =$_POST['description'];
        $status =$_POST['status'];
        if ($_FILES['image']['name'] =='') $image ='';
        else $image = time() ."_".$_FILES['image']['name'];
        $target ="/opt/lampp/htdocs/PHP_MVC/public/picture/".$image;   
        move_uploaded_file($_FILES['image']['tmp_name'], $target);        
        $edit1 =  $this->model("model");
        $edit1 ->update($edit1->con,$title,$description,$image,$status,$id);   
       
    }

}
?>