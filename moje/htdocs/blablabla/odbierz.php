<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
  $login = $_REQUEST["login"];
  $haslo = $_REQUEST["haslo"];
  $haslo = str_replace('\\', '', $haslo);
  print $haslo."<br />";
  $baza = mysqli_connect('localhost', 'root', '', 'korporacja');

  if ($baza) {

    $wynik = $baza -> query("SELECT * FROM pracownicy WHERE imie='$login'  AND nazwisko='$haslo'");
    mysqli_close($baza);
  }
  else {
    echo "<h3>Brak połączenia</h3>";
  }
  if ($wynik) {
    $n = mysqli_num_rows($wynik);
    if ($n > 0) {
      for ($i=0; $i < $n; $i++) {
        $wiersz = mysqli_fetch_assoc($wynik);
        $nr = $i + 1;
        print $nr.". ".$wiersz['imie']." ".$wiersz['nazwisko']."<br />";
      }
    } else {
      echo "<p>Brak użytkownikow</p>";
    }

  } else {
    echo "<h4>BłĄD ZAPYTANIA</h4>";
  }
  echo "<a href=\"index.php\">Powrot do poprzedniej strony</a>";

?>
</body>
</html>
