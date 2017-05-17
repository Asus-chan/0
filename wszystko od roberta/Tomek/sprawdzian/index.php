<!DOCTYPE html>
<html lang="pl">
<head>
<title>Skrypt1</title>
<meta charset="utf-8" />
</head>
<body>
<?php
echo <<<KONIEC
<form action="show.php" method="post" />
imie:&nbsp;<input type="text" name="imie"  /><br /><br />


  <p>
    Kolory:
  </p>

	<p>
		<input type="checkbox" name="kolor" value="Czerwony"> Czerwony
	</p>

  
    <p>
		<input type="checkbox" name="kolor" value="Zielony"> Zielony
    </p>
  
	<p>
      <input type="checkbox" name="kolor" value="Niebieski"> Niebieski
	</p>

	<p>
		<input type="checkbox" name="kolor" value="Czarny"> Czarny
    </p>
	
	<p>
		<input type="checkbox" name="kolor" value="Biały"> Biały
	</p>
	
	<p>
		<button type="submit">Wyślij</button>
	</p>
</form>

KONIEC;

?>
</body>
</html>