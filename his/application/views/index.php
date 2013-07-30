<?php include 'includes/header.php';?>


<?php include 'includes/tab.php';?>
<!-- header ends -->
<div class="top">
	<div class="scrollable">
				<div class="items">
					<div class="item">
						<div class="header1"> 
						<div class="itext">Facilitation</div>
						</div>                                    
					</div> <!-- item -->
					<div class="item">
					    <div class="header2">
						<div class="itext">Mumo looking serious
						</div>
						</div>						
					</div> <!-- item -->
					<div class="item">
					    <div class="header3">
						<div class="itext">Part of the field trip</div>
						</div>						
					</div> <!-- item -->
					<div class="item">
					    <div class="header4">
						<div class="itext">Team at Mbagathi</div>
						</div>
					</div> <!-- item -->				
					
				</div> <!-- items -->
			</div> <!-- scrollable -->  
</div>
<div class="top_bot">
             <div class="navi"></div> <!-- create automatically the point dor the navigation depending on the numbers of items -->
</div>

        <!-- content begins -->
        		<div id="content_top"></div>
       			<div id="content">
                	
                    <h1>Welcome To Kenya National Health Information Portal</h1>
                  <img src="<?php echo base_url('images/img11.jpg');?>" class="img_l" alt="" />
                      <span class="span_cont">Latest Events</span><br />
                    <table width="60%" height align="right" id='customer'>    
     <th>Title:  
     </th>
     <th>Period:  
     </th>
     <th>description:  
     </th>
     
     <th>Organizers:  
     </th>
     
            <?php foreach ($events as $detail): ?>
                  <tr>
                   <td> <?php echo $detail->title; ?> </td>		
                  <td> <?php echo $detail->period; ?> </td>
                   <td> <?php echo $detail->description; ?> </td>		
                      <td> <?php echo $detail->organizers; ?> </td>	 
                       </tr>  
                     <?php endforeach;?>
                    
                    </table><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                      <div class="read_r"><a href="#">more</a></div><br />
                  <div class="razd_g"></div><br />
                
                      	  	<div class="col">
                       	  <h1>VISION</h1>
                          <img src="<?php echo base_url('images/col_img1.jpg');?>" class="img_l" alt="" />A nation free from preventable disease and ill health
                          
                       		
                      	</div>
                  <div class="col_razd"></div>
                        <div class="col">
                        	<h1 class="tit">MISSION</h1>
                            <img src="<?php echo base_url('images/col_img2.jpg');?>" class="img_l" alt="" />To provide effective leadership and participate in provision of quality Public Health and Sanitation services that are: equitable, responsive, accessible and accountable to Kenyans.
making to promote the health of the nation. 
                            
               	  </div>
                  <div class="col_razd"></div>
                        <div class="col">
                        	<h1 class="tit">Goals</h1>
                          <img src="<?php echo base_url('images/col_img3.jpg');?>" class="img_l" alt="" />To reduce ill-health among people living in Kenya due to preventable causes 
						  by strengthening the current public health interventions and embracing new innovations to foster economic growth. 
						  <div class="read_r"><a href="lib/jquery.custom.js" class="read_more">more</a></div>
						  <span class="span_dat">Strategic Thrusts Improving equitable access to public health and sanitation services Improving quality and responsiveness of public health and sanitation services Improving efficiency of public health and sanitation services Fostering partnership Improving financing to the Ministry of Public Health and Sanitation.
						  </span>
                        
               	  </div>
                  <div style="clear: both"></div>
                  <div style="height:15px; width: 100%"></div>
                  <div class="razd_g"></div>
                      
                      <div style="clear: both"></div>
                 
        		</div>
                <div id="content_bot"></div>
    <!-- content ends --> 
    <div style="height:15px; width: 100%"></div>
    <!-- bottom begin -->
  <?php include 'includes/footer.php';?>