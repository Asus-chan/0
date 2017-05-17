<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
<title>STRONA DLA MNIE</title>
<link rel="stylesheet" href="styl.css" />
<script src="indeks.js"></script>
</head>
<body>
<div id="kontener">
	<header id="naglowek">
	<div id="head1"><h5>STRONA WIELKIEGO INKWIZYTORA</h5>
	Przydatne walidatory:&nbsp;<a href="http://html5.validator.nu">http://htm15.validator.nu</a>
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://validator.w3.org">http://validator.w3.org</a>
	</div>
	</header>
	<nav id="nawigacja">
	<a href="index.php?strona=zaczynamy">Strona Główna</a><br /><br />
	<a href="index.php?strona=strona1">Strona Nr 2</a>
	</nav>
	<section id="glowny">
	<?php
	if(isset($_GET["strona"]))
	{
	$strona = $_GET["strona"];
	}
	else
	{
	$strona = "zaczynamy";	
	}
	if(file_exists("$strona.php"))
	{
	include("$strona.php");	
	}
	else
	{
		echo "JEBŁO JEBŁO PO CO DRĄŻYĆ TEMAT";
	}
	//if($strona =="zaczynamy")include("zaczynamy.php");
	//if($strona =="strona1")include("strona1.php");
	?>
	</section>
	<aside id="boczny"></aside>
	<footer id="stopka">To jest stopka strony</footer>
</div>



</body>
</html>