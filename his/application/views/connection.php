<html>
<head>
<title>This is the dhis connector</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
</head>
<body>
<h1>This is the homepage</h1>



<?php

$url = 'http://apps.dhis2.org/demo/api/indicatorGroups.json?paging=false';


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

print "" . curl_error($ch) . "<br />";
$data=(json_encode($output,true));

?>

<script type="text/javascript">
    
    var my_var = <?php echo($data); ?>;
	var FACILITY_NAME=[];
	var FACILITY_CODE=[];
	var FACILITY_LEVEL=[];
	var FACILITY_ID=[];
        var NAME=[];
	var CODE=[];
	var LEVEL=[];
	var ID=[]; 
        
        
json=jQuery.parseJSON(my_var);
 
        
	$(document).ready(function() {
	 console.log(jQuery.type(json));
            $(json.indicatorGroups).each(function(i, data){	
                var id = data.id;
                var link= data.href;
                
				FACILITY_NAME.push(data.name);
				FACILITY_CODE.push(data.id);
				FACILITY_LEVEL.push(data.href);
				FACILITY_ID.push(data.id);
             // $("#reports").append("<a href='"+data.href+"/data.pdf'>"+data.name+"|PDF| </a>").append("<a href='"+data.href+"/data.xls'>XLS</a>").append("<br />");
              //var anchor = $("<a class='blue' id='"+theId+"' onclick='javascript:printIt(id)'></a>").append(data.href).append("<br />"); 
		//$("#name").append(anchor);							  
                  theId=data.href;						       
									   
                         var anchor = $("<a class='blue' id='"+theId+"' onclick='javascript:printIt(id)'></a>").append(data.name).append("<br />");
                                        
                         $("#results").append(anchor);

                            
 
        });
		console.log((FACILITY_LEVEL.length));console.log((FACILITY_NAME.length));console.log((FACILITY_ID.length));
        
        
        });
        function printIt(id)
	{
            <?php

$ur = 'http://apps.dhis2.org/demo/api/indicators.json?paging=false';


$name = 'admin';
$pass = 'district';

$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL, $ur);
curl_setopt($ch1,CURLOPT_POST, 0);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch1, CURLOPT_USERPWD, $name . ":" . $pass);
cur1l_setopt($ch1, CURLOPT_CONNECTTIMEOUT ,0); 
curl_setopt($ch1, CURLOPT_TIMEOUT, 0);  

$out=curl_exec($ch1);

print "" . curl_error($ch1) . "<br />";
$dat=(json_encode($out,true));

?>
     var my_var1 = <?php echo($dat); ?>;
	  
                
jsn=jQuery.parseJSON(my_var1);$.get(id+'.json',function(json){
$(jsn.indicators).each(function(i, data){	
                var id = data.id;
                var link= data.href;
                
                
				NAME.push(data.name);
				CODE.push(data.id);
				LEVEL.push(data.href);
				ID.push(data.id);
             						  
                   idno=data.id;
                   var anchor = $("<a id='"+idno+"'  onclick='javascript:chartLoad(id)' ></a>").append(data.name).append("<br />"); 
		  $("#child").append(anchor);

                            
 
        });
		console.log((LEVEL.length));console.log((NAME.length));console.log((ID.length));
        
        
});
	}   

          
	   	
	 

	
        

</script>




<div id="child">
</div>
<div id="results">
</div>

    
</body>
</html>