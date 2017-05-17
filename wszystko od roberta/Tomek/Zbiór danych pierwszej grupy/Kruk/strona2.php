<!DOCTYPE html>
<html>
<head>
<title>Strona pierwsza</title>
<meta charset="utf-8" lang="pl">
<style type="text/css">
#strona{width: 800px;}
#menu {float: left; width: 150px;}
#tresc {float: left; width: 650px; text-align: center;}
</style>
</head>
<body>
<div id="strona">
	<div id="naglowek"><a href="index.html"><img src="logo.jpg"></a></div> 
	<div id="menu">
	<a href ="strona1.html">Kalkulator</a><br /><br />
	<a href ="localhost/strona2.php">STRONA2</a>
	</div>
	<div id="tresc">
<?php
if(isset($_GET["potegowanie"]))$potegowanie = $_GET["potegowanie"];
else
$potegowanie = "nie";
if($potegowanie == "tak")
{
echo	"<form action=\"strona2.php\" method=\"get\">";
echo	"Podaj podstawę potęgi:&nbsp;<input type=\"text\" name=\"podstawa\" value=\"\"><br /><br />";
echo    "Podaj wykładnik potęgi:&nbsp;<input type=\"text\" name=\"wykladnik\" value=\"\" /><br /><br />";
echo 	"<input type=\"hidden\" name=\"potegowanie\" value=\"tak\">";
echo 	"<input type=\"submit\" value=\"Sprawdź\">";
echo	"</form><br />";
$podstawa = $_GET["podstawa"];
$wykladnik = $_GET["wykladnik"];
$y = pow($podstawa, $wykladnik);
echo "Wynik potęgowania wynosi : ".$y;
}
else
{
echo	"<form action=\"strona2.php\" method=\"get\">";
echo	"Podaj podstawę potęgi:&nbsp;<input type=\"text\" name=\"podstawa\" value=\"\"><br /><br />";
echo    "Podaj wykładnik potęgi:&nbsp;<input type=\"text\" name=\"wykladnik\" value=\"\" /><br /><br />";
echo 	"<input type=\"hidden\" name=\"potegowanie\" value=\"tak\">";
echo 	"<input type=\"submit\" value=\"Sprawdź\">";
echo	"</form>";
}
?>
	</div>
	<div style="clear: boot;"></div>
</div>
<script>






</script>

</body>




</html>