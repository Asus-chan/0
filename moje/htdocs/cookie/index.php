<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8" />
</head>
<body>
  <?php
    if (isset($_COOKIE["nr"])) {
      echo $_COOKIE["nr"];
    } else {
      setcookie("nr", "21", time()+5*60+1);

    }

  ?>
</body>
</html>
