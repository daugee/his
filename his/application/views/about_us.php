
t<?php include 'includes/header.php';?>
<link rel="stylesheet" href="<?php echo base_url('css/styles.css');?>"  type="text/css" media="all"/>
<?php include 'includes/tab.php';?>
<!-- header ends -->
        <!-- content begins -->
        		<div id="content_top"></div>
       			<div id="content">
                	<div id="content_razd">
                    
                   	  <div id="left">
                         <h2>EVENTS</h2>
                         <div style=" height:5px"></div>
                            <?php foreach ($events as $detail): ?>
                            	<span class="span_cont">TITLE </span><br />
                                
                                   <?php echo $detail->title; ?><br />
                                <span class="span_cont">PERIOD </span><br />
                                <?php echo $detail->period; ?><br />
                                <span class="span_cont">ORGANIZERS </span><br />
                                <?php echo $detail->organizers; ?><br />
                                <span class="span_cont">DESCRIPTION </span><br />
                                <?php echo $detail->description; ?><br />
                                <div class="read_r"><a href="" target="_blank">more</a></div>
                                
                            <div style=" height:15px"></div>
                              <?php endforeach;?>
<!--                         <img src="<?php echo base_url('images/img41.jpg');?>" class="img_l" alt="" /><span class="span_cont">Events </span><br />-->
			
                            
                            
                        </div>
                         <div id="right">
                            <h2>Quick Links</h2>
                           <div style=" height:5px"></div>
                            
                            
                        
								<a href="http://www.hiskenya.org" target="_blank"><img src="<?php echo base_url('images/dhis2-logo.jpg');?>" alt="" /></a>
                           <div style=" height:5px"></div>
                            
                            	<span class="span_cont">District Health Information Software. </span><br />
                                   District Health Information Software – Version 2
                                
                                
                                Database of all registered and approved community units in the country; an extension of the Master Facility List, Ministry of Health.
                                <div class="read_r"><a href="http://www.hiskenya.org" target="_blank">more</a></div>
                                
                            <div style=" height:15px"></div>
                            
                            
                                                       
		<a href="https://demo.kenyaemr.org" target="_blank">
			<img src="<?php echo base_url('images/kenyaemr.png');?>" width="48" height="48" />
		</a>
	
	
		<span style="font-size: 24px;">KenyaEMR</span>
		
                           		<div style=" height:5px"></div>
                            	
                                KenyaEMR is a collaborative open source project to develop software to support the delivery of health care in Kenya
                            	<div class="read_r"><a href="https://demo.kenyaemr.org/" target="_blank">more</a></div> <div style=" height:5px"></div>
                            
                           <a href="http://www.ehealth.or.ke/facilities/" target="_blank"> <img src="<?php echo base_url('images/ehealth-kenya-logo.jpg');?>" alt="" /></a>
                           		<div style=" height:5px"></div>
                            	<span class="span_cont">Master Facility List </span><br />
                                The Division of Health Information System wishes to improve the Master Facitly List. This will be used for planning puposes and even be useful in the new software, District Health Information Software( DHIS)
                            	<div class="read_r"><a href="http://www.ehealth.or.ke/facilities/" target="_blank">more</a></div> <div style=" height:5px"></div>
                           
                           
                          <a href="http://www.ehealth.or.ke/mcul/" target="_blank"> <img src="<?php echo base_url('images/ehealth-kenya-logo.jpg');?>" alt="" /></a>
                           		<div style=" height:5px"></div>
                            	<span class="span_cont">Master Community Units List</span><br />
                            	Database of all registered and approved community units in the country; an extension of the Master Facility List, Ministry of Health.
                                <div class="read_r"><a href="http://www.ehealth.or.ke/mcul/" target="_blank">more</a></div>
                            
                            <div style=" height:5px"></div>
                           
                           </div>
                         <div style="clear: both"></div>
                 
                 
        			</div>
                </div>
                <div id="content_bot"></div>
    <!-- content ends --> 
    <div style="height:15px; width: 100%"></div>
    <!-- bottom begin -->
        <?php include 'includes/footer.php';?>