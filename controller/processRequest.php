<?php 
class processRequest
{
	public static function createResponse()
	{
		$requested_route = processRequest::getRequestedRoute();
		$controler_name = $requested_route->controller;//This is an important function to look at, it determines which controller to use
		$controller_method = $requested_route->method;//this determine the way that call controller
		$controler_name::$controller_method();

	}

	public static function getRequestedRoute()
	{
		$request_method = request::getRequestedMethod();
		$page = request::getPage();
		$action = request::getAction();
		$routes = routes::getRoutes();

		foreach($routes as $route)
		{
			if($route->page == $page && $route->http_method == $request_method && $route->action == $action)
			{
				$foundRoute = $route;
				break;
			}
		}
		return $foundRoute;
	}



}




 ?>