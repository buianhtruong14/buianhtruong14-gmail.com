<?php

class Hotels extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['page']='front/holtels/index';
        $this->loadModel('index');
       $data['slide'] = $this->model->getSlide();
        $this->view->render('front/main',$data);
    }

    function details() {
        $this->view->render('index/index');
    }

}