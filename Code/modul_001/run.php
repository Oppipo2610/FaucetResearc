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
	$n = $n + 1;
	system('clear');
	//#######[  Sesi Master  ]##########
	$hx = createHeader($user, $cookie, $webtarget);
	$resx = getCoinMaster($webtarget, $hx);
	
	if($resx != NULL) {
		$messx = getMessage($resx);
		$belance = $belance + $messx;
		echo$biru."\n[".$n."]👑 Claim : {$kuning1}{$messx}{$hijau2} 🐶toshi{$ungu2}. Belance :{$kuning1}{$belance}{$ungu2} 🐶toshi{$merah2}\n";

		for($i = 31; $i > -1; $i--){
			echo $merah2." \r";
			echo "[{$i}] {$ungu2}wait ";
			sleep(1);
		} // end for
	} else {
		echo "Situs tidak dapat dijangkau\n";
	} // en else if
	
	//#######[  Sesi Reff ]##########
	for($i = 0; $i < count($reff); $i++){
	  if($user_x != "" && $reff[$i]['key'] != ""){
	    // membuat header
	    $h[$i] = createHeader($user_x, $cookie, $urlReff[$i]);
	    
	   // print_r($h[$i]);
	    
	  $res[$i] = getCoin($urlReff[$i], $h[$i]);

	    //print_r($res[$i]);
	    // pengecekan hasil 
	    if($res[$i] != NULL) {
	      $mess[$i] = getMessage($res[$i]);
        $xreff[$i] = getReff($res[$i]);
        $belance = $belance + $xreff[$i];
	
		echo "\n{$putih2}[{$i}] Take Reff {$hijau2}{$xreff[$i]}{$putih2} 🐶toshi\n";

		for($j = 5; $j > -1; $j--){
			echo $merah2." \r";
			if($j > 0){
			  echo "[{$j}] {$ungu2}wait ";
			sleep(1);
			} else {
			  echo "[🔻] {$kuning1}Done";
			}
		} // end for

	} // end if
    else {
      echo "\n🚧 🚧 🚧 🚧";
      echo "\n {$merah2}Situs tidak dapat dijangkau\n";
      sleep(6);
    } // end else
	  } // end if
      else {
        echo "\nPeriksa user_agent, cookie dan url ada yang kosong !!\n";
      } // end else
	} // end for
	
} // end while
?>
