<?php session_start();?>
<html>
<head>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
if(isset($_SESSION["liczba"])) echo $_SESSION["liczba"];
else $_SESSION["liczba"] =0;
?>
<br />
<a href="liczby.php">Zwiększ liczbę</a>


</body>


</html>