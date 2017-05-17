<!DOCTYPE html>
<html>
<head>
<title>Styl obiektowy</title>
<meta charset="utf-8" lang="pl"/>
</head>
<body>
<?php
$data_base = new mysqli("localhost","root","","korporacja");
if($data_base -> connect_errno)
{
	echo "Błąd połaczenia z serwerem bazodanowym".$data_base -> connect_error;
}
else
{
	echo "Połączenie Zostało nawiązane<br />";
	$wynik = $data_base -> query("SELECT * FROM pracownicy");
	$ile = $wynik -> num_rows;
	if($ile > 0)
	{
		for($i=1;$i<=$ile;$i++)
		{
			$record= $wynik -> fetch_assoc();
			$id = $record["id_pracownika"];
			$imie = $record["imie"];
			$nazwisko = $record["nazwisko"];
			print $id.". ".$imie." ".$nazwisko."<br />";
		}
	}
	else echo "Zapytanie nie wzróciło żadnego rekordu czyli kaplica";
	#$data_base -> select_db("nazwa_bazy");
	$data_base -> close();
}
?>
</body>
</html>