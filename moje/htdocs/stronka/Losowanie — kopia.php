<?php
if(isset($_REQUEST["hidden"]))$ukryty=$_REQUEST["hidden"];
else $ukryty = "nielosuj";

if($ukryty =="nielosuj")
{
echo "<br />Wybierz ucznia do odpowiedzi:<br /><br />";
echo <<<KONIEC
<form action="index.php?strona=losowanie" method="post">
<select name="klasa"><br /><br />
	<option>2TI</option>
	<option>3TI</option>
	<option>4TI</option>
</select>
<select name="grupa"><br /><br />
	<option>Grupa_1</option>
	<option>Grupa_2</option>
</select><br /><br />
<input type="text" name="numerek" value="" placeholder="Szczęśliwy numerek"/><br /><br />
<input type="radio" name="random" value="rand" checked="checked"/>Użyj Funkcji rand<br /><br />
<input type="radio" name="random" value="rand"/>Użyj Funkcji mt_rand()<br /><br />
<input type="hidden" name="hidden" value="losuj" />
<input type="submit" value="Losuj"/>
</form>
KONIEC;
}
else if($ukryty=="losuj")
{
$numerek=$_REQUEST["numerek"];
$klasa=$_REQUEST["klasa"];
$grupa=$_REQUEST["grupa"];
$uczen = wylosujUcznia();
//wylosujUcznia();	
echo "<br />Wybierz ucznia do odpowiedzixxxx:<br /><br />";
echo <<<KONIEC
<form action="index.php?strona=losowanie" method="post">
<select name="klasa"><br /><br />
	<option>2TI</option>
	<option>3TI</option>
	<option>4TI</option>
</select>
<select name="grupa"><br /><br />
	<option>Grupa_1</option>
	<option>Grupa_2</option>
</select><br /><br />
<input type="text" name="numerek" value="" placeholder="Szczęśliwy numerek"/><br /><br />
<input type="radio" name="random" value="rand" checked="checked"/>Użyj Funkcji rand<br /><br />
<input type="radio" name="random" value="rand"/>Użyj Funkcji mt_rand()<br /><br />
<input type="hidden" name="hidden" value="losuj" />
<input type="submit" value="Losuj"/>
</form>
KONIEC;
echo ($uczen);
}
else
{
echo "Wystąpił nieokreślony błąd";	
}
function wylosujUcznia()
{
return 13;
}
?>