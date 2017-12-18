<html>
<body>

<form action="index.php?page=tasks$action=save&id=<?php echo $data->id; ?>" method="post">
	OwnerEmail <input type="text" name="ownerEmail"><br>
	Due Date <input type="text" name="duedate"><br>
	Message<input type="text" name="message"><br>
	isdone<input type="text" name="isdone"><br>
<input type="submit" value="submit">



</form>

		
</body>

</html>	