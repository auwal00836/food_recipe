
<pre>
<?php 
	include"./config/functions.php";
	include"./config/db.php";

	print_r (getAdmin($connection,'admin'));
	print_r (getChef($connection,'chefs','email','sanilawal@gmail.com'));
	print_r (login($connection,'sanilawal@gmail.com','12345','chef'));




 ?>
	
</pre>