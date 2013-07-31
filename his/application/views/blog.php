
  

<?php include 'includes/header.php';?>
  <?php include 'includes/reports.php';?>
<?php include 'includes/tab.php';?>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
<script type="text/javascript">
    $(function() {
                $("#tabs").tabs({collapsible: true}).addClass('ui-tabs-horizontal ui-helper-clearfix');
		$("#tabs li").removeClass('ui-corner-top').addClass('ui-corner-right');
		
	});
	</script>
        
        
<script type="text/javascript">

var base = "http://test.hiskenya.org/";



function setLinks() {
    
  jQuery("#map1").attr("src", base + "api/mapViews/Om7R4Y4xSfX/data");
  jQuery("#map2").attr("src", base + "api/mapViews/cLEOY7D8rFm/data");
  jQuery("#chart1").attr("src", base + "api/charts/fNzZOUER6vK/data");
  jQuery("#chart2").attr("src", base + "api/charts/NQAqUVsjTPh/data");
 // jQuery("#table1").load(base + "api/reportTables/NBt7kGTOQTb/data.pdf");
 // jQuery("#table2").attr(base + "api/reportTables/NBt7kGTOQTb/data");
var anchor = $("<iframe></iframe>").attr("src",'http://test.hiskenya.org/api/reportTables/wrCrHx1YzM3/data.html').attr("height",550).attr("width",780).append("<br />"); 
$("#table1").append(anchor).load();
var anchor = $("<iframe></iframe>").attr("src",'http://test.hiskenya.org/api/reportTables/AeQc26EECQc/data.html').attr("height",550).attr("width",780).append("<br />"); 
$("#table2").append(anchor).load();
 

						     
                               
                                		
                                        
                              
}


jQuery(document).ready(function() {
/*$.post( base + "dhis-web-commons-security/login.action", { 
      j_username: "hi4kenya", j_password: "Hi4kenya" 
    },
    setLinks
  );*/
     setLinks();
       
});

</script>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Reports</a></li>
    <li><a href="#tabs-2">maps</a></li>
    <li><a href="#tabs-3">charts</a></li>
    <li><a href="#tabs-4">Embedded tables</a></li>
    <li><a href="#tabs-5">Reports Tables</a></li>
    <li><a href="#tabs-6">Indicator Groups</a></li>
  </ul>
  <div id="tabs-1">
  
   <div class="datc_comment">      
             <div class="date"><img src="<?php echo base_url('images/fish_dat.gif');?>" style=" " alt="" />&nbsp;&nbsp;<a href="#"><?php echo date('l jS \of F Y h:i:s A');?></a></div>
                               <!--- <div class="bloger"><img src="<?php echo base_url('images/fish_bloger.gif');?>" style=" vertical-align:middle" alt="" />&nbsp;&nbsp;<a href="#">by John Johnson</a></div>
                                <div class="comment"><img src="<?php echo base_url('images/fish_comment.gif');?>" style=" vertical-align:middle" alt="" />&nbsp;&nbsp;<a href="#">12 Comments </a></div>
                          -->
          </div>
                           <div style=" height:5px"></div>

                           <ul>
                               <li> <div id="reports"></div></li>
                           </ul>
  </div>
  <div id="tabs-2">
      <div id="maps"></div>
                            <img style="padding: 5px; margin: 5px; border-style:solid; border-width: 1px; border: 1px solid #c0c0c0; width: 400px" id="map1" />
                            <img style="padding: 15px; margin: 15px; border-style:solid; border-width: 1px; border: 1px solid #c0c0c0; width: 400px" id="map2" />
  <div class="read_r"><a href="<?php echo site_url('welcome/maps');?>">more</a></div>
  </div>
  <div id="tabs-3">
     

     <div id="charts"></div>


                           
                               
                           
                           <img style="padding: 15px; margin: 15px; border: 1px solid #c0c0c0;" id="chart1" class="chart"/>
                            <img style="padding: 15px; margin: 15px; border: 1px solid #c0c0c0;" id="chart2" class="chart"/>
     <div class="read_r"><a href="<?php echo site_url('welcome/charts');?>">more</a></div>                      
  </div>
    <div id="tabs-4">
        
                            <div id="table1"></div>
                             <div id="table2"></div>
                             <div class="read_r"><a href="<?php echo site_url('welcome/embededtables');?>">more</a></div>
    </div>
    <div id="tabs-5">
     <ul>
        
                               <li> <div id="reportTables"></div></li>
           
                               
                                    <li><a href="http://apps.dhis2.org/demo/api/reportTables/NBt7kGTOQTb/data.html">District 
                                    Feedback 
                                    Indicators</a> | <a 
                                    href="http://apps.dhis2.org/demo/api/reportTables/NBt7kGTOQTb/data.pdf">PDF</a> | <a 
                                    href="http://apps.dhis2.org/demo/api/reportTables/NBt7kGTOQTb/data.xls">XLS</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/NBt7kGTOQTb/data.csv">CSV</a></li>
                                    <li><a href="http://apps.dhis2.org/demo/api/reportTables/xIWpSo5jjT1/data.html">District Maternal Health</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/xIWpSo5jjT1/data.pdf">PDF</a> | <a 
                                    href="http://apps.dhis2.org/demo/api/reportTables/xIWpSo5jjT1/data.xls">XLS</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/xIWpSo5jjT1/data.csv">CSV</a></li>
                                    <li><a href="http://apps.dhis2.org/demo/api/reportTables/GXG56cBuqcm/data.html">ANC Visits Fixed and Outreach</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/GXG56cBuqcm/data.pdf">PDF</a> 
                                    | <a href="http://apps.dhis2.org/demo/api/reportTables/GXG56cBuqcm/data.xls">XLS</a> | <a href="http://apps.dhis2.org/demo/api/reportTables/GXG56cBuqcm/data.csv">CSV</a></li>
                               </ul>
        <div class="read_r"><a href="<?php echo site_url('welcome/reportTables');?>">more</a></div>
    </div>
    <div id="tabs-6">
        
                            <div id="indicatorGroups"><?php include 'includes/indicatorGroups.php';?></div>
                             <div id="table2"></div>
                             <div class="read_r"><a href="<?php echo site_url('welcome/embededtables');?>">more</a></div>
    </div>
</div>

    <!-- content ends --> 
    <div style="height:15px; width: 100%"></div>
    <!-- bottom begin -->
    <?php include 'includes/footer.php';?>