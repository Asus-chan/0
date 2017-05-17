<!DOCTYPE html>
<html lang="pl">
<head>
<title>formularz</title>
<meta charset="utf-8" />
</head>
<body>
<?php
echo <<<KONIEC
<form action="show.php" method="post" />
login:&nbsp;<input type="text" name="login" value="" /><br /><br />
hasło:&nbsp;<input type="password" name="haslo" value="" /><br /><br />
Typ osoby:&nbsp;<select name="radio" />
<option>asdf</option>
<option>qwer</option>
<option>zxcv</option>
<input type="submit" value="Wyslij" />
<form>
KONIEC;
?>
</body>
</html>