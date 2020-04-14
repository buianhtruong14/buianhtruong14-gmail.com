<?php
class Controller{
    function model($model){
        require_once './source/models/'.$model.'.php';
        return new $model;
    }
    function view($view,$req=[]){
        require_once './source/views/'.$view.'.blade.php';
    }
}
?>