<!DOCTYPE html>
<html>
<head>
<title>I think we need rein...</title>
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
	$wynik = $serwer -> query(
	"INSERT INTO users(imie, nazwisko, login, mail, haslo, kod, status)
	VALUES('$imie', '$nazwisko', '$login', '$mail', '$haslo', '$kod', '$status') "
	);
	if($wynik)
	{
		$list = "Dziękujemy za rejetrację w naszym serwisie.
Aby potwierdzić rejestrację kliknij poniższy link:
http://localhost/szkola/tai/mysql/wilk/potwierdzenie.php?kod=$kod
W przeciwnym wypadku zignoruj ten mail";
$from = "aardvark@127.0.0.1";
$headers = "From: ".$from;
mail($mail, "Witamy w serwisie XYZ", $list, $headers);
echo "Na podany podczas rejestracji mail wysłaliśmy link aktywacyjny<br />";
echo "W przypadku braku maila sprawdź folder spam"; 

		echo "User został dodany";
	}
	else
	{
		echo "użytkownik nie został dodany";
	}
}
else
{
	echo "<h4>BRAK POŁĄCZENIA Z BAZĄ DANYCH LUB HOSTEM!!!!</h4>";
}
?>
	
</body>
</html>