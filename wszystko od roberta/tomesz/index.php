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
imie:&nbsp;<input type="text" name="imie" value="" /><br /><br />

  <p>
    Które kolory lubisz?
  </p>

  <p>
    <label>
      <input type="checkbox" name="kolor" value="red"> Czerwony
    </label>
  </p>

  <p>
    <label>
      <input type="checkbox" name="kolor" value="green"> Zielony
    </label>
  </p>

  <p>
    <label>
      <input type="checkbox" name="kolor" value="blue"> Niebieski
    </label>
  </p>

  <p>
    <label>
      <input type="checkbox" name="kolor" value="black"> Czarny
    </label>
  </p>

  <p>
    <label>
      <input type="checkbox" name="kolor" value="white"> Biały
    </label>
  </p>

  <p>
    <button type="submit">zatwierdź</button>
  </p>
</form>

KONIEC;



 


?>
</body>
</html>