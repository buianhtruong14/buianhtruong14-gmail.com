<?php

class Services extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['page']='front/services/index';
        $data['slide'] = $this->model->getSlide();
        $this->view->render('front/main',$data);
    }

    function details() {
        $this->view->render('index/index');
    }

}