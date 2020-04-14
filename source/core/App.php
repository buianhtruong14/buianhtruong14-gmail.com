<?php
class App{
    protected $controller = 'Home';
    protected $action = 'index';
    protected $params = [];
    function __construct()
    {

        $url = $this->UrlProcess();
        //Array ( [0] => home [1] => hello [2] => 1 [3] => 2 [4] => 3 ) 

        //Process Controller
        if(file_exists('./source/controller/'.$url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        
        require_once './source/controller/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        //Process Action
        if (isset($url[1])){
            if (method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
            }
            unset($url[1]);
        }
        
        //Process Params
        $this->params = $url?array_values($url):[];
        
        call_user_func_array([$this->controller, $this->action], $this->params);
    }
    //Process url
    //return Array
    function UrlProcess()
    {
        if(isset($_GET['url'])){
            return explode('/',filter_var(trim($_GET['url'],'/')));
        }
    }
}
?>