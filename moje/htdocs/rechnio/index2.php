<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
</head>
<body>
  <?php
  $connect = mysqli_connect("localhost", "root", "", "korporacja");

  if ($connect) {
    $baza = mysqli_select_db($connect, "korporacja");
    if ($baza) {
      $wynik = mysqli_query($connect, "SELECT * FROM pracownicy");
      if ($wynik) {
        $ile = mysqli_num_rows($wynik);
        if ($ile > 0){
          for ($i=0; $i <= $ile ; $i++) {
            $wiersz = mysqli_fetch_assoc($wynik);
            $imie = $wiersz["imie"];
            $nazwisko = $wiersz["nazwisko"];
            print $imie." ".$nazwisko."<br />";
          }
        } else {
          echo "Zapytanie nie zwraca rekordów";
        }
      }
      else {
        echo "Błąd zapytania";
      }

      $wynik = mysqli_query($connect, "SELECT * FROM pracownicy");
    if ($wynik) {
      $test = 0;
      while ($wiersz = mysqli_fetch_assoc($wynik) ) {
        $imie = $wiersz["imie"];
        $nazwisko = $wiersz["nazwisko"];
        print $imie." ".$nazwisko."<br />";
        $test = 1;

      }
      if ($test == 0) {
        echo "Zapytanie nie zwróciło rekordów";
      }
    }
    }
    else {
      echo "Brak połączenia z bazą";
    }
    mysqli_close($connect);
  }else
  {
    echo "Brak połączenia z zadanym hostem";
  }
  ?>
</body>
</html>
