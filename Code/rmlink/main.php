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
$start = 12;
echo "\n\n\n";
for($i = 0; $i < count($ar); $i++){
  $no = $start + $i;
echo "{$no} => [\n";
echo "'key' =>".'"'.$ar[$i][1].'",';
echo "\n'w' =>".'"'.$ar[$i][0].'"';

echo "\n],\n";
}

// print_r($ar);

echo "\n";
?>