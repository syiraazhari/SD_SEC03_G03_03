<?php
session_start();
include 'connect.php';
$msg = "";



if (isset($_POST['save'])){

  

  $update_password = mysqli_real_escape_string($conn, ($_POST['update_password']));

  mysqli_query($conn, "UPDATE `staff` SET password = '$update_password' WHERE id = '$id'")
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
              <?php echo $msg; ?>
              <h3><strong>Reset Password
              </strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              
              <form action="" method="post">
			    <div class="form-group first">
                  
                <div class="form-group last mb-3">
                  <label for="password">Set New Password</label>
                  <input type="password" name="update_password" class="form-control">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Confirm New Password</label>
                  <input type="password" name="update_password" class="form-control">
                </div>
                

              </form>
              <form action="login.php" method="post">
                <input type="submit" name ="save" value="Save" class="btn btn-block btn-primary">
            </form>

              
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