<!DOCTYPE html>
<html lang="pl">
<head>
<title>Show</title>
<meta charset="utf-8" />
</head>
<body>
<?php
$login= $_REQUEST["login"];

$imie= "";
if(isset($_POST["imie"]))$imie = $_POST["imie"];

$nazwisko= "";

if(isset($_POST["nazwisko"]))$nazwisko = $_POST["nazwisko"];

$nip= "";

if(isset($_POST["nip"]))$nip = $_POST["nip"];

$regon= "";

if(isset($_POST["regon"]))$regon = $_POST["regon"];

$nazwa= "";

if(isset($_POST["nazwa"]))$nazwa = $_POST["nazwa"];

$krs= "";

if(isset($_POST["krs"]))$krs = $_POST["krs"];
echo "Login ".($login)."<br /><br />";

	echo "Imie: ".($imie)."<br />";
	echo "Nazwisko: ".($nazwisko)."<br /><br />";
		
	echo "NIP: ".($nip)."<br />";
	echo "Regon ".($regon)."<br /><br />";
	
	echo "Nazwa: ".($nazwa)."<br />";
	echo "KRS: ".($krs)."<br /><br />";
	
	
		
		
	
		





?>
</body>
</html>