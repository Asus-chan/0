<html>
<head>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
$nty= 1000000;
$tablica = Array(0,1);

if($nty==1)
{
	echo "Pierwszy wyraz ciągu fibonacciego = ".$tablica[1];
}
else
{
	for($i=2;$i<=$nty;$i++)
	{
		$tablica[$i]=$tablica[$i-1] + $tablica[$i-2];
	}
	echo "Oto ".$nty." pierwszych elementów ciągłych fibonacciego<br />";
	for($i=1;$i<=$nty;$i++)
	{
		echo $tablica[$i]."<br />";
	}
	
}
?>



</body>


</html>