<!DOCTYPE html>
<html>
<head>
<title>COŚ CZEGO NIE WIEMY</title>
<meta charset="utf-8" lang="pl"/>
</head>
<body>
<?php
$connect = mysql_connect("localhost","root","");
if($connect)
{
	$baza= mysql_select_db("korporacja");
	if($baza)
	{
		$wynik = mysql_query(" SELECT * FROM pracownicy");
		if($wynik)
		{
			$ile= mysql_num_rows($wynik);
			if($ile>0)
			{
				for($i=1;$i<=$ile;$i++)
				{
					$record = mysql_fetch_assoc($wynik);
					$id = $record["id_pracownika"];
					$imie = $record["imie"];
					$nazwisko = $record["nazwisko"];
					print $id.". ".$imie." ".$nazwisko."<br />";
				}
			}else echo "zjebałes idioto nie ma rekordów";
		}else echo "błąd zjebałes";
		echo "<br /><br />";
		$wynik = mysql_query("select * from pracownicy where id_pracownika = 100");
		if($wynik)
		{
			$test = 0;
			while($record = mysql_fetch_assoc($wynik))
			{
				$imie = $record["imie"];
				$nazwisko= $record["nazwisko"];
				print $imie." ".$nazwisko."<br />";
				$test= 1;
			}
			if($test == 0) echo "zapytanie nie zwróciło ci życia brak respawnów";
		}else echo "Błąd TWOJEGO ZJEBANIA UMYSŁOWEGO";
	}else echo "Nie połączono z bazą danych";
	mysql_close();
}else echo "<h3>Brak połączenia z danymi you die </h3>";
?>
</body>
</html>