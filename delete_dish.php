<?php 
 session_start();
 include'config/db.php';

$id=$_GET['dish_id'];

$sql=mysqli_query($connection, "DELETE FROM dishes  WHERE dish_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='chef_dishes_list.php'</script>";

?>