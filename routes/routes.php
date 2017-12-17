<?php 
class routes
{
	public static function getRoutes()
	{
		$route = new route();
		$route->http_method = 'GET';
		$route->page = 'homepage';
		$route->action = 'show';
		$route->controller = 'homepageController';
		$route->method = 'show';



		$route = new route();
		$route->http_method = 'GET';
		$route->action = 'create';
		$route->page = 'tasks';
		$route->controller = 'tasksController';
		$route->method = 'create';
		$routes[] = $route;




		$route = new route();
		$route->http_method = 'POST';
		$route->action = 'save';
		$route->page = 'tasks';
		$route->controller = 'tasksController';
		$route->method = 'save';
		$routes[] = $route;


		$route = new route();
		$route->http_method = '';
		$route->action = '';
		$route->page = 'tasks';
		$route->controller = 'tasksController';
		$route->method = '';
		$routes[] = $route;











	}


}

class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
}



 ?>