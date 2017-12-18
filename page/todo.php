<html>

<body>

<form action="index.php?page=tasks&action=create" method="post">
	Owner email: <input type="text" name="ownerEmail" value="<?php  echo $data->owneremail?>"><br>
	Due Data: <input type="text" name="duedate" value="<?php  echo $data->duedate?>"><br>
	Message: <input type="text" name="message" value="<?php  echo $data->message?>"><br>
	IS Done: <input type="text" name="isdone" value="<?php  echo $data->isdone?>"><br>
	<input type="submit" value="submit form">
</form>
	
</body>
</html>
