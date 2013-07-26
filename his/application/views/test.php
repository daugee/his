 <?php include 'includes/connector.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/tab.php';?>
<script type="text/javascript">

$("#results").append("<h1>INDICATOR GROUPS</h1>");
                $.get('http://test.hiskenya.org/api/indicatorGroups/query/'+$(this).val()+'.json', function(json)
                        {
						     
                                $(json.indicatorGroups).each(function(i, data)
                                {
                                	theId=data.href;
								       
									   
                                        var anchor = $("<p class='blue' id='"+theId+"' onclick='javascript:printIt(id)'></p>").append(data.name);
                                        
                                        $("#results").append(anchor);
										
                                        
                                });
                        });
                        </script>

<h1>Group 3 Search</h1>
<div style="width:100%;height:200%;">
<div style="float:left;">
<label for="search">Search Criteria</label>


<div id="results" style="position:absolute;"></div>
</div>

<div id="child" style="position:absolute; left:50%; cursor:pointer"></div>
</div>
<div id="Charts" style="position:relative; margin-top:154px; left:40px;"> </div>

<div id="maps" style="position:relative; margin-top:154px; left:40px;"></div>
<div id="reports" style="position:relative; margin-top:154px; left:40px;"></div>

</body>
</html>
