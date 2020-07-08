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

				//table show
				html='';
				$.each(menuObjArray,function(i,v){
					html+=`<tr>
					<td>${j++}</td>
					<td>${v.photo}</td>
					<td>${v.name}</td>
					<td>${v.price}</td>
					<td>
					<button class="btn btn-outline-primary"  >
					<i class="fas fa-info-circle"></i>
					</button>
					<button class="btn btn-outline-warning editMenu" id="edit_student"  data-id="${i}"
					>
					<i class="fas fa-edit"></i>
					</button>
					<button class="btn btn-outline-danger delete" data-id="${i}">
					<i class="fas fa-trash-alt"></i>
					</button>
					</td>
					</tr>`;
				})
				$('#table_data').html(html);
				 // header("location:menulist.php");
			}
		})
	}

		// Delete
	$('#table_data').on('click','.delete',function(){
		var id= $(this).data('id');
		console.log(id);
		var ans = confirm('Are you sure you want to delete')
		if(ans){
			$.post('deletemenu.php',{id:id},function(data){
				getMenulist();

			})

		}
	});
	// Edit

	$('#table_data').on('click','.editMenu',function(){
		var id= $(this).data('id');

		$.get('menulist.json',function(response){
			var menuObjArray=JSON.parse(response)

			var name=menuObjArray[id].name;
			var price=menuObjArray[id].price;

			console.log("Name ="+name);
			console.log("Price ="+price);
			
			$('#edit_name').val(name);
			$('#edit_price').val(price);

			//image
			$('#oldphoto').attr('src',profile);

			$('#edit_id').val(id);
			$('#edit_oldprofile').val(profile);

		});
	});

});