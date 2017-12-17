<?php 
class taskcontroller extends controller
{
	public static function one()
	{
		$record = todos::findOne($_REQUEST['id']);
		self::getTemplate('one_todos',$record);
	}


	public static function all()
	{
		$record = todos::findAll();
		self::getTemplate('all_todos',$record);
	}





	public static function save()
	{
		$task = todos::findOne($_REQUEST['id']);
		$task->message = $_POST['message'];
		$task->duedate = $_POST['duedate'];
		$task->owneremail = $_POST['owneremail'];
		$task->isdone = $_POST['isdone'];
		$task->save();

	}


	public static function delete()
	{
		$record = todos::findOne($_REQUEST['id']);
		$record->delete();
		//print

	}



	public static function create()
	{
      //  self::getTemplate('create_task', $record);
		
	}




}




 ?>