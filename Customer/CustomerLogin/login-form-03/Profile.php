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

if (isset($_POST['update'])){

  $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
  $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
  $update_password = mysqli_real_escape_string($conn, md5($_POST['update_password']));

  mysqli_query($conn, "UPDATE `customer` SET name = '$update_name', email = '$update_email', password = $update_password WHERE id = '$id'")
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

    <title>Profile Page</title>
  </head>
  <body style="background-color:#C3E79B;">
  

  <div class="half">
    <div class="bg order-1 order-md-2">
  </div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3><strong>User Profile
              </strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <?php

              $select = mysqli_query($conn, "SELECT * FROM `customer` WHERE  id = '$id'")or die('query failed');
              if(mysqli_num_rows($select)>0){
                $fetch = mysqli_fetch_assoc($select);

              }

              ?>
              <form action="" method="post">
			    <div class="form-group first">
                  <label for="username">Name:</label>
                  <?php echo $fetch['name']; ?>
                  
                </div>
                
                <div class="form-group last mb-3">
                  <label for="password">Email:</label>
                  <?php echo $fetch['email']; ?>
                 
                </div>

                <div class="form-group last mb-3">
                Password:<input type="password"
                value =  <?php echo $fetch['password']; ?>>
                 
                </div>
                

                <span class="ml-auto">
                 
                
                <div class="d-sm-flex mb-5 align-items-center">
                <a href="editprofile.php"class="d-sm-flex mb-5 align-items-center" >Edit Profile</a>
                </div>

               

              </form>
              <a href="profile.php?logout='1'"  class="btn btn-block btn-primary">Logout</a>
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