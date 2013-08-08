
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
        <script>

</script>
             <div id="content_top"></div>
       			<div id="content">
                	<div id="content_razd">
        <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Add Events</a></li>
    <li><a href="#tabs-2"><?php echo anchor('welcome/admin_events', 'Edit Events'); ?></a></li>
     <li><a href="#tabs-2"><?php echo anchor('welcome/delete_events', 'Delete Events'); ?></a></li>
    <li><a href="#tabs-3"><?php echo anchor('welcome/logout', 'LOGOUT'); ?></a></li>
    
  </ul>
  <div id="tabs-1">
  
   <div class="datc_comment">      
             <div class="date"><img src="<?php echo base_url('images/fish_dat.gif');?>" style=" " alt="" />&nbsp;&nbsp;<a href="#"><?php echo date('l jS \of F Y h:i:s A');?></a></div>
                                        </div>
                           <div style=" height:5px"></div>
            
                            <h2>Add Events</h2>
                           <?php  echo form_open('welcome/validate'); ?>
                           
                                  <div>
                                      <label class="control-label" for="title">Event Title : </label>
            
                                      <input class="input_txt2" type="text" name="Title" value="<?php echo set_value('Title'); ?>" placeholder="Event Title"/>
                                      <span class="site-error"><?php echo form_error('Title'); ?></span>
                                  </div>
                                  <div style="height:5px"></div>
                                  <div>
                                      <label class="control-label" for="author">Period :&nbsp;&nbsp;&nbsp; </label>&nbsp;&nbsp;&nbsp;
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
                                
                              <input class="submit2" style="margin: 0px 0px 0px 420px;" name="Submit2" type="reset" value="RESET" />
                              </div>
                                    
                         <?php echo form_close(); ?> 
                                     
  </div>
  <div id="tabs-2">
    <div><?php echo anchor('welcome/admin_events', 'Edit Events'); ?></div>
                             
  
  </div>
  <div id="tabs-3">
     

     
                         
  </div>
    
        			</div>
                        </div>
                        </div>
              <div id="content_bot"></div>
    <!-- content ends --> 
    <div style="height:15px; width: 100%"></div>
    <!-- bottom begin -->
     <?php include 'includes/footer.php';?>