<?php session_start();?>
<!DOCTYPE html>
<html lang="pl">
<head>
<title></title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />
<script src="jquery-3.1.1.js"></script>
<script src ="pliki.js"></script>
</head>
<body onload="$(document).ready(function(){wczytajZdjecie()});">
<div id="kontener">
<header id="naglowek">
<div id="head1"><h5>Projekt 1A</h5>
Przydatne walidatory:<br /><a href="http://html5.validator.nu">http://html5.validator.nu<br /></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://validator.w3.org">http://validator.w3.org</a>
</div>
<div id="head2"></div>
<div style="clear: both;"></div>
</header>
<nav id="menu">
<a href="index.php?strona=logowanie">Zaloguj się</a><br /><br />
<a href="index.php?strona=start">Strona główna</a><br /><br />
<a href="index.php?strona=Losowanie">Losowanie</a><br /><br />
<a href="index.php?strona=gra">Gry</a>
</nav>
<section id="main">
<?php
if(isset($_REQUEST["strona"]))$strona = $_REQUEST["strona"];
else $strona = "start";
if(file_exists("$strona.php"))
{
include("$strona.php");
}
else
{
echo "Nieokreślony błąd strona niedostępna";
}

?>
</section>
<aside id="boczny"></aside>
<footer id="stopka"></footer>
</div>
</body>
</html>