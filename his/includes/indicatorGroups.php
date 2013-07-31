<?php

$ur = "http://test.hiskenya.org/api/indicatorGroups.json?paging=false";

$username = 'hi4kenya';
$password = 'Hi4kenya';

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, $ur);
curl_setopt($ch1,CURLOPT_POST, 0);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch1, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($ch1, CURLOPT_CONNECTTIMEOUT ,0); 
curl_setopt($ch1, CURLOPT_TIMEOUT, 0);  
$out=curl_exec($ch1);
$dat=(json_encode($out,true));
?>

<script type="text/javascript">
    var my_var = <?php echo($dat); ?>;
	var FACILITY_NAME=[];
	var FACILITY_CODE=[];
	var FACILITY_LEVEL=[];
	var FACILITY_ID=[];
jsn=jQuery.parseJSON(my_var);
	$(document).ready(function() {
	 console.log(jQuery.type(jsn));
            $(jsn.indicatorGroups).each(function(i, data){	
                var id = data.id;
				FACILITY_NAME.push(data.name);
				FACILITY_CODE.push(data.code);
				FACILITY_LEVEL.push(data.level);
				FACILITY_ID.push(data.id);
                $("#indicatorGroups").append(data.name+"  : "+data.code+"<br/>");
        });
		console.log((FACILITY_LEVEL.length));console.log((FACILITY_NAME.length));console.log((FACILITY_ID.length));
         }); 
</script>