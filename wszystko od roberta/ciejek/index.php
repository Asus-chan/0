<!DOCTYPE html>
<?php
if(isset($_COOKIE["spr"]))

{
	
	$ciastko=$_COOKIE["spr"];
	
}
else
{
	
	$ciastko="nr16";

}

setcookie("spr",$ciastko,time()+200000000000);

?>

<html>
<head>
<meta charset="utf-8" lang="pl">
<title>Sprawdzian</title>
</head>
<body>
<?php
echo ($ciastko);
?>
</body>
</html>
