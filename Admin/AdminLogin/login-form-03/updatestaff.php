<?php
include 'connect.php';

$id=$_GET['updateid'];

    $sql="select * from staff where id = $id";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_assoc($result);
        $name=$row ['name'];
        $username = $row['username'];
        $password = $row['password'];
        $email = $row ['email'];


if (isset($_POST['submit']))
{
    $name=$_POST ['name'];
    $username =$_POST ['username'];
    $password =$_POST ['password'];
    $email = $_POST ['email'];

$sql = "update staff set id = $id, name='$name', username = '$username' , password = '$password' , email = '$email' where id=$id";
$result = mysqli_query ($conn, $sql);

 if($result)
 {

    echo " Data updated successfully.";
    header('location:Staff.php');
 }

 else {

    die(mysqli_error($conn));
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
    <link rel="stylesheet" href="css/style.css">

    <title> Update Staff Page</title>
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
              <h3><strong>Update Staff
              </strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
           
              <form action="#" method="post">

              <div class="form-group first">
                  <label for="name">Username</label>
                  <input type="text" name="username" class="form-control" value=<?php echo $username; ?>>
                </div>

			    <div class="form-group first">
                  <label for="name">Name</label>
                  <input type="text" name="name"class="form-control" value=<?php echo $name; ?>>
                </div>
                <div class="form-group first">
                  <label for="username">Password</label>
                  <input type="password" name="password" class="form-control" value=<?php echo $password; ?>>
                </div>
                <div class="form-group last mb-3">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" value=<?php echo $email; ?>>
                </div>
                
                


                <input type="submit" name ="submit" value="Update" class="btn btn-block btn-primary">

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