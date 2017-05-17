<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
<title></title>
<?php
if(isset($_COOKIE["ciastko05"]))
{
	$ciastko05=$_COOKIE["ciastko05"];
}
else
{
	$ciastko05="bujnowski";
}
setcookie("ciasto05",$ciastko05,time()+60*50000;
?>

</head>
<body>
<?php
echo ($ciastko05);
?>
</body>
</html>