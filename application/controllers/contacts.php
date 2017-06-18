<?php 
class Contacts extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->render('page/contacts/index');
	}
}
