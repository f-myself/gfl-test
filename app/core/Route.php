<?php


class Route
{
	function start()
	{
		//$ways = require_once "Ways.php";

		$controllerName = "MainController";
		$actionName = "IndexAction";
		$routes = explode('/', $_SERVER["REQUEST_URI"]);
		// var_dump($routes);
		if(!empty($routes[1]))
		{
			$controllerName = ucfirst($routes[1]) . "Controller";
		}

		if(!empty($routes[2]))
		{
			$actionName = $routes[2] . "Action";
		}

		if(!empty($routes[3]))
		{
			$methodParameter = $routes[3];
		}
		
		$controllerFile = $controllerName . ".php";

		if(file_exists("app/controllers/" . $controllerFile))
		{
			require_once "/../controllers/" . $controllerFile;
			$controllerObject = new $controllerName;
			if(method_exists($controllerObject, $actionName))
			{
				$controllerObject -> $actionName($methodParameter);
			}else{
				$controllerObject -> IndexAction();
			}
		}elseif (file_exists("app/admin/controllers/".$controllerFile))
		{
			require_once "/../admin/controllers/" . $controllerFile;
			$controllerObject = new $controllerName;
			if(method_exists($controllerObject, $actionName))
			{
				$controllerObject->$actionName($methotParameter);
			}else{
				echo "No Method!";
			}
		}else{
			echo "404!!!!";
		}

		// Префиксы
		

		

	}
}