<?php 
namespace collection;
class accounts extends \classes\collection
{
	protected static $modelName = 'account';

	public static function findUserbyEmail($email)
	{
	echo	$tableName = substr(get_called_class(), 11);
		 $sql = 'SELECT * FROM ' . $tableName . ' WHERE email = ?';

		  $recordsSet = self::getResults($sql, $email);

		   if (is_null($recordsSet)) {
            return FALSE;
        } else {
            return $recordsSet[0];
        }



	}

}





 ?>