<?php 
namespace controller;
class accountscontroller extends controller
{
	public static function one()
	{
		$record = accounts::findOne($_REQUEST['id']);
		self::getTemplate('one_accounts',$record);
	}

	public static function all()
	{
		$record = accounts::findAll();
		self::getTemplate('all_accounts',$record);
	}
 

	public static function store()
	{//find userby email




	}


	public static function login()
	{
		$user = accounts::findUserbyEmail($_REQUEST['email']);
		if($user == FALSE)
		{
			echo 'user not validate';
		}else
		{
			if($user->checkPassword($_POST['password']) == TRUE)
			{
				echo 'login';
				session_start();
				$_SESSION['userID'] = $user->id;
				header("Location:index.php?page=tasks&action=all");
			}else
			{
				echo 'password not match';
			}
		}

	}


	public static function register()
	{

		self::getTemplate('register',$record);

	}

	public static function logout()
	{
 		session_start();
        session_destroy();
        header('Location: index.php');


	}



	public static function save()
	{
		$user =  collection\accounts::findOne($_REQUEST['id']);
		$user->email = $_POST['email'];
        $user->fname = $_POST['fname'];
        $user->lname = $_POST['lname'];
        $user->phone = $_POST['phone'];
        $user->birthday = $_POST['birthday'];
        $user->gender = $_POST['gender'];
        $user->save();
        header("Location:index.php?page=accounts&action=all");
	}

	public static function delete()
	{
		$record = accounts::findOne($_REQUEST['id']);
		$record->delete();
		header("Location:index.php?page=accounts&action=all");
	}



	public static function create()
	{



	}



}


 ?>