<!DOCTYPE html>
<html>
<head>
<title>COŚ CZEGO NIE WIEMY</title>
<meta charset="utf-8" lang="pl"/>
</head>
<body>
<?php
$connect = mysqli_connect("localhost","root","");
if($connect)
{
	$baza= mysqli_select_db($connect,"korporacja");
	if($baza)
	{
		$wynik = mysqli_query($connect," SELECT * FROM pracownicy");
		if($wynik)
		{
			$ile= mysqli_num_rows($wynik);
			if($ile>0)
			{
				for($i=1;$i<=$ile;$i++)
				{
					$record = mysqli_fetch_assoc($wynik);
					$id = $record["id_pracownika"];
					$imie = $record["imie"];
					$nazwisko = $record["nazwisko"];
					print $id.". ".$imie." ".$nazwisko."<br />";
				}
			}else echo "zjebałes idioto nie ma rekordów";
		}else echo "błąd zjebałes";
		echo "<br /><br />";
		$wynik = mysqli_query($connect,"select * from pracownicy");
		if($wynik)
		{
			$test = 0;
			while($record = mysqli_fetch_assoc($wynik))
			{
				$imie = $record["imie"];
				$nazwisko= $record["nazwisko"];
				print $imie." ".$nazwisko."<br />";
				$test= 1;
			}
			if($test == 0) echo "zapytanie nie zwróciło ci życia brak respawnów";
		}else echo "Błąd TWOJEGO ZJEBANIA UMYSŁOWEGO";
	}else echo "Nie połączono z bazą danych";
	mysqli_close($connect);
}else echo "<h3>Brak połączenia z danymi you die </h3>";
?>
</body>
</html>