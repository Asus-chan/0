<?php
if(isset($_COOKIE["zalogowany"]))
{
	$zalogowany=$_COOKIE["zalogowany"];
}
else
{
	$zalogowany="nie";
}
setcookie("zalogowany",$zalogowany,time()+60*5);
if(isset($_COOKIE["login"]))
{
	$login=$_COOKIE["login"];
}
else
{
	$login="anonim";
}
setcookie("login",$login,time()+60*5);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8" />
</head>
<body>
<?php
if($zalogowany== "tak")
{
	echo "Jesteś zalogowany jako: ".$login;
}
else
{
	echo "<a href=\"logowanie.php\">Zaloguj się</a>";
}
?>
</body>
</html>