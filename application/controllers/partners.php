<?php 
class Partners extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->render('page/partners/index');
	}
}
