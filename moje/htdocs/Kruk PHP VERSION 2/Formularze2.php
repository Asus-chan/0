<html>
<head>
<meta charset="utf-8" lang="pl">

</head>
<body>
<?php
$zdarzenie ="";
if(isset($_POST["zdarzenie"]))$zdarzenie = $_POST["zdarzenie"];
if($zdarzenie == "odczyt")
{
	echo "Witaj: ".$_POST["imie"]."<br />";
	echo "Twoje miasto: ".$_POST["miasto"]."<br />";
	echo "A twoja ulica: ".$_POST["ulica"]."<br />";
	echo "<h4>TWOJE ULUBIONE KOLORY: </h4>";
for($i=0;$i<count($_POST["kolory"]);$i++)
{
	echo $_POST["kolory"][$i].", ";
}
	echo "<br />";
	echo "<h4>TWOJE ULUBIONE ZUPY: </h4>";
for($i=0;$i<count($_POST["zupa"]);$i++)
{
	echo $_POST["zupa"][$i].", ";
}
echo "<br /><h4>Twój status aktywności zawodowej: </h4>".$_POST["status"];

	echo "<form action=\"Formularze2.php\" method=\"post\">";
	echo "<input type=\"hidden\" name=\"zdarzenie\" value=\"formularz\">";
	echo "<input type=\"submit\" value=\"WRÓĆ DO FORMULARZA\">";
	echo "</form>";
}
else
{
echo <<<KONIEC
<form action="Formularze2.php" method="post">
Podaj imię:&nbsp:<input type="text" name="imie" value="" /><br /><br />
Wybierz swoje miasto:&nbsp
<select name="miasto">
	<option>MIASTO SMOGU</option>
	<option>Warszawa</option>
	<option>Ciamkowo "Sochaczew"</option>
	<option>Zakopane</option>
	<option>Gdańsk</option>
	</select>&nbsp&nbsp&nbsp
	Wybierz swoją ulice:&nbsp 
<select name="ulica">
	<option>Zielona</option>
	<option>Długa</option>
	<option>Krótka</option>
	<option>Polska</option>
	<option>Niemiecka</option>
	</select><br />
Podaj swoje ulubione kolory:
<select name="kolory[]" multiple>
	<option value="czerwony">czerwony</option>
	<option value="niebieski">niebieski</option>
	<option value="czarny">czarny</option>
	<option value="zielony">zielonu</option>
	<option value="żółty">żółty</option>
</select><br /><br />
Jakie są twoje ulubione zupy?
<br /><input type="checkbox" name="zupa[]" value="Szczawiowa"/>Szczawiowa 
<br /><input type="checkbox" name="zupa[]" value="Pomidorowa"/>Pomidorowa 
<br /><input type="checkbox" name="zupa[]" value="Rosół"/>Rosół
<br /><input type="checkbox" name="zupa[]" value="Grzybowa"/>Grzybowa 
<br /><input type="checkbox" name="zupa[]" value="Krupnik" checked="checked"/>Krupnik z %<br /> 
<br /><br />
Wybierz swój status:
<br />
	<input type="radio" name="status" value="Uczeń" checked="checked" />Uczę się
	<input type="radio" name="status" value="Aktywny zawodowo" />Pracuję
	<input type="radio" name="status" value="Bezrobotny" />Nie mam pracy
	<input type="radio" name="status" value="Emeryt" />Jestem na emeryturze<br/>
	

<input type="hidden" name="zdarzenie" value="odczyt" />
<input type="submit" value="Wyślij" />
</form>
KONIEC;
}
?>



</body>

</html>