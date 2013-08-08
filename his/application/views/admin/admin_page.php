<?php include 'includes/header.php';?>
<link rel="stylesheet" href="<?php echo base_url('css/default.css');?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url('css/inde.css');?>" type="text/css" media="all" />
<script>
    $(function() {
                $("#tabs").tabs({collapsible: true}).addClass('ui-tabs-horizontal ui-helper-clearfix');
		$("#tabs li").removeClass('ui-corner-top').addClass('ui-corner-right');
		
	});
	</script>


</head>
<body>

	<!-- end sidebar -->
	<div id="content">
		<div><img src="<?php echo base_url('images/index1.jpg');?>" alt="" width="740" height="220" /></div>
	
<div class="demo">

<div id="tabs" >
    <ul class="tabnav">
	<li><a href="#tabs-1">C</a></li>
         <li><a href="#tabs-2">ROUTES</a></li>
         <li><a href="#tabs-2"><?php echo anchor('welcome/logout', 'LOGOUT'); ?></a></li>
<!--         <li><a href="#tabs-3"></a></li>
         <li><a href="#tabs-4">BOOKING DETAILS</a></li>-->
     </ul>
    <div id="tabs-1">
		
		
           <div class="boxed">
    <div><?php echo anchor('welcome/redirect/admin_travel_customer','confirmed customers');?></div>
    <div><?php echo anchor('welcome/customer_details', 'canceled bookings'); ?></div>
    <div><?php echo anchor('welcome/booked_routes', 'bookings by routes'); ?></div>
           </div>
    </div>
    
	<div id="tabs-2">
		
		<div><?php echo anchor('welcome/redirect/routes_add', 'Add'); ?></div>
    <div><?php echo anchor('welcome/redirect/routes_edit', 'Edit'); ?></div>
    <div><?php echo anchor('welcome/redirect/routes_delete','Delete') ?></div>
    <div><?php echo anchor('welcome/routes_details','Details') ?></div> 
        </div>
       
	<div id="tabs-3">
		
		 
	
</div>

</div><!-- End demo -->
                                </div>
</div>
                                </div>
      

       
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
	<!-- end content -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<?php include 'includes/footer.php';?>

	 


	

 


 