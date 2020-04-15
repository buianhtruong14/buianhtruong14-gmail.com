<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
        $data['slide'] = $this->model->getSlide();
		$this->view->render('front/index/index',$data);
	}
	
	function details() {
		$this->view->render('index/index');
	}
	
}