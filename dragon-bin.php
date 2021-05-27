<?php
$yellow = "\033[1;33m";
$red = "\033[1;31m";
system("clear");
error_reporting(0);
$lg = "\033[1;32m";
$yellow = "\033[1;33m";
echo  "$yellow
,--,  ,.-.
               ,                   \,       '-,-`,'-.' | ._
              /|           \    ,   |\         }  )/  / `-,',
              [ ,          |\  /|   | |        /  \|  |/`  ,`
              | |       ,.`  `,` `, | |  _,...(   (      .',
              \  \  __ ,-` `  ,  , `/ |,'      Y     (   /_L\
               \  \_\,``,   ` , ,  /  |         )         _,/
                \  '  `  ,_ _`_,-,<._.<        /         /
                 ', `>.,`  `  `   ,., |_      |         /
                   \/`  `,   `   ,`  | /__,.-`    _,   `\
               -,-..\  _  \  `  /  ,  / `._) _,-\`       \
                \_,,.) /\    ` /  / ) (-,, ``    ,        |
               ,` )  | \_\       '-`  |  `(               \
              /  /```(   , --, ,' \   |`<`    ,            |
             /  /_,--`\   <\  V /> ,` )<_/)  | \      _____)
       ,-, ,`   `   (_,\ \    |   /) / __/  /   `----`
      (-, \           ) \ ('_.-._)/ /,`    /
      | /  `            `/\\V   V, /`     /
   ,--\(        ,     <_/`\\     ||      /
  (   ,``-     \/|         \-A.A-`|     /
 ,>,_ )_,..(    )\          -,,_-`  _--`
(_ \|`   _,/_  /  \_            ,--`
 \( `   <.,../`     `-.._   _,-`
 @Telegram = @renlowsphere
                               Instagram = renlowsphere 
      [1]VISA_                 |     [2]MASTERCARD_
                               | 
                               |  

";
$num = readline("Choose Type: ");
                               echo"
[☆]__________________________________________________________[☆]
";
if($num == '1'){
  while(1 < 10){
  $sum = rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9)+rand(5,9).rand(1,9);
$visa = "4$sum";
//$visa = "417210";
$url = "https://lookup.binlist.net/$visa";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $h[] = "content-type:application/x-www-form-urlencoded";
  $h[] = 'Accept-Version: 3';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
$last = curl_exec($ch);
//echo $last;
$js = json_decode($last, true);
$type = $js['type'];
$pre = $js["prepaid"];
$done =  "$type$pre";
if($done === 'debit1'){
echo $yellow.'[#]-------------->'.$lg.$visa."\n$yellow";
file_put_contents("bins.txt", "$visa\n", FILE_APPEND);
}
    sleep(7);
  }

}elseif($num == '2'){
while(1 < 10){
  $sum2 = rand(1,9).rand(1,9).rand(1,9).rand(0,9).rand(1,9)+rand(5,9).rand(0,9).rand(0,9);
$master = "5$sum2";
$url = "https://lookup.binlist.net/$master";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $h[] = "content-type:application/x-www-form-urlencoded";
  $h[] = 'Accept-Version: 3';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
$last = curl_exec($ch);
//echo $last;
$js = json_decode($last, true);
$type = $js['type'];
$pre = $js["prepaid"];
$done =  "$type$pre";
if($done === 'debit1'){
echo $yellow.'[#]-------------->'.$lg.$master."\n $yellow";
file_put_contents("bins.txt", "$master\n", FILE_APPEND);
}
    sleep(7);
  }
}else{
  echo "Invalid Input!!\n";
}
?>
