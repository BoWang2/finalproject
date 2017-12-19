<?php  namespace controller;
class processRequest
{
	public static function createResponse()
	{
		$requested_route = processRequest::getRequestedRoute();
		$controller_name = "controller\\" . $requested_route->controller;//This is an important function to look at, it determines which controller to use
		$controller_method = $requested_route->method;//this determine the way that call controller
		$controller_name::$controller_method();

	}

	public static function getRequestedRoute()
	{
		$request_method = request::getRequestedMethod();
		$page = request::getRequestPage();
		$action = request::getAction();
		$routes = \routes\routes::getRoutes();
    	$foundRoute = NULL;

		foreach($routes as $route)//this figures out which route matches the page being requested in the URL and returns it so that the controller and method can be called
		{
			if($route->page == $page && $route->http_method == $request_method && $route->action == $action)
			{
				$foundRoute = $route;
				break;
			}
		}
		if (is_null($foundRoute)) {
            controller::getTemplate('notfound');
            exit;
        } else {
            return $foundRoute;
		}

	}

}




 ?>