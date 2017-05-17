<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
<title></title>
<?php
if(isset($_COOKIE["spr"]))
{
	$ciastko=$_COOKIE["spr"];
}
else
{
	$ciastko="nr14";
}
setcookie("spr",$ciastko,time()+60*5000);
?>
</head>
<body>
<?php
echo ($ciastko);
?>
</body>
</html>