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

// cookie referal
$cookie_1 = "HstCfa4361570=1628652464174; HstCmu4361570=1628652464174; HstCnv4361570=1; HstCns4361570=1; c_ref_4361570=https%3A%2F%2Fwww.google.com%2F; __dtsu=6D0016284374359B319EBDFB636B2B47; _cc_id=98feee562799aef888c0e80e0f075c77; __gads=ID=6c9f72ad395585cb-22fca495c3ca00c2:T=1628652490:RT=1628652490:S=ALNI_MblnMycgNGpDI0Ne6TBJ5dLkF1ihA; HstCla4361570=1628652496733; HstPn4361570=2; HstPt4361570=2";

$w = "TQWEaCKTVNzFSi7s29RamaiQou8VpgxNfF";
$key = "66c0b0a94cad9b6b4ce0923f31e745b2";



$webtarget = "http://uptocoin.tk/fp/faucet.php?address={$w}&currency=DOGE&key={$key}";

//timer-claim-dalam-satuan-detik
$tmr = "60";

$reff = [
    0 => ['key'=> "0b34775ba375b79627051d521d1f315f",'w'=> "DF4fuDcUTakiiGUdt9xq5T7mbGv8CviRPq"],
    1 => ['key'=> "409b29502a24e3d071b24baf0299973a",'w'=> "DGg978VFUeYgfWR4AT9kRpwasTsZJ1Yb39"],
    2 => ['key'=> "dea4c7f0e64b8b5361f66e3b44d23366",'w'=> "DK241G5Lim45ujMq9FBCFYvQhYr48mVDq9"],
    3 => ['key'=> "f7d20d0a3191f7ea371fc70db19c6b84",'w'=> "DGGkjUJtPT7si32iHrqXJpbhV6CheGmQeA"],
4 => ['key'=> "c51adf31439da5ac0b72124d4c2b678e",'w'=> "D8HY18d2v152ZyyhhYhkPwEA7VGv5eqyqQ"],
5 => ['key'=> "227383956d0197a30eee2c31bb84d002",'w'=> "DDuxHS7Udor3BKVHgZVKddGh77GBYSkip2"],
6 => ['key'=> "13bcd58f06629e6c451c174f2cbd9a29",'w'=> "D9BpUXUB33K3u63Uj77w9bCVnMYBuSYF6f"],
7 => ['key' =>"ae8b847848d9e1681e3923629d5dd655",'w' =>"D9gpJgZnggqAFNLeSwjYQUHWBc1kpNmJue"],8 => ['key' =>"6d276ed1b80d1db63f49997d827fe0d5",'w' =>"DBeHheD57TQgZYfxr3o2bKPAzDfEzGp7Xx"],9 => ['key' =>"2fb8105ac5d728f99345bf5b272819bf",'w' =>"D9EphMBwbxupULQMZY8t6KQ1a5QdFeujeb"],10 => ['key' =>"0660c71bf3a64e78c67f38b727ccfe82",'w' =>"D6ZHtw7jEjX4D1TUt8xsbki7HxusYt7gpb"],11 => ['key' =>"4adeba8fb47b95fbcdcf544509894dcc",'w' =>"DC4Fqg2mGB5r79DbepaciHkLMBQwEa3YLR"],12 => ['key' =>"bbdaaeb58230a7187121af286916116d",'w' =>"DJqzLsN4a9egj7SDyarhxWUy8grRHbDcn4"],13 => ['key' =>"7df4e4094b35c835a8334725655c2900",'w' =>"DRtuaZWnU9fGK6k8hKNRetyKCUbEUpgxLp"],14 => ['key' =>"9abc799e1f0e26dcdd0a9f6aedefb295",'w' =>"D6oxLyjLU3Qs8t8jVabE6jMeXViTG5aYUT"],15 => ['key' =>"54e494c7bd2174a19dfcfe71113628f0",'w' =>"DUGkbRj62LiVYT2mFmndeuSAEbx6Ds4h3A"],16 => ['key' =>"a024913c58b4efac2ddcb070b45e6daa",'w' =>"TLm6zhEsfZkSu2MiMsrkLqz2YvFc3pRebd"],17 => ['key' =>"d08c83f7ec7ac58a1c7d9ab4269c2a72",'w' =>"DTMZ9QbgMeauoM4h8Ndr98BpEpJD9sk92N"],18 => ['key' =>"e728622587c0997fdefeb927ebe36e3e",'w' =>"DNJwC82TgihRPQRA6j8Qvfz8i4DPSUm8bj"],19 => ['key' =>"4901898b53de017089580c44ec365128",'w' =>"DLj6e2Cie5ENqSHNc88PEWSUDgMFRQzHqP"],20 => ['key' =>"f5a996129cb911e90ce7e3eaa5f94d34",'w' =>"DQQrKvjWbuDrR4txKUB5NYZyV5jsN829vi"],21 => ['key' =>"baf9b7f78655401aca90aa3e8b208694",'w' =>"DMpygzmZdX2zW1V4azPWVAeDnewVPTDac5"],22 => ['key' =>"fb16103eab547041d8d8688641ae6bdb",'w' =>"DBe2Dnp9uNA2RrS4xqPQYD5ci2TevG6XyL"],23 => ['key' =>"d8526a506a641af9ed43bb4b67588155",'w' =>"DSk6ZQuypi64ZhUGvrGagH8rqDqE3s7Tk4"],24 => ['key' =>"74aea1ad4ba33f4346e2be54a53e5085",'w' =>"DJKnP3qdSHRuWNdkzuAcnqdGj3GXEkCiG4"],25 => ['key' =>"8921c974874f7637f9f9a79992d5f10c",'w' =>"D6ZzNtctBJ2tS5Rm3vgEqmL1sSkNsrYCq9"],
26 => ['key' =>"7dd0d5c15fa9715fe539ed974f390924",'w' =>"DDX3HNAxSJhrmteHJePHV1o45g1qD6j5Jz"],27 => ['key' =>"06d796144d5c5d0359f7585b2c106617",'w' =>"DKfVq5aoXDn9iiuFwtsGiC1xnU8RWEq1iV"],28 => ['key' =>"f6bcc0a77a6e16b76dee8ecca9f9f262",'w' =>"DFRj2FAmkohLGoccZHACVcJpYiCqu1p2oK"],29 => ['key' =>"eb6ae1542da34ab09da021baa5bc41da",'w' =>"DMM76Uy3pGCHmedU8u1ag2dzcVoQ37aSD7"],30 => ['key' =>"77931669b98192c73bcd1f6fa24ef332",'w' =>"DHZ2zoFHM22aGX9LWvJjNkc3D3ozhYB1wi"],31 => ['key' =>"05843997152c0158a5ee9b40d359a638",'w' =>"DDs3YAZRjC4quoKFpTatFtgH7NCfhRNwFA"],32 => ['key' =>"3feb574e952d9b3ac698498784824ea2",'w' =>"DF7JNzaiUNAoSpFLbDNYnBN8oL2sY17q4w"],33 => ['key' =>"7a6dae2f61a6375fa5b71be63047ec7c",'w' =>"DA7W4oKLJD4kVSY1nwcKGhrRJibENgng1q"],34 => ['key' =>"dd2a77d9829317ad4d04b9c52363a7e3",'w' =>"DJNn8dQCYWNXMukqwSdPp51sSE1JZpfGU6"],35 => ['key' =>"8f69574ce88b2806147cd3e9707513df",'w' =>"DPPKdGE8SHeWJFXrrZKZ7gVHaRVUTFrRB2"],36 => ['key' =>"6185b8a79e721ab53f224410e97ede95",'w' =>"MLxikF7tN2YRz7QP5Zfj2KFVrpyD4BdTyn"],37 => ['key' =>"c80ce8414ef066c0a900beaefda3917b",'w' =>"DMNpvFwV8UJUysrHMfNxZNeUKrpqKDUceQ"],38 => ['key' =>"37ca53e030bb59df0343785cc64d8e06",'w' =>"DF51KCxfBk35kLky5PGWba2mMKjE8sL3mP"],39 => ['key' =>"4baf927515f022607e1ed88792c4b07c",'w' =>"DKYWU1KssxaUeAzjtBghhqhVM62Ee6HTos"],40 => ['key' =>"1e0af7c5ab3a92539d39a5e257b9f213",'w' =>"DCYpzJXeZeejpDRd9G9oKXqwDvY7eBktxn"],41 => ['key' =>"1aa1ea922a42f23eddb51654e8f10628",'w' =>"DN5GYd3whMbn3R1YCx2aXwinEwzujYuPFj"],42 => ['key' =>"a45c961cbfc4f7becd06620c865abdbc",'w' =>"DR65q7NNSjoZvtyng4j9yzUYUvMXzjket9"],43 => ['key' =>"b82164e9d19c0936457593253d46f234",'w' =>"DPmve411nDVbyyXAUyyem3xhM7kd2BkNW9"],44 => ['key' =>"5b8154d3d0f7a89fe44b62058695956e",'w' =>"DMfUNtnSsZCFPhpiDBvyAjQGa9aVQW7Fna"],45 => ['key' =>"fd4c5cb644fdb794191e3f5afc1912f1",'w' =>"DL1FTb4SipqjZNzDGgc2gDW14wvHLR8mW1"],46 => ['key' =>"4a05b50cd08a8c834eaafc5da55022c7",'w' =>"DMp9UKLP66f5cqMk9VVh4KjY43mGyxE352"],47 => ['key' =>"8ca6ddf14f3a4f359bcbe1f435a9a72f",'w' =>"DEUcCdCsyBEFKoxFLNk4EkA1efFqXpPhbY"],48 => ['key' =>"50a794d3b55fd5c0b324283e5d8ff713",'w' =>"DNSuwSpa9adCp74fjg457EMmN3VPSutQyC"],49 => ['key' =>"97a1384bd0acfbeeea3313ecb07b065f",'w' =>"DJKxm6Uk6DRJ47Rzfd3gdeDD5sv8F7innU"],50 => ['key' =>"066341229da446b753af1e0b3c35a552",'w' =>"DSH5ce7d5oXBVm6xrjn7wtbMMfyugdCdaa"],51 => ['key' =>"5d041e797e6426a24bf83573e601ae48",'w' =>"DLNZ1DvZWtpDapSLNKC7oWsT1zfZeVqw8w"],52 => ['key' =>"fa2db3ede7b9560f7b67b7cf896cae4a",'w' =>"DEy8RexYcXDHy4XQJ1YeNMgNNdcrKWPQWb"],53 => ['key' =>"f04034ed46bf8f7479a4d2192606b338",'w' =>"DC469F8te5rXpE689aSrJvUR8ZxVYdZ5TB"],54 => ['key' =>"fadc0ef24ee44369b0efc983da8cab45",'w' =>"DABHcuGBX4XwaUqxdPQJLioREdrAf9pTxE"],55 => ['key' =>"0dfbd67130a2d63825e12b615751c135",'w' =>"A47Nrpm429gkje1L3CGeAouyqy5hZ46DUJ"],56 => ['key' =>"ca5b506855dcddb9331f6562628fdba8",'w' =>"DMHQMtFjPuo8MBZG9kbDc1bywtxD1gPhU5"]
  ];
  
for($i = 0; $i < count($reff); $i++){
$urlReff[$i] = "http://uptocoin.tk/fp/faucet.php?r={$w}&rc=DOGE&address={$reff[$i]['w']}&currency=DOGE&key={$reff[$i]['key']}";
}

?>
