<?php include'includes/header.php';?>

<?php include'includes/tab.php';?>
<!-- content begins -->
        		<div id="content_top"></div>
       			<div id="content">
                	<div id="content_razd">
                    	<?php echo  validation_errors();?>
                             <div id="buttons">
                                 <a href="<?php echo site_url('welcome/admin');?>" class="but"  title="">Add Event</a>
                                 <a href="<?php echo site_url('welcome/admin_events');?>" class="but"  title="">Edit Events</a>
                                 <a href="<?php echo site_url('welcome/logout');?>" class="but"  title="">Logout</a>
                                 
                             </div>

<div id="left">
                            <h2>Delete Events</h2>
                             <?php foreach ($query as $detail): ?>
                       		<div style="height:8px"></div>
                           <?php  echo form_open('welcome/events_delete'); ?>
                                  <div>
                                      <label class="control-label" for="title">Event Title : </label>
            
                                      <input class="input_txt2" type="text" name="title" value=" <?php echo $detail->title; ?>"/>
                                      <span class="site-error"><?php echo form_error('Title'); ?></span>
                                  </div>
                                  <div style="height:5px"></div>
                                  <div>
                                      <label class="control-label" for="author">Period : </label>
                                      <input class="input_txt2" type="text" name="period" value="<?php echo $detail->period; ?>" />
                                      <span class="site-error"><?php echo form_error('period'); ?></span>
                                  </div>
                                      <div style="height:5px"></div>
                                   <div>
                                     <label class="control-label" for="organizers">Organizers : </label>
                                     <input class="input_txt2" type="text" name="organizers" value="<?php echo $detail->organizers; ?>"/>
                                     <span class="site-error"><?php echo form_error('organizers'); ?></span>
                                  </div>
                                      <div style="height:10px"></div>
                                  <div>
                                      <label class="control-label" for="description">Description : </label>
                                    <input type="text" class="text_area2" cols="32" rows="3" name="description" value="<?php echo $detail->description; ?>"></textarea>
                                     <span class="site-error"><?php echo form_error('description'); ?></span>
                                  </div>
                                     <div style="height:5px"></div>
                              <div>
                                  <input type="hidden" name="id" value="<?php echo $detail->id ?>"/>
                                <input class="submit2" name="Submit" type="submit" value="DELETE" />
                                &nbsp;&nbsp;
<!--                              <input class="submit2" style="margin: 0px 0px 0px 420px;" name="Submit2" type="reset" value="RESET" />-->
                              </div>
                         <?php echo form_close(); ?> 
                                      <?php endforeach;?>
                        
                     </div>

                         
                    
                      
                          
                      <div style="clear: both"></div>
                 
                 
        			</div>
                </div>
                <div id="content_bot"></div>
    <!-- content ends --> 
    <div style="height:15px; width: 100%"></div>
    <!-- bottom begin -->
     <?php include 'includes/footer.php';?>