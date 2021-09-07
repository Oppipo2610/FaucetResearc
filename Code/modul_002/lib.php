<?php
// cd storage/downloads/code/uptocoin
// abuduchoy.github.io/FaucedPayCode
//user-agent
$user = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Mobile Safari/537.36";
$user_lite = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.114 Mobile Safari/537.36";
$user_kiwi = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.39 Mobile Safari/537.36";
$user_x = "Mozilla/5.0 (Linux; Android 10; Infinix X692) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.114 Mobile Safari/537.36";

//cookie
$cookie = "HstCfa4361570=1628652464174; HstCmu4361570=1628652464174; HstCnv4361570=1; HstCns4361570=1; c_ref_4361570=https%3A%2F%2Fwww.google.com%2F; __dtsu=6D0016284374359B319EBDFB636B2B47; _cc_id=98feee562799aef888c0e80e0f075c77; __gads=ID=6c9f72ad395585cb-22fca495c3ca00c2:T=1628652490:RT=1628652490:S=ALNI_MblnMycgNGpDI0Ne6TBJ5dLkF1ihA; HstCla4361570=1628652496733; HstPn4361570=2; HstPt4361570=2";

//timer-claim-dalam-satuan-detik
$tmr = "60";

// Master
$w = "TQWEaCKTVNzFSi7s29RamaiQou8VpgxNfF";
$key = "66c0b0a94cad9b6b4ce0923f31e745b2";

$webtarget = "http://uptocoin.tk/fp/faucet.php?address={$w}&currency=DOGE&key={$key}";

// array ...

$reff = [
      0 => [
'key'=> "0b3f7c475ea49a8890097ae164564ab4",
'w'=> "DEywZMmog3YDWjehXxRbW8PtCNhWu8Wgaa"
    ],
    1 => [
'key'=> "eaf9d70061dc9b7ddd3a5abf3a93fabc",
'w'=> "D7Ng7vQs4oTmB5SR3GZHkhptHRLjmVACFQ"
    ],
    2 => [
     'key'=> "25065961f8f7e918b5f16bf6e15a855d",
     'w'=> "DRSJsUTs8qKaX3CcbPhWRaErJR5ZWfsMAH"
    ],
    3 => [
     'key'=> "8d2bbf89a9a9e642b6a27cce7f5fea61",
     'w'=> "DCEKx4btFMaGxGAhvaNMgwiUZgUZNQ1waF"
    ],
    4 => [
     'key'=> "8df1da6c57ef6513dc3cbd911fef7be8",
     'w'=> "D8P7iFHhprPCErPrNVL7hrjiBMFfLgv55f"
    ],
    5 => [
     'key'=> "c796966892a347f91bf75131a059f473",
     'w'=> "DC8U2kPjE4rRSy2PEkbCFUhTuMPqj2MAY3"
    ],
    6 => [
     'key'=> "3f84405ca5482138c16ace5be3b06919",
     'w'=> "DG5DETGJxofJc34Mz2J1V35AV8CCfcD1Xa"
    ],
    7 => [
     'key'=> "02dea8304ca4db276a534f3713f95f9b",
     'w'=> "DDfoYioenYM7wyYGWr5UkjJM9KPZrig93q"
    ],
    8 => [
     'key'=> "4828fef1a8d75a7a6e7bba087625ce5b",
     'w'=> "D5Qs9bt2HrtBs4fGbKhaC4fCusdibadgBo"
    ],
    9 => [
     'key'=> "82a760f53353c2cee82eec6ecb3f6030",
     'w'=> "D6mnmiYt4kKVa3yyHfz2D2N2mLDycwJaAa"
    ],
    10 => [
     'key'=> "c0d8b5890908b5092abe0d80353273ec",
     'w'=> "DS83FpwpHYcVjFWQ4JRWWpU4PxY8SseA9T"
    ],
    11 => [
     'key'=> "7263301491a7c61e0f977a4e4298e911",
     'w'=> "DEXw5DPK2mxFeePxzoDHdrZpDk13oDBbNX"
    ],
    12 => [
     'key'=> "7c73da059c0c22e22f2cfbc8ad81cc92",
     'w'=> "DPNPCzSbfPPEVeanoedzAHHcM4V4Bvrm2P"
    ],
13 => [
 'key'=> "542eb3bccc1b0852d2fa6523668991c3",
 'w'=> "D5nmwKa6vEnJhc8TpeNcLnv5tmSg2hYF1y"
],
14 => [
 'key'=> "9a8889dd2fb12841f048379cba23bb36",
 'w'=> "D8F9VVRPgGmBMGhNCqQppQ4Eb93szT9FhV"
],
15 => [
 'key'=> "1a8dd5ed9c52331de847ff430c77d9e0",
 'w'=> "DRzwtJcGt8ckUuq5TKLp9KV5PB1X2hG3wH"
],
16 => [
 'key'=> "a9f9b46c082ad2778495984069482a46",
 'w'=> "DStNKgYgpNqUV1heLZSPpFZLYoWNp41FGk"
],
17 => [
 'key'=> "371eac5a199802410a527c04af2740c2",
 'w'=> "DDfS8F9akFDejqBBKHkHzC999Et9aax3p2"
],
18 => [
 'key'=> "27d6d898c1e5a4bb4a56fc21855369f4",
 'w'=> "DHPnYKSLhjrwnsMn6Kcvb6vDezFE3p5m5B"
],
19 => [
 'key'=> "342bb592099cba528c826552bbcfac88",
 'w'=> "DJZdrnMs5vfxsiCJtk5u64UiZsADT6Eyfq"
],
20 => [
 'key'=> "d3c7c5693403634d52c4a9d30e51f25d",
 'w'=> "DEn4SoXH6iiG8KKbYWk1jk5uW5i3kqq8jS"
],
21 => [
 'key'=> "063a4af6a3f788f3332547cf0c6869ec",
 'w'=> "3AiWFQJtNLMAEi2CryQ4Vxis3ZkycRtKFD"
],
22 => [
 'key'=> "12186bd58b33b3a6e5b927a31260b485",
 'w'=> "DPVja8GxSgRoC7AxYptXGHcz5MMKystZyf"
],
23 => [
 'key'=> "444935f1429187affacd0e0cd4a31224",
 'w'=> "DTKcDXpjSZ4nNSLeLsFPv3jesTr7LVQecx"
],
24 => [
 'key'=> "0f44862edb2c9c043948ce9e55a19faa",
 'w'=> "DDaVfXpk6wXhUnHaBEoqbosCqLhGvcWhux"
],
25 => [
 'key'=> "fe1f3ac20cca8e5d38e874a61735462c",
 'w'=> "DFLXedd69bXo5FbWV8Uy434aqbEpK3k1uh"
],
26 => ['key' =>"515f15d9141ad9e9d6de1a895040725c",'w' =>"DFiWXJpF2cQjXnDVU2GJp49aWDcFi35jCg"],27 => ['key' =>"4e4fcb682523aa3f04d730b4c0ad8a0e",'w' =>"DFv7NQcrKPiAL5j5X3qwbvXGym4SDooKP5"],28 => ['key' =>"2800640c11a4dd199c734b3bdf8c13a5",'w' =>"DNvvTAkdgZZGN7CP1auzw66WmwQxJ6wn18"],29 => ['key' =>"07e25dfadfa5097f66e4af5acae101df",'w' =>"DMRgkjnjBJLbXPGzuB28wf1ercCeJndYdD"],30 => ['key' =>"f804ce2ba829bfaabf74efb2bb9c6c1e",'w' =>"DG3rM8JPf4csejVHaCqxWFhC6J4b1FanzU"],31 => ['key' =>"2aae240cc0d32a2a64e2160a635380e1",'w' =>"13LkZb6iRkVr6tXWCvpvQ6fXnqk3gz4wMB"],32 => ['key' =>"b6aaf28369f24c8dc963e5625d7eddad",'w' =>"DSmfaRM23bvxNyskSZqDgH8uSn7jV1iFqH"],33 => ['key' =>"eec6ed16bec5a738fd1863d4bee4dbf0",'w' =>"DRdMr9fPSxtSv5kKxCNk2PNjigYHiwMG7G"],34 => ['key' =>"83f8e5765296e2a5fb08e9dd3efdb63b",'w' =>"DE4AynEFF8SczpBBtd1mmTdXZnXratCr68"],35 => ['key' =>"7601e1435884390c6161ba085f269111",'w' =>"DSW9H7xJTimrenDUmvravGYm4a7pYQjSV2"],36 => ['key' =>"705ee934dc409fd7a35324343d29e34b",'w' =>"DHQ8CnRTgkSsQ59nissnEP7cwrswhK2v41"],37 => ['key' =>"0bf813238665075c076f53232b16bd66",'w' =>"DQhWqoSxzsUrbkk6AbYG7u1orALhHJ7rnB"],38 => ['key' =>"20bd4aa1f127ba402d5fe3d0c6bc73e2",'w' =>"DCqzybWzuBcM1x8qH5E2C9858337Zs2krN"],39 => ['key' =>"0381a8e876c229a5412605f2817575ee",'w' =>"DJvEmrFdbrBEtMXYRUzv67tfXiAipqbshC"],40 => ['key' =>"a74c46cdbef09114444d4e915fb32125",'w' =>"D5awZ7dy5qoYiH9RZg811TdSdD3m8yP1WQ"],41 => ['key' =>"465cafd88c70f5fa7fa6b756860857ac",'w' =>"DCY7tENGTKhDmZxZdCA9c3ZyvECfx2c2px"],42 => ['key' =>"451f835679f01c0489219de7f3c536f6",'w' =>"DRaPZdRHp55SJn3LfkfBzTbr388Wch6AXt"],43 => ['key' =>"f2d2f6f3e89b59d1e548aa78b0ab3a19",'w' =>"DLcaDs47uPh91vmpE7bvVAVg1jWKDW5fT9"],44 => ['key' =>"0bbcb135b342ab21033104a98c2ff874",'w' =>"DCqEPcecYaJry4zD9BoQq7rpKeqG4JLgEb"],45 => ['key' =>"2a6aca719e788bf2ba5d3df77b960bb4",'w' =>"DCF1cVEBHiaszziaWgX4oaLd1EwwhPm2qp"],46 => ['key' =>"25fa6b9de343bb6c9aba37c97fd51fcb",'w' =>"DNt1iEESGpJWP9GtzESx7TACzgHxjBUW3n"],47 => ['key' =>"5a6a13577dab057f4cc2ad48c4a70dc3",'w' =>"DMjDLtmHoJ6ihjuovZKvumjCjXLdrT7t8u"],48 => ['key' =>"8d3e51b157e90fe1be42717b94fabae8",'w' =>"DHWAGBF36B3YAZufRYJF4XToZCSgXKm47L"],49 => ['key' =>"b5181df04152adb82f9c594adeb76380",'w' =>"DDGxKBAVLXcyjXsZYfP8faqhaZGhcGivbU"],50 => ['key' =>"77a7c51b64936adfa85c6a24825ae763",'w' =>"DHjGAmD7yNREMngfFjWafEB8KvTQRjafKa"],51 => ['key' =>"b9153d43a5b6c195359e0474ac9da439",'w' =>"D8RipeMFGtstS7ZMrRQRc6DUZKknrFCKFx"],52 => ['key' =>"7a16f3dbbff159c7cdf6fec4744043e7",'w' =>"DCdfXFdNakddg1924HgWztqU3yFbAuER6Q"],53 => ['key' =>"dce6808230676d7a23202fe2f53aeec1",'w' =>"D6XvFLX85SmXYqRrCqC922Bw7R5RENfVa2"],54 => ['key' =>"a5c81bc80964312f61d51fca76d6323c",'w' =>"3Jajx7eqasEVM26Z95UuRXieDJVbX56UJ5"],55 => ['key' =>"fe803504e72250f96b494357d888de67",'w' =>"DHiDa56YBh9HotjPU4uLH5QkPfFeZosDcj"],
56 => ['key' =>"32eb5ecf9bdacf241cbba33a6bfec594",'w' =>"DFqLwF3b6d6GrZXoDLP3GBFd3R4t8HLTyX"],
57 => ['key' =>"1085e29d39b07d93dd72c9a6e8bd94c5",'w' =>"D7UrSSuf1YrLEgN761uymWM1prG6MdTHwg"],
58 => ['key' =>"2aeccc609f7bec2efee2d4e4ec4175fb",'w' =>"DCCZFa5yg9pps7fmZdmNuiGfMgLNZVPc83"],
59 => ['key' =>"79b58c0820c1bc86631e44a6a2b6fad9",'w' =>"DCL1cCoLTmfd1XHP2dWSN9CytYPGSCaYdA"]
  ];

// URL array
for($i = 0; $i < count($reff); $i++){
$urlReff[$i] = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$reff[$i]['w']}&currency=DOGE&key={$reff[$i]['key']}";
}

function cek($var){
  if($var == "") {
    $q = "Kosong";
  } else {
    $q = "Siap";
  }
} // end funct

?>
