<html>
<head>
<title>This is the dhis connector</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
</head>
<body>
<h1>This is the homepage</h1>

<?php

$url = "http://apps.dhis2.org/demo/api/indicators.json?paging=false";

$username = 'admin';
$password = 'district';

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
				FACILITY_CODE.push(data.code);
				FACILITY_LEVEL.push(data.level);
				FACILITY_ID.push(data.id);
                $("#name").append(data.name+"  : "+data.code+"<br/>");
        });
		console.log((FACILITY_LEVEL.length));console.log((FACILITY_NAME.length));console.log((FACILITY_ID.length));
         }); 
</script>
<div id="name">
</div>
<div id="id">
</div>
</body>
</html>
