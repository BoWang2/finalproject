<?php 
namespace classes;
abstract class collection
{
	//static public function create()
	//{
	//	$model = new static::$modelName;
	//	return $model;
	//}


	static public function findAll()
	{
		$db = classes\dbConn::getConnection();
		if (!empty($db)) {
                $class = static::$modelName;
                $sql = 'SELECT * FROM ' . $class;
                try {
                    $statement = $db->prepare($sql);
                    $statement->execute();
                   // $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
                    $recordsSet = $statement->fetchAll();
                    $recordsSet = findAll::objToArray($recordsSet);
                    return $recordsSet;
                      } catch (\PDOException $e){
                    echo "SQL error: " . $e->getMessage();
                }
            }
       }
	

       static public function objToArray($obj)
      {
             foreach ($obj as $key => $objects) 
             {
                $obj[$key] = (array) $objects;
             }
             return $obj;
      }




	static public function findOne($id)
	{
		 $db = classes\dbConn::getConnection();
		 if (!empty($db)) {
                $class = static::$modelName;
                $sql = 'SELECT * FROM ' . $class . ' WHERE id = ' . $id;
                try {
                    $statement = $db->prepare($sql);
                    $statement->execute();
                    $statement->setFetchMode(PDO::FETCH_CLASS, $class);
                    $recordsSet = $statement->fetchAll();
                    $recordsSet = findAll::objToArray($recordsSet);
                    return $recordsSet;
                } catch (\PDOException $e){
                   echo "SQL error: " . $e->getMessage();
                }
            }
        }
	}






 ?>