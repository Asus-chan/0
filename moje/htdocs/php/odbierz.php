<?php
if(isset($_POST['dane1'])) $dane1 = $_POST['dane1'];
else $dane1 = "nowe dane";
if(isset($_POST['dane2'])) $dane2 = $_POST['dane2'];
else $dane2 = "drugie nowe dane";

$file = fopen("dane.txt", "w");
fputs($file, "$dane1\r\n$dane2\n");
fclose($file);
?>
