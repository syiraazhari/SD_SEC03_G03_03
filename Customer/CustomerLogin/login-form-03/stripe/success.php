<?php
// Include configuration file 
session_start();
require_once 'config.php';
include 'dbConnect.php';

$id = $_SESSION['user_id'];

if(!isset($_SESSION['user_id'])){
  echo "ID didnt detected";
}



$sql = "UPDATE `customer` SET paymentStatus= 1  WHERE id = '$id'";
$result = mysqli_query($db_conn,$sql);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Receipt</title>
<meta charset="utf-8">
<!-- Stylesheet file -->
<link href="css/style.css" rel="stylesheet">
</head>
<body class="App">
	<?php
     $select = mysqli_query($db_conn, "SELECT * FROM `customer` WHERE  id = '$id'")or die('query failed');
     if(mysqli_num_rows($select)>0){
       $fetch = mysqli_fetch_assoc($select);

     }?>

	<div class="wrapper">
    <h3>Payment Successful</h3>
			<h4>Receipt</h4>
			<p><b>Ticket Number:</b> <?php echo  $fetch['id']; ?></p>
			<p><b>Name:</b> <?php echo  $fetch['name']; ?></p>
			<p><b>Number of Adult Ticket:</b> <?php echo  $fetch['numTicketAdult']; ?></p>
			<p><b>Number of Child Ticket:</b> <?php echo  $fetch['numTicketChild']; ?></p>
			<p><b>Total:</b> <?php echo  $fetch['totalticketPrice']; ?></p>
				
		
		
		<a href="index.php" class="btn-link">Back to Product Page</a>
        <a href="http://localhost//masTER%20PROJECT%20SD/Customer/CustomerLogin/login-form-03/home.php" class="btn-link">Back to Home</a>
			<!--<a href="http://18.222.181.248/dashboard//masTER%20PROJECT%20SD/Customer/CustomerLogin/login-form-03/home.php" class="btn-link">Back to Home</a>-->
	</div>
    
</body>


</html>