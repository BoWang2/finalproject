<?php 
namespace classes;
class htmlTags
{
	static public function tableHead()
	{
		return '<table width="300" border="1">';
	}

	static public function tableLineStart()
	{
		return '<tr>';
	}

	static public function tableTitle($input)
	{
		return '<td>'.$input.'</td>';
	}


	static public function tableLineEnd()
	{

		return '</tr>';
	}


	static public function tableEnd()
	{
		return '</table>';
	}
}





 ?>
