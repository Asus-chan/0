<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<p>Pętle w PHP</p>
		<?php
			for($i=0;$i<1000000;$i++) $tablica[] = rand();
			$n=30;
			$start = time();
			for($j=0;$j<$n;$j++){for($i=0;$i<count($tablica);$i++){}} 
			echo "Czas z count" .(time()-$start)."<br />";
		?>
	</body>
</html>