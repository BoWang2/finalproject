<?php 
namespace controller;
class request
{
	static public function getRequestedMethod()
	{

		$request_method = $_SERVER['REQUEST_METHOD'];
		return $request_method;

	}

	static public function getRequestPage()
	{
		$pageRequest = 'homepage';
		 if (!empty($_REQUEST['page'])) 
		 {
             $pageRequest = $_REQUEST['page'];
         }
            return $pageRequest;
	}


	static public function getAction()
	{
		if(self::getRequestedMethod()=='POST')
			{
				$action = 'create';
			}
			else
			{
				$action = 'show';
			}

		if (!empty($_GET['action'])) 
			{
            	$action = $_GET['action'];
        	}
        	return $action;
    }

	






}






 ?>