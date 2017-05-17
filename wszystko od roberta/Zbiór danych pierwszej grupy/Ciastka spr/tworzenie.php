<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang="pl">
<title></title>
<?php
if(isset($_COOKIE["COOKIE"]))
{
	$COOKIE=$_COOKIE["COOKIE"];
}
else
{
	$COOKIE="01";
}
setcookie("COOKIE",$COOKIE,time()+60*4000 ;
?>

</head>
<body>
<?php
echo ($COOKIE);
?>
</body>
</html>