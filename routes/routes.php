<?php namespace routes;
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
        $routes[] = $route;

		$route = new route();
		$route->http_method = 'POST';
		$route->page = 'homepage';
		$route->action = 'create';
		$route->controller = 'homepageController';
		$route->method = 'create';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'POST';
		$route->action = 'create';
		$route->page = 'tasks';
		$route->controller = 'tasksController';
		$route->method = 'create';
		$routes[] = $route;




		$route = new route();
		$route->http_method = 'GET';
		$route->action = 'show';
		$route->page = 'tasks';
		$route->controller = 'tasksController';
		$route->method = 'show';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'GET';
		$route->action = 'all';
		$route->page = 'tasks';
		$route->controller = 'tasksController';
		$route->method = 'all';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'POST';
		$route->action = 'save';
		$route->page = 'tasks';
		$route->controller = 'tasksController';
		$route->method = 'save';
		$routes[] = $route;


		

		$route = new route();
		$route->http_method = 'POST';
		$route->action = 'delete';
		$route->page = 'tasks';
		$route->controller = 'taskscontroller';
		$route->method = 'delete';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'POST';
		$route->action = 'store';
		$route->page = 'tasks';
		$route->controller = 'taskscontroller';
		$route->method = 'store';
		$routes[] = $route;


		//$route = new route();
		//$route->http_method = 'POST';
		//$route->action = 'save';
		//$route->page = 'tasks';
		//$route->controller = 'tasksController';
		//$route->method = 'store';
		//$routes[] = $route;


		$route = new route();
		$route->http_method = 'GET';
		$route->action = 'create';
		$route->page = 'tasks';
		$route->controller = 'taskscontroller';
		$route->method = 'newtodoform';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'GET';
		$route->action = 'show';
		$route->page = 'accounts';
		$route->controller = 'accountscontroller';
		$route->method = 'show';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'GET';
		$route->action = 'all';
		$route->page = 'accounts';
		$route->controller = 'accountscontroller';
		$route->method = 'all';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'POST';
		$route->action = 'delete';
		$route->page = 'accounts';
		$route->controller = 'accountscontroller';
		$route->method = 'delete';
		$routes[] = $route;



		$route = new route();
		$route->http_method = 'POST';
		$route->action = 'login';
		$route->page = 'accounts';
		$route->controller = 'accountscontroller';
		$route->method = 'login';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'GET';
		$route->action = 'edit';
		$route->page = 'accounts';
		$route->controller = 'accountscontroller';
		$route->method = 'edit';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'POST';
		$route->action = 'save';
		$route->page = 'accounts';
		$route->controller = 'accountscontroller';
		$route->method = 'save';
		$routes[] = $route;


		$route = new route();
		$route->http_method = 'GET';
		$route->action = 'register';
		$route->page = 'accounts';
		$route->controller = 'accountscontroller';
		$route->method = 'register';
		$routes[] = $route;


		return $routes;
	}

	 	public static function create($http_method,$action,$page,$controller,$method) 
	{
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
    }


}

class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
    public $http_method;
}


/*

class routes
{
    public static function getRoutes()
    {
        //bellow adds routes to your program, routes match the URL and request method with the controller and method.
        //You need to follow this pattern to add new URLS
        //You should improve this function by making functions to create routes in a factory. I will look for this when grading
        //I also use object for the route because it has data and it's easier to access.
        $route = new route();
        $route->http_method = 'GET';
        $route->page = 'homepage';        
        $route->action = 'show';      
        $route->controller = 'homepageController';
        $route->method = 'show';
        $routes[] = $route;
        
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'create';
        $route->page = 'homepage';
        $route->controller = 'homepageController';
        $route->method = 'create';
        $routes[] = $route;
        //This is an examole of the post for tasks to show a task
        //GET METHOD index.php?page=tasks&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'tasks';
        $route->controller = 'taskscontroller';
        $route->method = 'show';
        $routes[] = $route;
       
        //GET METHOD index.php?page=tasks&action=all
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'tasks';
        $route->controller = 'taskscontroller';
        $route->method = 'all';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=all
//https://web.njit.edu/~kwilliam/mvc/index.php?page=accounts&action=all
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'all';
        $route->page = 'accounts';
        $route->controller = 'accountscontroller';
        $route->method = 'all';
        $routes[] = $route;
        //GET METHOD index.php?page=accounts&action=show
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'show';
        $route->page = 'accounts';
        $route->controller = 'accountscontroller';
        $route->method = 'show';
        $routes[] = $route;
        //This goes in the login form action method
        //GET METHOD index.php?page=accounts&action=login
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'login';
        $route->page = 'accounts';
        $route->controller = 'accountscontroller';
        $route->method = 'login';
        $routes[] = $route;
        //YOU WILL NEED TO ADD MORE ROUTES
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'tasks';
        $route->controller = 'taskscontroller';
        $route->method = 'delete';
        $routes[] = $route;
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'delete';
        $route->page = 'accounts';
        $route->controller = 'accountscontroller';
        $route->method = 'delete';
        $routes[] = $route;
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'edit';
        $route->page = 'accounts';
        $route->controller = 'accountscontroller';
        $route->method = 'edit';
        $routes[] = $route;
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'save';
        $route->page = 'accounts';
        $route->controller = 'accountscontroller';
        $route->method = 'save';
        $routes[] = $route;
        //this is the route for the reg form
        $route = new route();
        $route->http_method = 'GET';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountscontroller';
        $route->method = 'register';
        $routes[] = $route;
        //this handles the reg post to create the user
        $route = new route();
        $route->http_method = 'POST';
        $route->action = 'register';
        $route->page = 'accounts';
        $route->controller = 'accountscontroller';
        $route->method = 'store';
        $routes[] = $route;
        return $routes;
    }
    public static function create($http_method,$action,$page,$controller,$method) 
    {
        $route = new route();
        $route->http_method = $http_method;
        $route->action = $action;
        $route->page = $page;
        $route->controller = $controller;
        $route->method = $method;
    }
}

class route
{
    public $page;
    public $action;
    public $method;
    public $controller;
    public $http_method;
}


*/

 ?>