<?php 
class taskcontroller extends controller
{
	public static function show()
	{
		$record = todos::findOne($_REQUEST['id']);
		self::getTemplate('todo_edit',$record);
	}


	public static function all()
	{
		$record = todos::findAll();
		session_start();
		$userID = $_SESSION['userID'];
		$tasks = todos::findTaskbyID($userID);
		//print_r($tasks);
		//echo $userID;
		self::getTemplate('all_tasks',$tasks);

	}


	public static function store()//
	{
		$record = todos::findOne($_REQUEST['id']);

	}


	public static function newtodoform()
	{
		$todo = new todo();
		self::getTemplate( 'todo',$todo);
	}


	public static function save()
	{
		$task = todos::findOne($_REQUEST['id']);
		$task->message = $_POST['message'];
		$task->duedate = $_POST['duedate'];
		$task->owneremail = $_POST['owneremail'];
		$task->isdone = $_POST['isdone'];
		$task->save();
		header("Location:index.php?page=tasks&action=all");
	}


	public static function delete()
	{
		$record = todos::findOne($_REQUEST['id']);
		$record->delete();
		//print

	}



	public static function create()
	{
       $todo = new todo();
       session_start();
	   $todo->ownerid = $_SESSION['userID'];
	  // $todo->createdudate = now();
	   $todo->isdone = $_POST['isdone'];
	   $todo->message = $_POST['message'];
	   $todo->dudate = $_POST['dudate'];
	   $todo->save();
	}




}




 ?>