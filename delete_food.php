<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM dishes  WHERE dish_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='manage_manuals.php'</script>";

?>