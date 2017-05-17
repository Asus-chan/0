<html>
<head>
<meta charset="utf-8" lang="pl" />
<body>
<p>Czasy działania pętli</p>
<?php
set_time_limit(1000000000);
$n = 6325;

for($i=0;$i<1000000;$i++)$tablica[] = rand();
$start = time();
for($j=0;$j<$n;$j++) {for($i=0;$i<count($tablica);$i++){}}
echo "Czas wykonania z count: ".(time()-$start)."<br />";

$start=time();
$m = count($tablica);
for($j=0;$j<$n;$j++) {for($i=0;$i<$m;$i++){}}
echo "Czas wykonania bez count: ".(time()-$start)."<br />";

$start=time();
$m = count($tablica);
for($j=0;$j<$n;$j++) {foreach($tablica as $element){}}
echo "Czas wykonania foreach: ".(time()-$start)."<br />";

?>
</body>




</html>