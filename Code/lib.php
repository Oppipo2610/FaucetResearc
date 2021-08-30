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
]
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
