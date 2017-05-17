<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
</head>
<body>
  <?php
    echo<<<KONIEC
    <form action="index.php" method="post">
    <input type="text" name="email" value=""/>
    <input type="submit" name="" value="wyślij"/>
    </form>
KONIEC;
    if (isset($_REQUEST["email"]))
    {
      $wzorzec = "/^([a-z]|[0-9])+@([a-z]|[0-9]){2,63}\.[a-z]{2,10}$/";
      $email = $_REQUEST["email"];
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Poprawny adres maila";
      }
      else {
        echo "Niepoprawny adres maila";
      }
    }
  ?>
</body>
</html>
