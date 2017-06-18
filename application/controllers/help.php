<?php 
class Help extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo 'Load in Help controller inside Index method ';		
	}

	public function other($one, $twu)
	{
		echo 'Мы внутри другого метода Help контроллера<br/>';
		echo $one . $twu;

		$this->view->message = $twu;

		$this->view->render('page/help/other/index');
	}
}
