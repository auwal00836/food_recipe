<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "recipe");

$error = array("message" => "Method Not Allowed");

if(isset($_POST['dName'])){

  $data = array();
  $query = "SELECT dish_id,fname FROM dishes WHERE fname LIKE '%{$_POST["dName"]}%'";
  $result = mysqli_query($connect, $query);

  while($row = mysqli_fetch_assoc($result)){
    array_push($data, $row);
  }
  echo json_encode($data);
}
else{
  echo json_encode($error);
}
?>
