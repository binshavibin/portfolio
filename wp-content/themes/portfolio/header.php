<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.min.css';?>" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="card">
<div class="card-header">
	<div class="row">
		<div class="col-md-2">
		<div class="logo">
			<img src="<?php echo get_template_directory_uri().'/images/logo.jpeg';?>" style="width:100%">
		</div>
	
	</div>
	<div class="col-md-10">
			<?php   dynamic_sidebar('header-advt-2'); ?>
	</div>
	</div>
	<nav class="nav">
	<?php 
		echo getNavMenu();
	?>
  
	</nav>


</div>
</div>
<div class="card-body">
<div class="container">
<div class="container-fluid">


</div>
