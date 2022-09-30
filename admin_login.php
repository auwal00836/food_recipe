<?php

include 'config/db.php';
$msg="";


if(isset($_POST['login'])){

$_SESSION['username'] = $_POST['username'];
$password = $_POST['password'];


if($_SESSION['username']&&$password){
  
  
  
 
  $sql= mysqli_query($connection,"SELECT * FROM users WHERE username='".$_SESSION['username']."'");
  
  $numrows=(mysqli_num_rows($sql));
  
  if($numrows !=0)
  {
    
    while($row=mysqli_fetch_array($sql))
    {
      
    $dbuser=$row["username"];
    $dbpass=$row["password"];
      
    }
    
    if($_SESSION['username']==$dbuser)
    {
      
      if($password==$dbpass)
      {

    /*    header("location: admin_dashboard.php");*/
       echo "<script> window.location='admin_dashboard.php'</script>";
        
      }else{
        
        $msg="<p class='alert alert-danger text-center animated shake'>Incorrect password</p>";
      
      }
      
      
    }else{
      
      $msg="<p class='alert alert-danger text-center animated shake'>Incorrect username </p>";
      
      }
  }else {

      $msg="<p class='alert alert-danger text-center animated shake'>Incorrect username or password</p>"; 
      
    
  }
  
  
}
}

?>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">Admins Login</h4>
		      		</div>
			      	<div class="modal-body clearfix">

			      		<form action="" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Login as Admin</h3>
								<div class="form_content clearfix">
									<p class="text">
									<label for="email">Username</label>
										<span><input placeholder="Username"  onkeypress="return /[a-z]/i.test(event.key)"  type="text" id="email" name="username" value="" class="account_input"></span>
									</p>
									<p class="text">
									<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="password" value="" class="account_input"></span>
									</p>
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Forgot your password?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success" type="submit" name="login">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>	
	</section>  <!-- End of /Section -->
	
