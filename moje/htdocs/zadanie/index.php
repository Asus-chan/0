<!DOCTYPE html> 
<html lang="pl">
<head>
	<meta charset="utf-8" />
</head>
<body>



<?php

$login= $_REQUEST["login"];
$email= $_REQUEST["email"];
if($login != null and $email !=null ){

echo "Login: ".$login."<br />";
echo "Email: ".$email."<br />";
}
else if($login != null or $email !=null ){echo "Zostały wprowadzone nieprawdidłowe dane lub jedno z pól jest puste";}

;

echo <<< END
<form method="POST" action="index.php">
Login: <input type="text" name="login" value=""/> <br />
Email: <input type="email" name="email" value=""/><br />
<input type="submit"/>
</form>


END;

?>


</body>
</html>