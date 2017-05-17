<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Rejestracja użytkownika</title>
	<meta charset="utf-8" />
</head>
<body>
<?php
echo <<<KONIEC
<form action="dodaj_usera.php" method="post" />
imię:&nbsp;<input type="text" name="imie" value="" /><br /><br />
nazwisko:&nbsp;<input type="text" name="nazwisko" value="" /><br /><br />
login:&nbsp;<input type="text" name="login" value="" /><br /><br />
hasło:&nbsp;<input type="password" name="haslo" value="" /><br /><br />
mail:&nbsp;<input type="email" name="mail" value= "" /><br /><br />
<input type="submit" value="Zarejestruj" />
</form>
KONIEC;

?>
</body>
</html>
