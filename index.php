<?php
require 'header.php';
?>

<!-- Add New Student -->
<div class="container" id="addMenu">
	<div class="mt-5">
		<h1 class="text-center mb-5">Add New Menu</h1>
	</div>

	<form class="container" method="POST" action="menu.php" enctype="multipart/form-data"> <!-- because of include file -->
		<div class="form-group row">
			<label for="profile" class="col-sm-2 col-form-label">Photo</label>
			<div class="col-sm-10">
				<input type="file" class="form-control-file" id="photo" name="photo">
			</div>
		</div>
		<div class="form-group row">
			<label for="name" class="col-sm-2 col-form-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-sm-2 col-form-label">Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="price" name="price">
			</div>
		</div>
		<div class="form-group row">
			<div class="offset-2 col-md-10">
				<button type="submit" class="btn btn-outline-primary px-5">Save</button>
			</div>
		</div>
	</form>
</div>


<!-- For Menu -->
<div class="container">
	<div class="row mt-5">
		<div class="col-sm-12 col-md-6 shadow">
			<div class="row">
				<ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link bg-danger text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sushi</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link text-danger" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Bento Boxes</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link text-danger" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ramen</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link text-danger" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" 		aria-controls="pills-contact" aria-selected="false">Appetizers</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link text-danger" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" 	aria-controls="pills-contact" aria-selected="false">Rice</a>
					</li>
				</ul>

			</div>

			<div class="row" id="showCart">

			</div>
			
		</div>
		<!-- payment -->
		<div class="col-sm-12 col-md-6 shadow">
		</div>
	</div>
</div>

<?php
require 'footer.php';
?>

