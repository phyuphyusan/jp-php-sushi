<?php
require 'header.php';
?>

<!-- For Menu -->
<div class="container">
	<div class="row mt-5">
		<div class="col-sm-12 col-md-6 shadow">
			<h1></h1>
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
		<div class="offset-1 col-sm-12 col-md-5 shadow">
			<h4 class="text-center pay mt-4">Payment</h4>
				<div class="table-responsive">
					<table class="table table-bordered mt-1">
					  	<thead class="table-active text-dark">
						   	<tr>
						      <th>Name</th>
						      <th>Qty</th>
						      <th>Price</th>
						      <th>Remove</th>
						    </tr>
					  	</thead>
 					 	<tbody>
	   						<tr>
	      						<th class="ws">
	      							WAKASA Sushi
	      							<p class="k">4800 KS</p>
	      						</th>
							    <td>
							    	<span class="badge badge-dark text-center p-2">+</span> 1 <span class="badge badge-dark p-2"> - </span>
							    </td>
							    <td>4800</td>
							    <td class="pl-4"><span class="badge badge-danger p-2"> X </span></td>
							</tr>
		   					<tr>
			     				<th>Paid</th>
								<td colspan="3"><input class="form-control" type="text" name="paid" placeholder="Paid Money"></td>   
							</tr>
							<tr>
							     <th>Charges</th>
							     <td colspan="3"><input class="form-control bg-light" type="text" name="paid" placeholder="Charges Money"></td>
							</tr>
							<tr>
							    <th colspan="4"> <button class="btn btn-outline-light d-block w-100 text-dark">Check Out</button></th>
							</tr>
	  					</tbody>
					</table>
					
				</div>			
	</div>


		
	</div>
</div>

<?php
require 'footer.php';
?>

