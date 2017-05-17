<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
$host="localhost"; $user ="root"; $password=""; $baza ="korporacja"; $tabele="uzytkownicy";
$tabela="uzytkownicy";
/*
$zapytanie = "CREATE TABLE $tabela (id TINYINT NOT NULL PRIMARY KEY auto_increment, name TINYTEXT, password TINYTEXT)";

$connection = mysqli_connect($host,$user,$password,$baza);
if($connection)
{
	$wynik = $connection -> query($zapytanie);
	mysqli_close($connection);
	if($wynik)echo "Tabela: ".$tabela." została poprawnie dodana do bazy ".$baza;
	else echo "Tabela: <b>".$tabela." NIE</b> została poprawnie dodana do bazy ".$baza;
}
else
{
	echo "Brak połączenia z bazą: ".$baza;
}
*/
$zapytanie = "INSERT INTO $tabela (id, name, password) VALUES (1, 'Andrzej', 'alpha'), (2, 'Beata', 'beta'), (3, 'Cezary', 'charlie'), (4, 'Dorota', 'delta')";

$connection = mysqli_connect($host,$user,$password,$baza);
if($connection)
{
	$wynik = $connection -> query($zapytanie);
	mysqli_close($connection);
	if($wynik)echo "Tabela: ".$tabela." została poprawnie wypełnienia ";
	else echo "Tabela: <b>".$tabela." NIE</b> została poprawnie wypełnienia";
}
else
{
	echo "Brak połączenia z bazą: ".$baza;
}
?>
</body>
</html>