<?php 
namespace controller;
class controller
{
	static public function getTemplate($template,$data = NULL)
	{
		$template = 'page/' . $template . '.php';

		include $template;
	}


}


 ?>