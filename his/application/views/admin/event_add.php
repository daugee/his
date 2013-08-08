<?php include'includes/header.php';?>

<?php include'includes/tab.php';?>
<!-- content begins -->
        		<div id="content_top"></div>
       			<div id="content">
                	<div id="content_razd">
                    	

<div id="left">
                            <h2>Contact Us</h2>
                            <span class=" span_cont"><img  style="height:96px;width:96px" src="<?php echo base_url(); ?>images/moh_large.png" class="img_l" alt="" />The ministry of Health Kenya</span><br />
                          Fusce at tortor est. Morbi eget leo vitae nibh aliquam elementum in id mauris. Fusce in elit nec lectus mollis bibendum. Integer eu lectus at tortor vestibulum rutrum. Pellentesque rutrum, ipsum eu adipiscing ornare, elit erat dignissim mi, vitae feugiat orci mi a dolor. Maecenas  nulla risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                          <div style="height:10px"></div>
                       		<div style="height:8px"></div>
                           <?php  echo form_open('admin/validate'); ?>
                                  <div>
                                      <label class="control-label" for="title">Event Title : </label>
            
                                      <input class="input_txt2" type="text" name="Title" value="<?php echo set_value('Title'); ?>" placeholder="Event Title"/>
                                      <span class="site-error"><?php echo form_error('Title'); ?></span>
                                  </div>
                                  <div style="height:5px"></div>
                                  <div>
                                      <label class="control-label" for="author">Period : </label>
                                      <input class="input_txt2" type="text" name="period" value="<?php echo set_value('period'); ?>" placeholder="Event Period"/>
                                      <span class="site-error"><?php echo form_error('period'); ?></span>
                                  </div>
                                      <div style="height:5px"></div>
                                   <div>
                                     <label class="control-label" for="organizers">Organizers : </label>
                                     <input class="input_txt2" type="text" name="organizers" value="<?php echo set_value('organizers'); ?>" placeholder="organizers" />
                                     <span class="site-error"><?php echo form_error('organizers'); ?></span>
                                  </div>
                                      <div style="height:10px"></div>
                                  <div>
                                      <label class="control-label" for="description">Description : </label>
                                    <textarea class="text_area2" cols="32" rows="3" name="description" value="<?php echo set_value('description'); ?>" placeholder="description"></textarea>
                                     <span class="site-error"><?php echo form_error('description'); ?></span>
                                  </div>
                                     <div style="height:5px"></div>
                              <div>
                                <input class="submit2" name="Submit" type="submit" value="SUBMIT" />
                                &nbsp;&nbsp;
                              <input class="submit2" style="margin: 0px 0px 0px 420px;" name="Submit2" type="submit" value="RESET" />
                              </div>
                         <?php echo form_close(); ?> 
                        
                     </div>
<div id="right">
                            <h2>Find Us</h2>
                                <div style="height:8px"></div>
                                <img src="<?php echo base_url('images/img52.jpg');?>" alt="" /><br />
                           <div style="height:3px"></div><br />
                                
                                <h2>Meet Our Company</h2> 
                               <div style="height:10px"></div>
                                    <div  class="box_us">
                                      <div  class="box_us_l">
                                        <img src="<?php echo base_url('images/fish_us1.gif');?>" alt="" />
                                      </div>
                                        <div  class="box_us_r">
                                            P.O BOX:30016-00100 <br /> Cathedral Road, Nairobi, Kenya
                                      </div>
                                        <div style="clear: both; height:10px;"></div>
                               </div>
                                
                                <h2>Call us via Phone</h2> 
                                <div style="height:10px"></div>
                                <div  class="box_us">
                                    <div  class="box_us_l">
                                        <img src="<?php echo base_url('images/fish_us2.gif');?>" alt="" />
                                    </div>
                                    <div  class="box_us_r">
                                      Phone:  +254-20-2717077  <br />
                                        Fax: 1(234) 567 8910
                                    </div>
                                    <div style="clear: both; height:10px;"></div>
                                </div>
                                
                                <h2>Emails</h2> 
                                <div style="height:10px"></div>
                                <div  class="box_us">
                                    <div  class="box_us_l">
                                        <img src="<?php echo base_url('images/fish_us3.gif');?>" alt="" />
                                    </div>
                                    <div  class="box_us_r">
                                        General: psph@health.go.ke <br />
                                        Support: support@yahoo.com
                                    </div>
                                    <div style="clear: both; height:10px;"></div>
                                </div>
                         
                      </div>
                    
                      
                          
                      <div style="clear: both"></div>
                 
                 
        			</div>
                </div>
                <div id="content_bot"></div>
    <!-- content ends --> 
    <div style="height:15px; width: 100%"></div>
    <!-- bottom begin -->
     <?php include 'includes/footer.php';?>