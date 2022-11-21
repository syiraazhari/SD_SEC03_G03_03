
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Zoo Negara</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.1.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Zoo Negara<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="#hero">Home</a></li>
          <li><a href="About.html">About</a></li>
          <li><a href="MeetOurFamily.html">Meet Our Family</a></li>
          <li><a href="Events.html">Events</a></li>
          <li><a href="things.html">Things To Do</a></li>
          <li><a href="plan.html">Donation History</a></li>
          <li><a href="volunteer.php">Volunteer List</a></li>
          
          <li><a href="profile.php">Profile</a></li>
          
          
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Volunteer<span>List</span></p>
        </div>

    <table class = "table">
    <thead>

    <tr>
        <th scope="col">ID</TH>
        <th scope="col">Name</TH>
        <th scope="col">Age</TH>
        <th scope="col">IC</TH>
      

</tr>
</thead>
<tbody>

<?php
session_start();
include 'connect.php';
$sql = "select * from volunteer";
$result = mysqli_query($conn, $sql);

if($result){

while($row=mysqli_fetch_assoc($result))
{

    $id=$row['id'];
    $name=$row['name'];
    $age=$row['age'];
    $ic=$row['ic'];
    

    echo '<tr>

    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
   
    <td>'.$age.'</td>
    <td>'.$ic.'</td>
    

    
    </tr>';
    
}
}
?>
    </section><!-- End About Section -->
    

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>