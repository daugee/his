<?php

$url = "http://apps.dhis2.org/demo/api";

$username = 'admin';
$password = 'district';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, 0);

curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  

$output = curl_exec($ch);

print "error:" . curl_error($ch) . "<br />";


curl_close($ch);

?>