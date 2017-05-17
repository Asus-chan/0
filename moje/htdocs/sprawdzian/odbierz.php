<?php
  $dane1 = $_POST[dane1];
  $dane2 = $_POST[dane2];

  $file = fopen("dane.txt", "w");
  fputs($file, "$dane1\r\n$dane2");
?>
