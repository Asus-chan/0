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
	$ile = mysqli_num_rows($wynik);
	if($ile>=1);
	{
		for($i=0;$i<$ile;$i++)
		{
		$rekord = mysqli_fetch_assoc($wynik);
		$imie = $rekord["imie"];
		$nazwisko = $rekord["nazwisko"];
		echo ($imie)." ".($nazwisko)."<br />";
		}
	
	}
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