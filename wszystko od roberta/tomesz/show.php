<!DOCTYPE html>
<html lang="pl">
<head>
<title>Skrypt2</title>
<meta charset="utf-8" />
</head>
<body>
<?php
$imie= $_REQUEST["imie"];
$kolor= $_REQUEST["kolor"];
$ile_kolor= count($kolor);
for($x=0;$x <= $ile_kolor-1; $x++)
{
$kolory=$kolor[$x].',';
}
echo "Dane: <br />";
echo "Imie: ".($imie)."<br />";
echo "Kolory: ".($kolory)."<br />";
?>
</body>
</html>