<?php
class Home extends Controller{
    function index(){
        $slideModel = $this->model('SlideModel');

        $this->view('index', [
                  'slide' => $slideModel->getSlide(),
                  'test' => 'Bui Anh Truong' 
        ]);
    }
    function Show(){
        echo 'Home -show';
        echo 'test';
    }
}
?> 