<html>
<head>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
$tablica = Array();
$dlugosc = 20;

$i=0;
while($i<$dlugosc)
{
	$tablica[$i] = rand(100,999);
	$i++;
}
$i=0;
while($i<$dlugosc)
{
	echo $tablica[$i]."<br />";
	$i++;
}
?>



</body>


</html>