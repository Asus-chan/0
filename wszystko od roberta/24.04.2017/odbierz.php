<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
$login = $_REQUEST["login"];
$haslo = $_REQUEST["haslo"];
//$haslo = str_replace('\\','',$haslo); //UDAJEMY ŻE TEJ LINIJKI NIE
$haslo = str_replace('\'','\\\'',$haslo); //UDAJEMY ŻE TEJ LINIJKI NIE
print $haslo."<br />";
$baza = mysqli_connect('localhost','root','','korporacja');
if($baza)
{
	$wynik = $baza -> query("SELECT * FROM pracownicy where imie='$login' and nazwisko='$haslo'");
	mysqli_close($baza);
}else echo "<h3>BRAK POŁĄCZENIA Z BAZA IDIOTO</h3>";
if($wynik)
{
	$n = mysqli_num_rows($wynik);
	if($n > 0)
	{
		for($i=0;$i<$n;$i++)
		{
			$wiersz = mysqli_fetch_assoc($wynik);
			$numer = $i + 1;
			print $numer.". ".$wiersz['imie']." ".$wiersz['nazwisko']."<br />";
		}
	}else echo "<p>BRAK REKORDÓW SPEŁNIAJĄCYCH KRYTERIA WYSZUKIWANIA</p>";
}else echo "<h4>BŁĄD ZAPYTANIA</h4>";
echo "<a href=\"index.php\">Powrót do formularza</a>";
?>
</body>
</html>