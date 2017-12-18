<?php 
namespace controllers;
class homepageController extends controller
{
	//this is index page
	public static function show()
	{

		
		self::getTemplate('homepage',$templateData);
	}
//	public static function create()
//	{


//	}

}



 ?>