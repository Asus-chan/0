<!DOCTYPE html>
<html>
<head>
<title>dodaj usera</title>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
require_once("connect_dane.php");
$imie=$_REQUEST["imie"];
$nazwisko=$_REQUEST["nazwisko"];
$login=$_REQUEST["login"];
$haslo=$_REQUEST["haslo"];
$mail=$_REQUEST["mail"];

$haslo = md5($haslo);
$status =1;
srand(time());
$kod = uniqid(rand());
$serwer =mysqli_connect($host, $user, $password, $baza);
if($serwer)
{
	$wynik = $serwer -> query("INSERT INTO users (imie, nazwisko, login, mail, haslo, kod, status) VALUES ('$imie', '$nazwisko', '$login', '$mail', '$haslo', '$kod', '$status')");
mysqli_close($serwer);
if($wynik)
{
echo "User został dodany";
}
else
{
echo "User NIE został dodany";
}
}
else
{
	echo "<h4>BRAK POŁĄCZENIA Z BAZĄ DANYCH LUB HOSTEM!!!!</h4>";
}
?>
	
</body>
</html>