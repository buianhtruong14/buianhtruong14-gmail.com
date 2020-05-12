<?php

class Admin extends Controller {

	function __construct() {
		parent::__construct();
	}
    
    function index() {
		$this->view->render('admin/login');
	}

	function dashboard(){
		Session::init();
		$logged = Session::get('loggedIn');
		
		// echo $_SESSION['loggedIn'];
        if ($logged == true) {
			$this->view->render('admin/dashboard');
            
        } else {
			Session::destroy();
            header('location: ../admin');
            exit;
		}
	}

	function addSlide(){
		$data['page'] = 'admin/slide/add';
		$this->view->render('admin/dashboard',$data);
	}

	function checkAdmin(){
		$data['page'] = $this->model->run();
		$this->view->render('admin/dashboard',$data);
	}

	function logout()
    {
        Session::destroy();
        header('location: ../admin');
        exit;
	}
	
	function saveSlide()
	{
		$this->model->save();
		// header('location: allSlide');
	}
	
	function allSlide(){
		$data['page'] = 'admin/slide/all';
		$data['slide'] = $this->model->getSlideAll();
		$this->view->render('admin/dashboard',$data);
	}

	function editSlide($req){
		$data['page'] = 'admin/slide/edit';
		$data['slide'] = $this->model->getSlideId($req);
		$this->view->render('admin/dashboard',$data);
	}

	function deleteSlide($req){
		$this->model->deleteSlide($req);
		header('location: ../allSlide');
	}
	
}