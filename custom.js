$(document).ready(function(){
	getMenulist();

	function getMenulist(){
		$.get('menulist.json',function(response){
			if(response){
				console.log(typeof(response));
				//string
				var menuObjArray =JSON.parse(response);

				//obj
				// var studentObjArray = response;

				var menuObjArray = JSON.parse(response);
				var html=''; var j=1;
				$.each(menuObjArray,function(i,v){
					var name = v.name;
					var photo=v.photo;
					var price =v.price;
					html+=`<div class="col-md-4">
					<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="sushi-tab">
					<div class="card-deck" >
					<div class="card">
					<img src="${photo}" class="card-img-top" alt="sushi">
					<div class="card-body">
					<h6 class="card-title text-center">${name}</h6>
					${price}
					</div>
					<div class="card-footer">
					<button class="btn btn-outline-danger d-block w-100 ">Add To Cart</button>
					</div>
					</div>

					</div>
					</div>
					</div>
					
					</div>
					`;
				})
				$('#showCart').html(html);
			}
		})
	}

	$('tbody').on('click','.delete',function(){
		var id= $(this).data('id');
		console.log(id);
	})

});