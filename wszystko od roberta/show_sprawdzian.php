<!DOCTYPE html>
<html lang="pl">
<head>
<title>Show</title>
<meta charset="utf-8" />
</head>
<body>
<?php
$login= $_REQUEST["login"];
$haslo= $_REQUEST["haslo"];
$radio= $_REQUEST["radio"];

echo "Oto wprowadzone dane: <br />";
echo "Login: ".($login)."<br />";
echo "Haslo niezakodowane: ".($haslo)."<br />";
$haslo=md5($haslo);
echo "Haslo zakodowane: ".($haslo)."<br />";
echo "Typ osoby: ".($radio)."<br />";
?>
</body>
</html>