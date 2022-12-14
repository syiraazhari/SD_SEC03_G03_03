<?php

include 'connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn , $_POST['email']);
    $password = mysqli_real_escape_string($conn ,md5($_POST['password']));
    $name = mysqli_real_escape_string($conn , $_POST['name']);
    

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
        $mail->addAddress($email, $name);

        //Set email format to HTML
        $mail->isHTML(true);

        $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

        $mail->Subject = 'Email verification';
        $mail->Body    = '<p>Your verification link is: <b style="font-size: 10px;"> http://localhost/master%20project%20sd/Customer/CustomerLogin/login-form-03/login.php</b></p>';
           // $mail->Body    = '<p>Your verification link is: <b style="font-size: 10px;"> http://18.222.181.248/dashboard/master%20project%20sd/Customer/CustomerLogin/login-form-03/login.php</b></p>';

        $mail->send();
        // echo 'Message has been sent';


        $sql = "INSERT INTO customer (name, password, email) VALUES ('$name', '$password', '$email')";
        
        if ($conn->query($sql)===true){
            header("location:send.php");
        } else{
            die(mysqli_error($conn));
        }

    }catch (Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


 
	
	
			

 
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style=background-color:#C3E79B>

    <div class="main">

    <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('http://3.bp.blogspot.com/-FXxGHxdYb50/VSqK_S9PtXI/AAAAAAAABjs/2LdS6IQy1g4/s1600/P1040387%2B-%2BCopy.JPG');"></div>
    <div class="contents order-2 order-md-1">

</div>


        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit"  class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href=C:\Users\HP\Desktop\projeksd\Guest\GuestLogin\login-form-03\loginindex.html class="loginhere-link">Login here</a>

                    </p>
                    </div>
            </div>

        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>