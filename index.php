<?php include 'partials/header.php'; ?>
	<div class="container">
		<div class="row">
		    <div class="col">
		    	<h1><?php echo $heading; ?></h1>
		    </div>
	  	</div>
	  	<div class="row">
	  		<div class="col-3">
	  			<?php include 'partials/menu.php'; ?>
	  		</div>
	  		<div class="col-9">
	  			<?php echo $content; ?>
	  		</div>
	  	</div>
	</div>
<?php include 'partials/footer.php'; ?>