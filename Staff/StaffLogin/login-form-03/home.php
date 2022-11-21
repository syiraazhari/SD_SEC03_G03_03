<?php
session_start();
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zoo Negara</title>
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
        <h1>ZOO NEGARA<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="home.php">Home</a></li>
          <li><a href="About.html">About</a></li>
          <li><a href="MeetOurFamily.html">Meet Our Family</a></li>
          <li><a href="Events.html">Events</a></li>
          <li><a href="things.html">Things To Do</a></li>
          <li><a href="donation.html">Donation History</a></li>
          <li><a href="volunteer.php">Volunteer List</a></li>
          <li><a href="profile.php">Profile</a></li>
          
          
        </ul>
      </nav><!-- .navbar -->
	  
    </div>
  </header><!-- End Header -->

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Welcome to Zoo Negara</h2>
          <p data-aos="fade-up" data-aos-delay="100">Zoo Negara Malaysia is managed by the Malaysian Zoological Society, a non-governmental organization established to create the first local zoo for Malaysians. Zoo Negara was officially opened on 14th November 1963 and has matured into a well-known zoo all around the world.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Book a Ticket</a>
            <a href="https://www.youtube.com/watch?v=7x8qRnYo56g&ab_channel=Manaweblife" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Book a Ticket</h4>
              <p>+03-4108 3422</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Zoo Negara covers 110 acres of land which is situated only 5km from the city of Kuala Lumpur. Over the years, the zoo has transformed itself to an open concept zoo with over 90% of its animals being kept in spacious exhibits with landscape befitting its nature. We are working in making sure that the old zoo concept is changed entirely.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> We have a total of over 5137 specimen from 476 species of mammals, birds, reptiles, amphibians and fish.</li>
                <li><i class="bi bi-check2-all"></i> To be one of the world’s premier zoological park and aquaria dedicated to conservation, recreation, education, training and research of various animal and plant species.</li>
              </ul>



              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=RSWHGcC-6nE&ab_channel=ZooNegaraMalaysia" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-2">

          <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Exhibits</h3>
              <p>
                Zoo Negara comes with many exhibits that will excite visitors and make them love animals even more!
              </p>
            
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-3" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <img src="assets/img/butterfly.jpg" class="img-fluid" alt="">
                  <h4>Butterfly Garden</h4>
                  <p>Butterflies play an important role to the survival of vertebrate and that also includes us!Take a closer look at them and capture the beauty of the butterflies at the Butterfly Garden.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-3" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <img src="assets/img/panda.jpg" class="img-fluid" alt="">
                  <h4>Giant Panda Conservation Centre</h4>
                  <p>See the very first Giant Pandas in Malaysia and watch how these bamboo eaters spend their time in enclosure.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-3" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <img src="assets/img/snake.jpg" class="img-fluid" alt="">
                  <h4>Reptile House</h4>
                  <p>The most extensive reptile collection in South East Asia. Get up close with our King Cobras,Crocodiles and many more.</p>
                </div>
              </div><!-- End Icon Box -->
			    <div class="col-xl-3" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <img src="assets/img/bear.jpg" class="img-fluid" alt="">
                  <h4>Bear Complex</h4>
                  <p>Out of 8 species of bears in the world, you get to see 3 species of bears: Asiatic Black Bear, Brown Bear and Malayan Sun Bear without trotting around the world to see them.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="5137" data-purecounter-duration="1" class="purecounter"></span>
              <p>Animals</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="121" data-purecounter-duration="1" class="purecounter"></span>
              <p>Mammals</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="102" data-purecounter-duration="1" class="purecounter"></span>
              <p>Reptiles</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="73" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          
          <p>Meet Our <span>Family</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Mammals</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Reptiles</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Fish</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Birds</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>Animal Classification</p>
              <h3>Mammals</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/tiger.jpg" class="glightbox"><img src="assets/img/menu/tiger.jpg" class="menu-img img-fluid" alt=""></a>
				      <h4>Tigers</h4>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/lion.jpg" class="glightbox"><img src="assets/img/menu/lion.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Lions</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/elephants.jpg" class="glightbox"><img src="assets/img/menu/elephants.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Elephants</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/bear.jpg" class="glightbox"><img src="assets/img/menu/bear.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Bears</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/panda.jpg" class="glightbox"><img src="assets/img/menu/panda.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Pandas</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/orangutsn.jpg" class="glightbox"><img src="assets/img/menu/orangutan.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Apes</h4>

              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>Animal Classification</p>
              <h3>Reptiles</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/saltwatercroc.jpg" class="glightbox"><img src="assets/img/menu/saltwatercroc.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Salt Water Crocodile</h4>

                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/africandwarfcroc.jpg" class="glightbox"><img src="assets/img/menu/africandwarfcroc.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>African Dwarf Crocodile</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/falsegharial.jpg" class="glightbox"><img src="assets/img/menu/falsegharial.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>False Gharial</h4>
 
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/tortoise.jpg" class="glightbox"><img src="assets/img/menu/tortoise.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Aldabran Tortoise</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/python.jpg" class="glightbox"><img src="assets/img/menu/python.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Reticulated Pythons</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/anaconda.jpg" class="glightbox"><img src="assets/img/menu/anaconda.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Green Anaconda</h4>

              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>Animal Classification</p>
              <h3>Fish</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/arowana.jpg" class="glightbox"><img src="assets/img/menu/arowana.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Arowana</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/arapaima.jpg" class="glightbox"><img src="assets/img/menu/arapaima.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Arapaima Gigas</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/redtail.jpg" class="glightbox"><img src="assets/img/menu/redtail.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Asian Red-Tailed Catfish</h4>
    
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/tinfoilbarb.jpeg" class="glightbox"><img src="assets/img/menu/tinfoilbarb.jpeg" class="menu-img img-fluid" alt=""></a>
                <h4>Tinfoil Barb</h4>

                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/pangasius.jpg" class="glightbox"><img src="assets/img/menu/pangasius.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Pangasius Catfish</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/borneosucker.jpg" class="glightbox"><img src="assets/img/menu/borneosucker.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Borneo Sucker</h4>

              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>Animal Classification</p>
              <h3>Birds</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/wrinkled.jfif" class="glightbox"><img src="assets/img/menu/wrinkled.jfif" class="menu-img img-fluid" alt=""></a>
                <h4>Wrinkled Hornbill</h4>

        
              
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/stork.jpg" class="glightbox"><img src="assets/img/menu/stork.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Stork</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ibis.jpg" class="glightbox"><img src="assets/img/menu/ibis.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Ibis</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/egret.jfif" class="glightbox"><img src="assets/img/menu/egret.jfif" class="menu-img img-fluid" alt=""></a>
                <h4>Egret</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/swan.jpg" class="glightbox"><img src="assets/img/menu/swan.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Swan</h4>

              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/pelican.jfif" class="glightbox"><img src="assets/img/menu/pelican.jfif" class="menu-img img-fluid" alt=""></a>
                <h4>Pelican</h4>

              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Google Reviews</h2>
          <p>What Are They <span>Saying About Us</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        We love this zoo! It is clean and well cared for, the animals seem quite content, good options are great! Definitely must see the panda exhibit! They are just so cute! The Reptile house is also so cool! See if you can spot the animal in each enclosure!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Krista Townsend</h3>
                      <h4>Local Guide</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Very neat and clean, The National Zoo of Malaysia. For RM 50 for a student or international worker with a valid permit, one can see the seagull show, the Panda Center and all the other animals the Zoo has to offer. One must go at 9 am in the morning and spend the whole day there in order to take the maximum advantage of one's money.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Mirasa Shahabuddin Junejo</h3>
                      <h4>Local Guide</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Very beautiful experience there, had fun with my kid. Place was clean and beautiful. Had a great time walking there, place was a little hot in the afternoon, but not too bad, bring an umbrella of the day is too hot. Animals were well taken care of, the latest attraction was the reptile house, we had the chance to hold snake and tortoises. Beautiful new addition to the zoo. Overall very nice experience. We Used klook  for discount for entrance fee.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>S Darma Raj</h3>
                      <h4>Local Guide</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        A great place for family outing. Animals are well kept. Place is clean and easy to move around. Panda conservation is a nice attraction. Don't missed the animal show. Check their schedule. Family package is recommended for small family and savings.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Max Pang</h3>
                      <h4>Local Guide</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/testimonials.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>


    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Have <span>Events </span> In Our Zoo</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
              <h3>Birthdays</h3>
              
              <p class="description">
                Have you ever wondered how you could come up with a unique yet memorable birthday party for your child? Try having it at Zoo Negara and we will take care of your every need.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-2.jpg)">
              <h3>Family Days</h3>
              <p class="description">
               The zoo is a beautiful scenic location to have a family day for corporate companies. Besides having a variety on entertaining activities to choose from, we even have the facilities to accommodate over 3000 people at one time!
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
              <h3>Dining And Special Functions</h3>
              
              <p class="description">
               Have special functions in the Kancil Hall which is may be used for a variety of events.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

   
    

   

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="mb-3">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="955" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=zoo%20negara&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:955px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:955px;}</style></div></div>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Jalan Taman Zooview, Taman Zooview, 68000 Ampang, Selangor</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>customerservice@zoonegaramalaysia.my</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+603-4108 3422</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sun:</strong> 9AM - 5PM;
                  
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

       
        <!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Jalan Taman Zooview, Taman Zooview, <br>
               68000 Ampang, Selangor<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +603-4108 3422<br>
              <strong>Email:</strong> customerservice@zoonegaramalaysia.my<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sun: 9AM</strong> - 5PM<br>
            
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Zoo Negara</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

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