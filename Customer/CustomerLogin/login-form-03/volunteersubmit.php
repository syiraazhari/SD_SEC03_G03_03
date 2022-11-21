<?php
session_start();
include 'connect.php';

if (isset($_POST['submitt'])){

  $name = $_POST['name'];
$age = $_POST['age'];
$ic = $_POST['ic'];


$sql = "insert into volunteer (name, age, ic)
          values('$name', '$age' , '$ic')";

  $result = mysqli_query($conn, $sql);

  if ($result)
  {
     
      alert("You application has been submitted!");

  }
  else 
  {
      die(mysqli_error($conn));

  }

}
?>