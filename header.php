<section id="top" style="background-color: #2F4F4F;">
		<div class="container ">
			<div class="row">
				<div class="col-md-4">
					<p class="contact-action"><i class="fa fa-phone-square"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>+234-80xxxxxxxxx</strong></p>
				</div>
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<li>
							<a data-toggle="modal" data-target="#myModal1" href="#">
							<i class="fa fa-user"></i>
								Admin Login
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="dropdown" style="margin:0;">
					    <div id="myDropdown" class="dropdown-content">
							<div class="search-box">
								<div class="input-group">
					    			<input placeholder="Search Here" type="text" class="form-control" id="myInput" style="">
					    			 <span id="items"></span>
					   		 	</div><!-- /.input-group -->
							</div><!-- /.search-box -->
						</div>
					</div>		
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->
		<!-- <script>
	    function capitalize(str){
	        const arr = str.split(" ");
	        for (var i = 0; i < arr.length; i++) {
	            arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1);
	        }
	        return arr.join(" ");
	    }
		$(document).ready(function(){

	    $('#myInput').keyup(function(){
	        let html = '';
	        let search = $(this).val()
	        if (search !== "" && search !== " ") {
	            $.ajax({
	                url:"search-api.php",
	                method:"POST",
	                data:{dName: $(this).val().trim()},
	                dataType:"json",
	                success:function(data){
	                    let DATA = []
	                    let html = '';
	                    for(dish of data){
	                        DATA.push(dish.fname.toLowerCase())
	                    }
	                    for(let i=0; i < DATA.length; i++){
	                        if(DATA[i].includes(search.toLowerCase())){
	                             html += `<a href=''>${capitalize(DATA[i])}</a>`;
	                             $('#items').html(html)
	                        }
	                    }
	                }
	            });
	        }
	        if(search === ""){
	            $('#items').html('')
	        }
		    })

		})
		</script> -->
