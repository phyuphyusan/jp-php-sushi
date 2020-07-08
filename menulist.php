<?php
require 'header.php';
?>
<!-- Add New Student -->
<div class="container" id="addMenu">
	<div class="mt-5">
		<h1 class="text-center mb-5">Add New Menu</h1>
	</div>

	<form method="POST" action="menu.php" enctype="multipart/form-data"> <!-- because of include file -->
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
 <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="table_data">
  </tbody>
</table>