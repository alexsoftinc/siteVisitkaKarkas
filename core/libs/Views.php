<?php 
class View
{
	public function __construct()
	{
		
	}

	public function render($tmp_file)
	{
		include_once 'template/default_layout/blocks/header.php';
		include_once 'template/default_layout/blocks/top_menu.php';
			include_once 'template/default_layout/' . $tmp_file . '.php';
		include_once 'template/default_layout/blocks/partner.php';
		include_once 'template/default_layout/blocks/footer.php';
	}
}
