<!DOCTYPE html>
 <html lang="pl">
 <head>
 <meta charset="utf-8" />
 </head>
 <body>
 <?php

$myFile = fopen("dane.txt", "r");
while(!feof($myFile))
{
	$myLine = fgets($myFile, 255);
	echo($myLine);
	echo "<br />" ;
}
fclose($myFile);
$myFile = file("dane.txt");
$myFile = implode($myFile, '*');
echo($myFile);
$myFile = explode("*", $myFile);
echo "<br />";
echo($myFile[3]); 

$myFile = fopen("dane.txt", "a");
fputs($myFile, "Nowe dane do pliku\r\n");
fclose($myFile);
 

 ?>

 </body>
 </html> 