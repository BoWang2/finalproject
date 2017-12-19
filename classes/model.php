<?php 
namespace classes;
abstract class model
{

	//static public function create()
	//{
	//	$model = new static::$modelName;
	//	return $model;
	//}



	public function save()
	{
// add validation
		 if ($this->id != '') 
		{
            $sql = $this->update();
        } else {
            $sql = $this->insert();
            $INSERT = TRUE;
        }
        $db = dbConn::getConnection();
        $statement = $db->prepare($sql);
        $array = get_object_vars($this);
        if ($INSERT == TRUE) 
        {
            unset($array['id']);
        }
        foreach (array_flip($array) as $key => $value) 
        {
            $statement->bindParam(":$value", $this->$value);
        }
        $statement->execute();
        if ($INSERT == TRUE) 
        {
            $this->id = $db->lastInsertId();
        }
        return $this->id;
        }


		


	public function insert($colum,$value)
	{
		$modelName = static::$modelName;
		$tableName = $modelName::getTableName();
		$sql = ' INSERT INTO ' . $tableName . ' (' . $colum . ') VALUES (' . $value . ')'; 
		return $sql;
	}


//	public function validate()
//	{


//	}


	public function update()
	{
		$modelName = static::$modelName;
		$tableName = $modelName::getTableName();
		$array = get_object_vars($this);
		$sql = 'UPDATE' . $tableName . 'SET';
		$comma = " ";
		foreach ($array as $key => $colum) {
			if(!empty($key))
			{
				$sql .= $comma . $key . ' = ' . $colum;
				$comma = ", ";
			}
		}
		$sql .= ' WHERE id=' . $this->id;
		return $sql;

	}

	public function delete()
	{
		$db = dbConn::getConnection();
		$modelName = static::$modelName;
		$tableName = $modelName::getTableName();
		if(!empty($db))
		{
			$sql = 'DELETE FROM ' . $tableName . 'WHERE id = ' . $this->id;
			try
			{
				$statement = $db->prepare($sql);
				$statement->execute();
			}catch (\PDOException $e)
			{
				 echo "SQL error: " . $e->getMessage();
			}
		}


	}





}



 ?>