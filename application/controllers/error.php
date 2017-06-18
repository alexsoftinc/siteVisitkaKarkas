<?php 
// этот класс работает как штатный а есть в библиотеках лежит расширенный Error уже с логированием 
class Error extends Controller
{
	public function __construct()
	{
		parent::__construct();
		echo 'This is error constructor File ';
	}
}
