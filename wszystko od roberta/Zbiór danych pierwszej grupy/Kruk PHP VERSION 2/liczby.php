<?php session_start();?>
<html>
<head>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
$temp = $_SESSION["liczba"];
$temp = $temp + 1;
$_SESSION["liczba"]= $temp;
echo "<a href=\"session.php\">Sprawdź liczbę</a>"
?>
<br />



</body>


</html>