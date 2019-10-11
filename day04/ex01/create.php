<?php
foreach($_GET as $var=>$value)
{
	$tab[$var] = $value;
}
if ($tab['submit'] == "OK")
{
	
	$account['login'] = $_GET['login'];
	$account['passwd'] = $_GET['passwd'];
}
else
{
	echo "ERROR\n";
}
?>
<html>
<body>

<form action="create.php" method="post">
Username: <input type="text" name="login" value=""><br>
Password: <input type="password" name="passwd" value =""><br>
<input type="submit" name="submit" value="OK">
</form>

</body>
</html>