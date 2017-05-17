<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
<title>Czechyra</title>
<?php
if(isset($_COOKIE["ciastko"]))
{
	$ciastko=$_COOKIE["ciastko"];
}
else
{
	$ciastko="czechyra06";
}
setcookie("ciastko",$ciastko,time()+60*10000);
?>

</head>
<body>
<?php
echo ($ciastko);
?>
</body>
</html>