<?php 
class Inform extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->render('page/inform/index');
	}

	public function delivery()
	{
		$this->view->render('page/inform/delivery');	
	}

	public function service()
	{
		$this->view->render('page/inform/service');
	}
}
