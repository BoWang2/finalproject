<?php 
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


	}


	public static function register()
	{


		
	}


	public static function save()//after updating form,save this record
	{
		$user =  accounts::findOne($_REQUEST['id']);
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