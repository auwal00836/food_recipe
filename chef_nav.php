<?php
include 'config/db.php';
$query = mysqli_query($connection, "SELECT * FROM chefs WHERE chef_id='{$_SESSION['chef_id']}'");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      $pic=$row["picture"];
    

    }
?>    
<nav class="navbar navbar-default" style="background-color: #2F4F4F;">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->

		   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
		      	<ul class="nav navbar-nav nav-main">
		        	<li class=""><a href="chef_page.php" style=" color: white;">HOME</a></li>
		        	
					<li><a href="chef_store.php" style=" color: white ;">Recipes</a></li>
					<li><a href="add_dishes.php" style=" color: white ;">Add Dishes</a></li>
					<li><a href="chef_profile.php" style=" color: white ;">Profile</a></li>
					<li><a href="logout.php" style=" color: white ;">Logout</a></li>
					 <li class="nav navbar-nav nav-main">
            <img src="<?php echo "images/".$pic ?>" width="50" height="50" style="font-size: 20px; border-radius: 50%; border-color: green;">
          </li>
					

					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->