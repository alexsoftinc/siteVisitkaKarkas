<?php 
// Отрабатывает как MainController _ )
class Index extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->render('page/main/index');
	}
}
