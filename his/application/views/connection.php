<html>
<head>
<title>This is the dhis connector</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
</head>
<body>
<h1>This is the homepage</h1>


<?php

$url = 'http://apps.dhis2.org/demo/api/charts.json?paging=false';


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
            $(json.charts).each(function(i, data){	
                var id = data.id;
                var link= data.href;
                
				FACILITY_NAME.push(data.name);
				FACILITY_CODE.push(data.png);
				FACILITY_LEVEL.push(data.href);
				FACILITY_ID.push(data.id);
                                var anchor = $("<iframe></iframe>").attr("src",data.href+'/data.html').attr("height",550).attr("width",780).append("<br />"); 				  
									 
                                        
                                        $("#maps").append(anchor).load();

             // $("#reportTables").append("<a href='"+data.href+"/data.pdf'>"+data.name+"| PDF | </a>").append("<br />");
              //var anchor = $("<a class='blue' id='"+theId+"' onclick='javascript:printIt(id)'></a>").append(data.href).append("<br />"); 
		//$("#name").append(anchor);							  

                            
 
        });
		console.log((FACILITY_LEVEL.length));console.log((FACILITY_NAME.length));console.log((FACILITY_ID.length));
         }); 
</script>


<div id="maps">
</div>
<div id="id">
</div>
</body>
</html>
