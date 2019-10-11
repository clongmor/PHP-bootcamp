<?php
session_start();
foreach($_GET as $var=>$value)
{
	$tab[$var] = $value;
}
if ($tab['submit'] == "OK")
{
	
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}
?>

<html>
<body>

<form action="index.php" method="get">
Username: <input type="text" name="login" value="<?= $_SESSION["login"]; ?>"><br>
Password: <input type="password" name="passwd" value ="<?= $_SESSION['passwd']; ?>"><br>
<input type="submit" name="submit" value="OK">
</form>

</body>
</html>