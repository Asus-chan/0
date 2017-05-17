<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl"
</head>
<body>
<?php
if(isset($_REQUEST["akcja"]))$akcja=$_REQUEST["akcja"];
else $akcja="pomin";
if($akcja=="sprawdz")
{
$wzor = "/^([0-9]|[a-z])+@([a-z]|[0-1]){2,4}$/";
	$string = $_REQUEST["string"];
	if(preg_match($wzor, $string))
	{
		echo "Ciąg znaków zgodny z wzorcem";
	}
	else
	{
		echo "Ciąg znaków NIE jest zgodny z wzorcem";
	}
}
else
{
echo<<<KONIEC
<form action="index.php" method="post">
Wyrażenie z wzorcem&nbsp&nbsp<input type="text" name="string" value="" />
<input type="hidden" name="akcja" value="sprawdz" /><br /><br />
<input type="submit" value="Wyślij" />
KONIEC;
}
?>
</body>
</html>