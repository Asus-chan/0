<?php
$dane1 = $_POST[dane1];
$dane2 = $_POST[dane2];
/*
$myFile = fopen("dane.txt", "r");
while (!feof($myFile)) {
  $myLine = fgets($myFile, 255);
  echo ($myLine);
  echo "<br />";
}
*/
//tworzy i zapisuje
$file = fopen("dane.txt", "a");
fputs($file, "$dane1\r\n$dane2\r\n");
$file = implode($file, "");
echo ($file);
fclose($file);

?>
