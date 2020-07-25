<?php
class App{

    protected $controller="admin";
    protected $action="ad";
    protected $params=[];
    function __construct(){
        $arr = $this->Url();
        // print_r ($arr);
        if( file_exists("./MVC/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./MVC/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;
        //  Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        //param
        $this->params = $arr?array_values($arr):[];
        call_user_func_array([$this->controller, $this->action],$this->params);   
    }
    function Url(){
        if( isset($_GET["url"]) ){
            return explode("/", trim($_GET["url"]));
        }
        
    }

}
?>