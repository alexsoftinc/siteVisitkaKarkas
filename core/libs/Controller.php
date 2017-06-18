<?php 
class Controller
{
	public function __construct()
	{
		// В данном случае вид не обязателен как свойство 
		$this->view = new View();
	}
}
