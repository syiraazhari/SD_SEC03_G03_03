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

if (isset($_POST['calculate'])){


    $numTicketAdult = $_POST['numTicketAdult'];
$numTicketChild = $_POST['numTicketChild'];

$name = $_POST['name'];



$ticketAdult = 45;
$ticketChild = 18;
$ticketpriceAdult = $numTicketAdult* $ticketAdult;
$ticketpriceChild = $numTicketChild* $ticketChild;
$totalticketPrice = $ticketpriceChild + $ticketpriceAdult;



$sql = "UPDATE `customer` SET totalticketPrice = '$totalticketPrice', numTicketAdult = '$numTicketAdult', numTicketChild = '$numTicketChild' WHERE id = '$id'";

$result = mysqli_query($conn, $sql); 



}


if (isset($_POST['pay'])){

    $totalticketPrice= $_POST['totalticketPrice'];
    $sql = "UPDATE `products` SET price = '$totalticketPrice' WHERE id = 1 ";
    $result = mysqli_query($conn, $sql); 

    header("location: stripe/index.php");
    

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

    <title>     Check Out</title>
  </head>
  <body>
  <body style=background-color:#C3E79B>

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('http://3.bp.blogspot.com/-FXxGHxdYb50/VSqK_S9PtXI/AAAAAAAABjs/2LdS6IQy1g4/s1600/P1040387%2B-%2BCopy.JPG');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3><strong>Checkout Your Ticket
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
                  <label for="name">Name</label>
                  <input type="text" name="name" value ="<?php echo $fetch['name']; ?>" class="form-control">
                </div>
			    <div class="form-group first">
                  <label for="name">No of tickets for Adult</label>
                  <input type="text" name="numTicketAdult" value ="<?php echo $fetch['numTicketAdult']; ?>" class="form-control">
                </div>
                <div class="form-group first">
                  <label for="username">No of tickets for Child</label>
                  <input type="text" name="numTicketChild" value ="<?php echo $fetch['numTicketChild']; ?>" class="form-control">
                </div>

                
                <div class="form-group first">
                <label for="username">Total</label>
                  <input type="text" name="totalticketPrice" value ="<?php echo $fetch['totalticketPrice']; ?>" class="form-control">
                </div>
                   
                </div>
                
                <input type="submit" name ="calculate" value="Calculate" />
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Checkout</button>



        
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" style="text-align:center;">Confirmation</h4>
        <button type="button" name="Checkout"class="close" data-dismiss="modal">&times;</button>
      
      </div>
      <div class="modal-body">

      <?php echo"Name: " .$name ?><br>
      <?php echo"Quantity of Adult Ticket: " .$numTicketAdult?><br>
      <?php echo"Quantity of Child Ticket:  " .$numTicketChild ?><br>
        <?php echo"Total ticket price: " .$totalticketPrice ?>




      </div>
      <div class="modal-footer">
      <form action="index.php">
    <input type="submit" name="pay" value="Pay" />
</form>
      </div>
    </div>

  </div>
</div>

               
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