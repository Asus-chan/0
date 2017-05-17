<!DOCTYPE html>
<html>
<head>
<title>Zadanie</title>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$hidden=$_REQUEST["hidden"];
$login=$_REQUEST["login"];
$mail=$_REQUEST["mail"];
if($hidden==0)
{
echo <<<KONIEC
<form action="index.php" method="post" />
Login:&nbsp;<input type="text" name="login" value="" /><br /><br />
Mail:&nbsp;<input type="email" name="mail" value= "" /><br /><br />
<input type="hidden" name="hidden" value=1 />
<input type="submit" value="Wyślij" />
</form>
KONIEC;

}
else
{
echo "Login: ".$login."<br /><br />";
echo "Mail: ".$mail."<br /><br /><br />";
echo <<<KONIEC
<form action="index.php" method="post" />
login:&nbsp;<input type="text" name="login" value="" /><br /><br />
mail:&nbsp;<input type="email" name="mail" value= "" /><br /><br />
<input type="submit" value="Wyślij" />
</form>
KONIEC;
}



?>

	
</body>
</html>