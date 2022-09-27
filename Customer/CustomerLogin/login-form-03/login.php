<?php
session_start();
include 'connect.php';
$msg = "";

if (isset($_POST['submit'])){ 

  $email = mysqli_real_escape_string($conn , $_POST['email']);
  $password = mysqli_real_escape_string($conn , md5($_POST['password']));

  $select = mysqli_query($conn, "SELECT * FROM `customer` WHERE email = '$email' AND password = '$password'") or die ('query failed');
  if(mysqli_num_rows($select)> 0)
  {
    $row = mysqli_fetch_assoc($select);
    $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
    } else {
      $msg = "Incorrect email or password";
    }
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
    <link rel="stylesheet" href="css/loginstyle.css">

    <title>Login</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('http://3.bp.blogspot.com/-FXxGHxdYb50/VSqK_S9PtXI/AAAAAAAABjs/2LdS6IQy1g4/s1600/P1040387%2B-%2BCopy.JPG');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3>Login to <strong>Zoo Negara
              </strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="" method="post">
                <?php echo $msg; ?>
                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="text" class="form-control" placeholder="Your Email" name="email">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" name="password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">

                
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div>

                <input type="submit" name="submit" value="Log In" class="btn btn-block btn-primary">

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