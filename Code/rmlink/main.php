<?php
system('clear');
include('link.php');

$ar = array();

$string = preg_replace('/\s+/', '', $link);
$cut = explode(';', $string);

for($i = 0; $i < count($cut); $i++){
$a = explode('address=', $cut[$i])[1];

$ar[$i] = explode('&currency=DOGE&key=', $a);
}

// output
$start = 7;
echo "\n\n\n";
for($i = 0; $i < count($ar); $i++){
  $no = $start + $i;
echo "{$no} => [";
echo "'key' =>".'"'.$ar[$i][1].'",';
echo "'w' =>".'"'.$ar[$i][0].'"';
echo "],";
}

// print_r($ar);

echo "\n";
?>