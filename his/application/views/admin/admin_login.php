   
<?php include'includes/header.php';?>

<?php include'includes/tab.php';?>




<div style="text-align: center; padding-top: 100px">
              <?php echo form_open('welcome/validate_credentials');?>
	
		<table style="margin-left: auto; margin-right: auto; border: 0" cellpadding="3" cellspacing="0">
			<tr>
				<td style="padding-right: 15px">
					<img src="<?php echo base_url();?>images/moh_large.png"/>
				</td>
				<td style="padding-left: 15px; padding-top: 75px" valign="top">
					<table border="0" cellpadding="3" cellspacing="0">
                                            <?php if(isset ($error)): ?>
                                            <?php echo $error; ?>
                                            <?php endif; ?>
						<tr>
							<th style="text-align: left">Username</th>
							<td style="text-align: left"><input id="username" type="text" name="username" style="width: 200px"/></td>
						</tr>
						<tr>
							<th style="text-align: left">Password</th>
							<td style="text-align: left"><input type="password" name="password" style="width: 200px" /></td>
						</tr>
						<tr>
							<td></td>
							<td style="text-align: left"><input type="submit" value="Login"/></td>
						</tr>
						<tr>
							<td></td>
							<td style="text-align: left; vertical-align: top"><a style="font-size: 12px" href="forgotPassword.form">Forgot password?</a></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
        <?php echo validation_errors('<p class="error">');?> 
                 <?php echo form_close();?>
	
</div>


			
		
                    
                                       
               
			<div style="clear: both;">&nbsp;</div>
		</div>
	
	<!-- end content -->
      

<script type="text/javascript">
	jQuery(function() {
		jQuery('#username').focus();
	});
</script>

        
	
<!-- end page -->

	

 


