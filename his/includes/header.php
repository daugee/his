<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Metamorphosis Design Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
		<script type="text/javascript" src="<?php echo base_url('lib/jquery-1.3.2.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('lib/jquery.tools.js');?>"></script>	
		<script type="text/javascript" src="<?php echo base_url('lib/jquery.custom.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('css/styles.css');?>"  type="text/css" media="all"/>
<?php

$url = "http://test.hiskenya.org/dhis-web-commons-security/login.action";

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
