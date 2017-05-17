<!DOCTYPE html>
<html lang="pl">
<head>
<title>Show</title>
<meta charset="utf-8" />
</head>
<body>
<?php
$login= $_REQUEST["login"];
$radio= $_REQUEST["radio"];
echo "Witaj, ".($login)."<br />";
echo "Typ osoby: ".($radio)."<br />";
if($radio=="osoba fizyczna")
{	
echo <<<KONIEC
<form action="odbierz.php" method="post" />
Login:&nbsp;<input type="text" name="login" value="$login" /><br /><br />
Imie:&nbsp;<input type="text" name="imie" value="" /><br /><br />
Nazwisko:&nbsp;<input type="text" name="nazwisko" value="" /><br /><br />

<input type="submit" value="Wyslij" />
<form>
KONIEC;
}
else
	
{
	if($radio=="firma")
	{
	echo <<<KONIEC
<form action="odbierz.php" method="post" />
Login:&nbsp;<input type="text" name="login" value="$login" /><br /><br />
NIP:&nbsp;<input type="text" name="nip" value="" /><br /><br />
regon:&nbsp;<input type="text" name="regon" value="" /><br /><br />

<input type="submit" value="Wyslij" />
<form>
KONIEC;
	}
else
		
	{
	echo <<<KONIEC
<form action="odbierz.php" method="post" />
Login:&nbsp;<input type="text" name="login" value="$login" /><br /><br />
nazwa:&nbsp;<input type="text" name="nazwa" value="" /><br /><br />
KRS:&nbsp;<input type="text" name="krs" value="" /><br /><br />

<input type="submit" value="Wyslij" />
<form>
KONIEC;
	}
	}
	
	

?>
</body>
</html>