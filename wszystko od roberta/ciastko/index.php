<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
<?php
if(isset($_COOKIE["login"]))
{
	$login=$_COOKIE["login"];
}
else
{
	$login="Alamakota";
}
setcookie("login",$login,time()+60*3);
?>
?>
</body>
</html>