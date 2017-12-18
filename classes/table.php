<?php 
namespace classes;
class table
{
	static public function generateTable($array)
	{
		$table = htmlTags::tableHead();//<table width="300" border="1">
		$container = $_REQUEST['page'];
		foreach ($array as $k => $j)
		{
			if($k == 0)
			{
				$table .= htmlTags::tableLineStart();
				foreach ($j as $column => $value) {
					$table .= htmlTags::tableTitle($column);
				}
				$table .= htmlTags::tableLineEnd();
			}
			$table .= htmlTags::tableLineStart();
			foreach ($j as $column => $value) {
				if ($colum == 'id')
				{
					$table .= htmlTags::tableDetail('<a href="index.php?page=' . $container . '&action=show&id=' . $value . '">View</a>');
				}else{
				if()
				$table .= htmlTags::tableDetail($value);
			}
			}
			$table .=htmlTags::tableLineEnd();
		}
		$table .= htmlTags::tableEnd();
		return $table;
	}

}



 ?>
