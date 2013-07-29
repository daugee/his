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
<html>
<head>
<title>This is the dhis connector</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
</head>
<body>
<h1>This is the homepage</h1>

<?php

$url = 'http://test.hiskenya.org/api/indicators.json?paging=false';


$username = 'hi4kenya';
$password = 'Hi4kenya';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 0);  
$output=curl_exec($ch);
print "error:" . curl_error($ch) . "<br />";
$data=(json_encode($output,true));
?>

<script type="text/javascript">
    var my_var = <?php echo($data); ?>;
	var FACILITY_NAME=[];
	var FACILITY_CODE=[];
	var FACILITY_LEVEL=[];
	var FACILITY_ID=[];
json=jQuery.parseJSON(my_var);
	$(document).ready(function() {
	 console.log(jQuery.type(json));
            $(json.indicators).each(function(i, data){	
                var id = data.id;
				FACILITY_NAME.push(data.name);
				FACILITY_CODE.push(data.href);
				FACILITY_LEVEL.push(data.level);
				FACILITY_ID.push(data.id);
                $("#name").append(data.name+"  : "+data.href+"<br/>");
        });
		console.log((FACILITY_LEVEL.length));console.log((FACILITY_NAME.length));console.log((FACILITY_ID.length));
         }); 
</script>



