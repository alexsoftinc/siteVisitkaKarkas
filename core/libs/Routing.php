<?php 
class Routing
{
	public function __construct()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		// print_r($url);
		//eng/rus libs for working in Core
		if(empty($url[0])) {
			include_once 'application/controllers/index.php';

			$controller = new Index();

			$controller->index();

			return false;
		}

		// array($url[0]($url[1],$url[2],$url[3]))
		$file = 'application/controllers/' . $url[0] . '.php';

		if(file_exists($file)) {
			include_once $file;
		} else {
			include_once 'application/controllers/error.php';
			// throw new Exception("Error Processing Request file {$file} NOT EXISTS", 1);
			$controller = new Error(); // а в новом классе было бы Error::putError($_GET); и сразу запись в лог файл 
			return false;
		}

		$controller = new $url[0];

        if(isset($url[2])) {

            if(method_exists($controller, $url[1])) {
                // Is load controller/method/paramIs/param2/param3 И всё это работает по умолчанию в методах
                $controller->{$url[1]}($url[2],$url[3]);
            } else {
                echo 'Error lib here - ';
            }
        } else {
            if(isset($url[1])) {
                if(method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    echo 'Error lib here - ';
                }
            } else {
                $controller->index();
            }
        }

	}
}
