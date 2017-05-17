<!DOCTYPE html>
<html lang="pl">
<head>
<title>Formularz w PHP</title>
<meta charset="UTF-8"/>

</head>

<body>
<h1> Formularz </h1>
<a href="index.php">Strona główna</a><br />
<?php
$zdarzenie ="";
if(isset($_POST["zdarzenie"]))$zdarzenie = $_POST["zdarzenie"];
if($zdarzenie == "odczyt")
{
	
	echo "Witaj: ".$_POST["imie"]."<br />";
	echo "Twoje miasto: ".$_POST["miasto"]." i ulica: ".$_POST["ulica"]."<br />";
	echo "<h3>Twoje ulubione kolory to: </h3>";
	for ($i=0;$i<count($_POST["kolory"]);$i++)
	{
		echo $_POST["kolory"][$i].", ";
		
	}
	echo "<h3>Twoje ulubione zupy to: </h3>";
	for ($i=0;$i<count($_POST["zupa"]);$i++)
	{
		echo $_POST["zupa"][$i].", ";
		
	}
	echo "<br />Twój status zawodowy:<br />".$_POST["status"];
	echo "<form action=\"formularz.php\" method=\"post\">";
	echo "<input type=\"hidden\" name=\"zdarzenie\" value=\"formularz\" />" ;
	echo "<input type=\"submit\" value=\"Wróć do formularza\" />";
	echo "</form>";
}
else
{
echo <<<END
<form action="formularz.php" method="post"><br />
Podaj swoje imię: <input type="text" name="imie" value="" />
<br />
Wybierz miasto:
<select name="miasto">
<option>Warszawa</option>
<option>Łódź</option>
<option>Poznań</option>
<option>Wrocław</option>
<option>Kraków</option>
</select>
Wybierz ulicę:
<select name="ulica">
<option>Drzewna</option>
<option>Stalowa</option>
<option>Kwiatowa</option>
<option>Żelazna</option>
<option>Duczkowska</option>
</select>
<br /><br />
Jakie są twoje ulubione kolory?
<select name="kolory[]" multiple>
<option value="czerwony">Czerwony</option>
<option value="zielony">Zielony</option>
<option value="niebieski">Niebieski</option>
<option value="żółty">Żółty</option>
<option value="pomarańczowy">Pomarańczowy</option>
<option value="fioletowy">Fioletowy</option>
<option value="biały">Biały</option>
</select>
<br /> <br />
Zaznacz zupy, które lubisz:
<br /><input type="checkbox" name="zupa[]" value="pomidorowa" /> Pomidorowa
<br /><input type="checkbox" name="zupa[]" value="szczawiowa" /> Szczawiowa
<br /><input type="checkbox" name="zupa[]" value="rosół" /> Rosół 
<br /><input type="checkbox" name="zupa[]" value="ogórkowa" /> Ogórkowa
<br /><input type="checkbox" name="zupa[]" value="grzybowa" /> Grzybowa
<br /><input type="checkbox" name="zupa[]" value="krupnik" /> Krupnik <br />
<br />
Dokonaj wyboru swojego statusu:
<br /><input type="radio" name="status" value="uczen" /> Uczę się
<br /><input type="radio" name="status" value="pracuję" /> Pracuję
<br /><input type="radio" name="status" value="studiuję" /> Jestem studentem
<br /><input type="radio" name="status" value="emeryt" /> Jestem na emeryturze<br />
<input type="hidden" name="zdarzenie" value="odczyt" /><br />
<input type="submit" value="Wyślij" /><br />
</form>
END;
	
}
?>

</body>
</html>



=======================================


<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8"/>
	<title>Odbiór</title>
</head>
<body>
<?php
$imie= $_REQUEST["imie"];
$nazwisko=$_REQUEST["nazwisko"] ;
$adres=$_REQUEST["adres"];
$email=$_REQUEST["email"]; 
echo "<h3>Witamy w rejestracji nowych użytkowników !</h3>"."<br />"."Twoje imię i nazwisko to: ".$imie."&nbsp;".$nazwisko."<br />";
echo "Mieszkasz w :".$adres." a Twój mail to: ".$email;
?>
</body>
</html>
