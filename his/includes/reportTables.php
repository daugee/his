
<?php

$url = 'http://test.hiskenya.org/api/reportTables.json?paging=false';


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
            $(json.reportTables).each(function(i, data){	
                var id = data.id;
                var link= data.href;
                
				FACILITY_NAME.push(data.name);
				FACILITY_CODE.push(data.png);
				FACILITY_LEVEL.push(data.href);
				FACILITY_ID.push(data.id);
              $("#reportTables").append("<a href='"+data.href+"/data.pdf'>"+data.name+"| PDF | </a>").append("<a href='"+data.href+"/data.xls'> XLS |</a>").append("<a href='"+data.href+"/data.csv'> CSV |</a>").append("<br />");
              //var anchor = $("<a class='blue' id='"+theId+"' onclick='javascript:printIt(id)'></a>").append(data.href).append("<br />"); 
		//$("#name").append(anchor);							  

                            
 
        });
		console.log((FACILITY_LEVEL.length));console.log((FACILITY_NAME.length));console.log((FACILITY_ID.length));
         }); 
</script>

