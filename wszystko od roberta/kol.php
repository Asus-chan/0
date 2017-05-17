<!DOCTYPE html>
<html>
<head>
<title>I think we need rein...</title>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
$serwer = mysqli_connect("localhost","root","","korporacja");
if($serwer)
{	
	$wynik=$serwer -> query("SELECT * FROM pracownicy");
	if($wynik)
	{
		while($rekord= $wynik -> fetch_object()):
		$id =$rekord -> id_pracownika;
		$imie=$rekord -> imie;
		$nazwisko=$rekord -> nazwisko;
		echo ($id)." - ".($imie)." ".($nazwisko)."<br />";
		endwhile;
	
	
	mysqli_close($serwer);
	}
	else
	{
	echo "Zapytanie nie zwróciło rekordów";
	}
}
else
{
	echo "BRAK POŁĄCZENIA Z BAZĄ DANyCH";
}
?>
</body>
</html>