<!DOCTYPE html>
<html>
<head>
<title>SQL injector</title>
<meta charset="utf-8" lang="pl">
</head>
<body>
<?php
echo<<<KONIEC
<form action="odbierz.php" method="post">
Login:&nbsp<input type="text" name="login" value="" /><br /><br />
Hasło:&nbsp<input type="text" name="haslo" value="" /><br /><br />
<input type="submit" value="Wyślij" />
</form>
KONIEC
?>

</body>
</html>