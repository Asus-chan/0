<html>
<head>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
$tablica= Array(13,8,5,22,1,70,3,17);
$dlugosc = count($tablica);
$minimum =$tablica[0];
$index = 0;
for($i=0; $i<$dlugosc;$i++)
{
if($tablica[$i] < $minimum)
{
	$minimum = $tablica[$i];
	$index = $i;
	
}
}
$m = $index + 1;
echo "Najmniejsza znaleziony element tablicy to liczba = ".$minimum."<br />";

echo "Jest to ".$m."element tablicy";
?>



</body>


</html>