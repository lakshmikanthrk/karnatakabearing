<?php include 'header.php'?>

<div class="breadcrumb">
	<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>Bearing Assemblies</h2>
		</div>
		<div class="col-md-4">
			<ul>
				<li>Home |</li>
				<li>Bearing Assemblies</li>
			</ul>
		</div>
	</div>
</div>
	</div>


<div class="ballbearing">
	<div class="container">
		<div class="row">
			<?php for ($i=0; $i < 12; $i++) { ?>
		<div class="col-md-3">
			<div class="bearing text-center">
			<img src="<?=base_url()?>assets/images/ball bearing/ball1.webp">
			<h5>Bearing Name</h5>
			<p><i class="fa fa-inr"></i> 150 /-</p>
		</div>
	</div>
<?php } ?>
</div>
	</div>
</div>
<?php include 'footer.php'?>