<?php

include('lib.php');
include('prop.php');

system('clear');
sleep(2);

echo$hijau2."🔸 Mencoba lakukan pengecekan\n"; sleep(1);
echo$hijau2."🔸 Mencoba inject data dari file cfg.php! \n\n";

sleep(3);
system('clear');

$n = 0;
$belance = 0;

echo$hijau2."🔸 System dijalankan \n";
sleep(1);

while(true){
	// menentukan jumlah perulangan
system('clear');
	$n = $n + 1;
	$rCount = count($reff);
	echo "\n🔸From ../modul_002";
	echo "\n🔸Balance : ".$belance;
	echo "\n🔸Loop    : {$n} X";
	echo "\n🔸Referer : {$rCount}\n\n";

	//#######[  Sesi Reff  ]##########
/**
	for($t = 10; $t > -1; $t--){
			echo $merah2." \r";
			if ($t > 0) {
			echo "[{$t}] {$ungu2}wait ";
			sleep(1); 
			}
			else{
			  echo "{$ungu2}[🚀] Gooo"; 
			}
		} // end for

		**/
	for($i = 0; $i < count($reff); $i++){
	  if($user_x != "" && $reff[$i]['key'] != ""){
	    // membuat header
	    $h[$i] = createHeader($user_x, $cookie, $urlReff[$i]);
	    // exekusi
	  $res[$i] = getCoin($urlReff[$i],$h[$i]);
	    if($res[$i] != NULL) {
	      $mess[$i] = getMessage($res[$i]);
        $xreff[$i] = getReff($res[$i]);
        $belance = $belance + $xreff[$i];
	
		echo "\n{$putih2}[{$i}] Take Reff {$hijau2}{$xreff[$i]}{$putih2} 🐶toshi\n";
/**
		for($j = 3; $j > -1; $j--){
			echo $merah2." \r";
			if($j > 0){
			  echo "[{$j}] {$ungu2}wait ";
			sleep(1);
			} else {
			  echo "[🔻] {$kuning1}Done";
			}
		} // end for
**/
	} // end if
    else {
      echo "\n {$merah2}☢️ Situs tidak dapat dijangkau\n";
    } // end else
	  } // end if
      else {
        echo "\n{$merah2}☢️Periksa user_agent, cookie dan url ada yang kosong !!\n";
      } // end else
	} // enf else if
} // end while
?>
