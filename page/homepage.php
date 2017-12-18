<html>
<body>


<input type="button" value="show all Accounts" onclik="location.href='index.php?page=accounts&action=all'">
<input type="button" value="show all Tasks" onclik="location.href='index.php?page=tasks&action=all'">

<form action="index.php?page=accounts&action=login" method="POST">

 <label><b>Username</b></label>
 <input type="text" placeholder="Enter Username" name="email" required>

<label><b>Password</b></label>

 <input type="password" placeholder="Enter Password" name="password" required>
 <button type="submit">Login</button>
</form>

<input type="button" value="Register" onclik="location.href='index.php?page=accounts&action=register'">
</body>
</html>


