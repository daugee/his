<?php

$url = "http://test.hiskenya.org/api";

$username = 'hi4kenya';
$password = 'Hi4kenya';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, 0);

curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  

$out = curl_exec($ch);

print "error:" . curl_error($ch) . "<br />";


curl_close($ch);

?>