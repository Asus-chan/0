<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
<title>We need Rein!!!</title>
</head>
<body>
<?php
echo <<<END
<form action="strona.php" method="post">
Login:&nbsp<input type="text" name="login_form" value="" /><br /><br />
Hasło:&nbsp<input type="password" name="password" value="" /><br /><br />
<input type="checkbox" name="memory" value="tak" />&nbsp&nbspZapamiętaj mnie<br /><br />
<input type="submit" value="Wyślij" />
</form>

END;
?>
<p>Czytanie ciasteczka</p>
</body>
</html>