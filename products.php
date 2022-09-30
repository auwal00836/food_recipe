<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>FOOD RECIPES</h2>
					</div>
				</div>
			</div>
			<div class="row">
				 <?php
                  require_once('config/db.php');
                  $query = mysqli_query($connection, "SELECT * FROM dishes");
                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    ?>                           
				<div class="col-md-3">
					<div class="products">
						<a href="selected_item.php?dish=<?php echo $row["dish_id"]; ?>">
							<img src="images/<?php echo $row["food_picture"]; ?>" alt="" style="width: 250px; height: 200px;">
						</a>
						<a href="selected_item.php">
							<h6><?php echo $row["fname"]; ?></h6>
						</a>
						<p class="price">Price: <del><b>N</b></del> <?php echo $row["price"]; ?></p>
						<a class="view-link shutter" href="selected_item.php?dish=<?php echo $row["dish_id"]; ?>" >
							<i class="fa fa-plus-circle"></i>Check Item</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->
				<?php } ?>
				
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->
