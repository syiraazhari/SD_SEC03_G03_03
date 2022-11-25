<?php
session_start();
include 'connect.php';
$msg = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    
    

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Enable verbose debug output
        $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;

        //Send using SMTP
        $mail->isSMTP();

        //Set the SMTP server to send through
        $mail->Host = 'smtp.gmail.com';

        //Enable SMTP authentication
        $mail->SMTPAuth = true;

        //SMTP username
        $mail->Username = 'group03sd@gmail.com';

        //SMTP password
        $mail->Password = 'rdlxgypsqdxsfrrf';

        //Enable TLS encryption;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('group03sd@gmail.com', 'Zoo Negara');

        //Add a recipient
        $mail->addAddress($email);

        //Set email format to HTML
        $mail->isHTML(true);

        $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

        $mail->Subject = 'Password Reset';
        $mail->Body    = '<p>Your password reset link is: <b style="font-size: 10px;"> http://localhost/master%20project%20sd/Staff/StaffLogin/login-form-03/forgot.php</b></p>';
        //$mail->Body    = '<p>Your password reset link is: <b style="font-size: 10px;"> http://18.222.181.248/dashboard/master%20project%20sd/Staff/StaffLogin/login-form-03/forgot.php</b></p>';
        $mail->send();
        // echo 'Message has been sent';


        $select = mysqli_query($conn, "SELECT * FROM `staff` WHERE email = '$email'") or die ('query failed');
        if(mysqli_num_rows($select)> 0)
         {
            $row = mysqli_fetch_assoc($select);
           $_SESSION['user_id'] = $row['id'];
             
                header("location:send.php");
               
          } else {
            $msg = "Incorrect email";
           }
        
        

    }catch (Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
              
              <h3><strong>Reset Password
              </strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              
              <form action="" method="post">
              <?php echo $msg; ?>
			    <div class="form-group first">
                  
                <div class="form-group last mb-3">
                  <label for="email">Enter Recovery Email</label>
                  <input type="text" class="form-input" name="email" id="email" placeholder="Your Email"/>
                </div>
                
                

              
                <input type="submit" name ="submit" value="Submit" class="btn btn-block btn-primary">
            

              
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