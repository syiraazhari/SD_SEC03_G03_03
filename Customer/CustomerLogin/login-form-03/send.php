<?php
session_start();
include 'connect.php';
$msg = "";
$id = $_SESSION['user_id'];
if(!isset($_SESSION['user_id'])){
  $_SESSION['msg'] = "You must login first";
  header("location: login.php");
}
if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['id']);
  header("location: login.php");
}

if (isset($_POST['save'])){

  

  $update_password = mysqli_real_escape_string($conn, md5($_POST['update_password']));

  mysqli_query($conn, "UPDATE `customer` SET name = '$update_name', email = '$update_email', password = '$update_password' WHERE id = '$id'")
  or die("Query FAILED");


}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Forgot Password Page</title>
  </head>
  <body style=background-color:#C3E79B>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('http://3.bp.blogspot.com/-FXxGHxdYb50/VSqK_S9PtXI/AAAAAAAABjs/2LdS6IQy1g4/s1600/P1040387%2B-%2BCopy.JPG');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3><strong>Verification Link Sent!
              </strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <?php

              $select = mysqli_query($conn, "SELECT * FROM `customer` WHERE  id = '$id'")or die('query failed');
              if(mysqli_num_rows($select)>0){
                $fetch = mysqli_fetch_assoc($select);

              }

              ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>