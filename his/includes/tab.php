<body>
<link rel="stylesheet" href="<?php echo base_url('css/styles.css');?>"  type="text/css" media="all"/>

<div id="bg">

<div id="main">
<!-- header begins -->
<div id="header">
	<div style="height: 40px;">
        <div id="search">
                <form method="get" action="">
                    <fieldset>
                    <input type="text" value="" id="search-text" size="15" />
                    <input type="submit" id="search-submit" value="Search" />
                    </fieldset>
                </form>
        </div>
    </div>
    
	<div id="logo">
    	<a style="font-size:40px">National Health Information System</a>
      	<h2><a href="#"><small>Company Slogan Goes Here</small></a></h2>
    </div>
    <div id="buttons">
      <a href="<?php echo site_url('welcome/index');?>" class="but"  title="">Home</a>
      <a href="<?php echo site_url('welcome/blog');?>" class="but" title="">Data</a>
      <a href="<?php echo site_url('welcome/gallery')?>"  class="but" title="">Counties</a>
      <a href="<?php echo site_url('welcome/about_us')?>"  class="but" title="">Resource</a>
      <a href="<?php echo site_url('welcome/contact_us')?>" class="but" title="">Contact us</a>
     </div>
</div>