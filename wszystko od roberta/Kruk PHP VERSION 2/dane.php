<html>
<head>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
$liczba= $_REQUEST["liczba"];
$tablica = Array(3,6,10,2,17);

if($liczba==3)
{	
echo "Liczba należy do tablicy";
}
else
{
	if($liczba==6)
	{
	echo "Liczba należy do tablicy";	
		
	}
	else
	{
		if($liczba==10)
		{
			echo "Liczba należy do tablicy";	
		}
		else
		{
		 if($liczba==2)
		 {
			 echo "Liczba należy do tablicy";
		 }
		 else
		 {
			 if($liczba==17)
			 {
				 echo "Liczba należy do tablicy";	
			 }
			 else
			 {
				 echo "liczba nie należy do tablicy";
			 }
		 }
		}
	}
}


?>

</body>


</html>