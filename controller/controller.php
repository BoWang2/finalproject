<?php 
namespace controller;
class controller
{
	static public function getTmplate($template,$data = NULL)
	{
		$tmplate = 'page/' . $template . '.php';

		include $template;
	}


}


 ?>