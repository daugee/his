<?php include 'includes/header.php';?>
<?php echo form_open('welcome/create_member');?>

                  <div class="txt_body">
                           <fieldset>
	<legend>General info</legend>

        <strong> name</strong></br>
                       <?php echo form_input('name',  set_value('name',''));?> </br>
                  
        <strong>email:</strong></br>
                   
                       <?php echo form_input('email', set_value('email',''));?> </br>
          
        <strong>Phone:</strong></br>
                        <?php echo form_input('phone_number','');?></br>
                    
    </fieldset>
    <fieldset>
        <legend>login info</legend>
        
          <strong>username:</strong></br>
                       <?php echo form_input('username',  set_value('username',''));?></br>
          <strong>password:</strong></br>
                       <?php echo form_password('password',set_value('password',''));?> </br>
          <strong>confirm password:</strong></br>
                       <?php echo form_password('password2',set_value('password',''));?></br>
                  
                       <?php echo form_submit('submit',  'Create account');?> </br>
                    
              <?php echo validation_errors('<p class="error">');?> 
              <?php echo form_close();?>
    </fieldset> 
</div>



        

       
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
	<!-- end content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<?php include 'includes/footer.php';?>

	

