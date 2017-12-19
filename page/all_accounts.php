
<!DOCTYPE html>
<html>
<head>
	<title>show all accounts</title>
</head>
<body>
<h1><a href="index.php?page=accounts&action=logout">Logout System</a></h1>
<?php

print \classes\table::generateTable($data);

?>


</body>
</html>







