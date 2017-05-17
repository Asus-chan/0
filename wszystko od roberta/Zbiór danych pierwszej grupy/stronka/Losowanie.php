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
$typ_rand =$_REQUEST["random"];

$uczen = wylosujUcznia($klasa, $grupa, $numerek, $typ_rand);
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
<input type="submit" value="Losuj"/><br /><br />
</form>
KONIEC;
echo ($uczen);
}
else
{
echo "Wystąpił nieokreślony błąd";	
}
function wylosujUcznia($class, $group, $number, $type)
{
	if($class=="3TI" && $group=="Grupa_1")
	{
		do
		{
			if($type=="rand")$wylosowany=rand(1,15);
		else $wylosowany=mt_rand(1,15);	
		}while($wylosowany==$number);
	}
	if($class=="3TI" && $group=="Grupa_2")
	{
		do
		{
			if($type=="rand")$wylosowany=rand(1,15);
		else $wylosowany=mt_rand(1,15);	
		$wylosowany=rand(16,29);
		}while($wylosowany==$number);
		
	}
	if($class=="2TI" && $group=="Grupa_1")
	{
		$g1_2ti= Array(3,4,6,7,11,15,16,18,19,20,22,24,25,28,29,32,33);
		do
		{
		$i=rand(0,count($g1_2ti)-1);
		$wylosowany= $g1_2ti[$i];
		}while($wylosowany==$number);
	}
	if($class=="2TI" && $group=="Grupa_2")
	{
		$g2_2ti= Array(0,1,5,8,9,10,12,13,14,17,21,23,26,27,30,34,35);
		do
		{
		$i=rand(0,count($g2_2ti)-1);
		$wylosowany= $g2_2ti[$i];
		}while($wylosowany==$number);
		
	}
	return $wylosowany;
}
?>