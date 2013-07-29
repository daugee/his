   
<?php include'includes/header.php';?>

<?php include'includes/tab.php';?>







			
		
                        <?php echo form_open('welcome/validate_credentials');?>
                    <fieldset>
                        
	<legend>login</legend>
        <div style="color:red">
        <?php if(isset ($error)): ?>
<?php echo $error; ?>
<?php endif; ?></div>
                        <strong>username:</strong></br>
                             
                    
                       <?php echo form_input('username',  set_value('username'));?></br> 
                    
                        <strong>password</strong></br>
                   
                       <?php echo form_password('password', '');?></br> 
                  
                        <?php echo form_submit('submit',  'login');?> 
                        <?php echo anchor('welcome/redirect/admin_login',  'create account');?> 
                                       
                
                <?php echo validation_errors('<p class="error">');?> 
                 <?php echo form_close();?>
                    </fieldset>
                          </div>
       
			<div style="clear: both;">&nbsp;</div>
		</div>
	
	<!-- end content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<?php include 'includes/footer.php';?>
	

 


