<?php
$login = $_REQUEST["login_form"];
$password= $_REQUEST["password"];
if(isset($_REQUEST["memory"]))
{
	$memory= $_REQUEST["memory"];
}
else
{
	$memory = "nie";
}
if($login== "robis2" and $password=="haslo")
{
	$zalogowany= "tak";
	if($memory=="tak")
	{
	setcookie("zalogowany",$zalogowany,time()+60);
	setcookie("login",$login,time()+60);
	}
	
}
else
{
	$zalogowany= "nie";
	
	setcookie("zalogowany",$zalogowany,time()+60);
	setcookie("login","anonim",time()+60);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
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