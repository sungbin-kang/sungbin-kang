<?php 
if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form submission</title>
</head>

<body>
  <div id="contact-form">
  <form action="https://sungbin-kang.github.io/" method="post">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    Email: <input type="text" name="email"><br>
    Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</body>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>MeetMe - Resume Website Template</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <!-- Fonts -->
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css">
  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
  <!-- Menu CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
  <!-- Slider CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/slide-style.css">
  <!-- Nivo Lightbox -->
  <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">
  <!-- Animate -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

</head>

<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
            aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
            <li class="nav-item active">
              <a class="nav-link" href="#hero-area">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">
                About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">
                What I do
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#resume">
                Resume
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolios">
                Work
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="onepage-nev mobile-menu">
        <li>
          <a href="#home">Home</a>
        </li>
        <li>
          <a href="#about">about</a>
        </li>
        <li>
          <a href="#services">What I do</a>
        </li>
        <li>
          <a href="#resume">resume</a>
        </li>
        <li>
          <a href="#portfolio">Work</a>
        </li>
        <li>
          <a href="#contact">Contact</a>
        </li>
      </ul>
      <!-- Mobile Menu End -->
    </nav>
    <!-- Navbar End -->

    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="contents">
              <h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">Hi This is</h5>
              <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">Sungbin Kang</h2>
              <p class="script-font wow fadeInUp" data-wow-delay="0.6s">CS Graduate Student</p>
              <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                <!-- <li>
                    <a class="facebook" href="https://www.facebook.com/sungbink1"><i class="icon-social-facebook"></i></a>
                  </li>
                  <li>
                    <a class="instagram" href="https://www.instagram.com/bean___kang/"><i class="icon-social-instagram"></i></a>
                  </li> -->
                <li>
                  <a class="linkedin" href="https://www.linkedin.com/in/sungbin-kang-6a25a5136/"><i
                      class="icon-social-linkedin"></i></a>
                </li>
                <li>
                  <a class="github" href="https://github.com/sungbin-kang"><i class="icon-social-github"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Area End -->

  </header>
  <!-- Header Area wrapper End -->

  <!-- About Section Start -->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
            <img class="img-fluid" src="assets/img/about/about-1.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
            <h3>Hi Guys!</h3>
            <p>
              Student at Graduate Certificate in Software Design & Development(GCSDD) in University of Washington
              Bothell that is focused on Object-oriented programming, data structures and algorithms in C++, Design and
              testing of software systems, Systems programming, Core software engineering and cybersecurity concepts.
            </p>
            <p>
              Experience in object-oriented programmings(C++, Java & Python); developing, testing and debugging code;
              designing interfaces; and administering systems and networks.
            </p>
            <p>
              Three years of experience as a software test engineer; analyzing, executing, and validating test cases,
              participating in product requirements.
            </p>
            <p>
              Quickly learn and master new technologies; collaborative and communicative in both team and self-directed
              settings.
            </p>
            <div class="about-profile">
              <ul class="admin-profile">
                <li><span class="pro-title"> Name </span> <span class="pro-detail">Sungbin Kang</span></li>
                <li><span class="pro-title"> Age </span> <span class="pro-detail">27 Years</span></li>
                <li><span class="pro-title"> Experience </span> <span class="pro-detail">2 Years</span></li>
                <li><span class="pro-title"> Country </span> <span class="pro-detail">USA</span></li>
                <li><span class="pro-title"> Location </span> <span class="pro-detail">Seattle, WA</span></li>
                <li><span class="pro-title"> e-mail </span> <span class="pro-detail">sungbin9353@gmail.com</span></li>
                <li><span class="pro-title"> Phone </span> <span class="pro-detail">(253) 561-3186</span></li>
                <!-- <li><span class="pro-title"> Freelance </span> <span class="pro-detail">Available</span></li> -->
              </ul>
            </div>
            <!-- <a href="#" class="btn btn-common"><i class="icon-paper-clip"></i> Download Resume</a> -->
            <a href="https://github.com/sungbin-kang/sungbin-kang.github.io/raw/main/assets/resume/Resume_Sungbin-Kang.pdf"
              download="Resume_Sungbin-Kang.pdf" target="_blank" class="btn btn-common"><i class="icon-paper-clip"></i>
              Download Resume</a>
            <a href="#contact" class="btn btn-danger"><i class="icon-speech"></i> Contact Me</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Services Section Start -->
  <section id="services" class="services section-padding">
    <h2 class="section-title wow flipInX" data-wow-delay="0.4s">What I do</h2>
    <div class="container">
      <div class="row">
        <!-- Services item -->
        <div class="col-md-6 col-lg-3 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
            <div class="icon">
              <img src="assets/img/languages/cplusplus_icon.png" alt="" />
            </div>
            <div class="services-content">
              <h3><a href="#">C++</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-3 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
            <div class="icon">
              <img src="assets/img/languages/java_icon.png" alt="" />
            </div>
            <div class="services-content">
              <h3><a href="#">Java</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-3 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.9s">
            <div class="icon">
              <img src="assets/img/languages/python_icon.png" alt="" />
            </div>
            <div class="services-content">
              <h3><a href="#">Python</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
            </div>
          </div>
        </div>
        <!-- Services item -->
        <div class="col-md-6 col-lg-3 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
            <div class="icon">
              <i class="icon-layers"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Full Stack SW Dev</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse condi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section End -->

  <!-- Resume Section Start -->
  <div id="resume" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="education wow fadeInRight" data-wow-delay="0.3s">
            <ul class="timeline">
              <li>
                <i class="icon-graduation"></i>
                <h2 class="timelin-title">Education</h2>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Univeristy of Washington, Bothell</h3>
                  <span>Sep 2020 - Present</span>
                  <p class="line-text">Graduate Cerificate in Software Development and Design</p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">University of Washington, Seattle</h3>
                  <span>Jan 2006 - Jun 2016</span>
                  <p class="line-text">Bachelor of Arts in Mathematics
                    <br>Minor in Applied Mathematics
                  </p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Seattle Central College, Seattle</h3>
                  <span>Sep 2019 - Mar 2020</span>
                  <p class="line-text">CSC 110 Introduction to Computer Programming (PYTHON)
                    <br>CSC 142 Computer Programming I (JAVA)
                  </p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">North Seattle College, Seattle</h3>
                  <span>Mar 2020 - Jun 2020</span>
                  <p class="line-text">CSC 143Computer Programming II (JAVA)
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="experience wow fadeInRight" data-wow-delay="0.6s">
            <ul class="timeline">
              <li>
                <i class="icon-briefcase"></i>
                <h2 class="timelin-title">Experience</h2>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Software Test Engineer, Tech Mahindra USA Inc.</h3>
                  <span>Redmond, WA | Jul 2018 - Aug 2019</span>
                  <p class="line-text">
                    • Test and prove that the software meets major architectural requirements related
                    to functional, validation, end-to-end and regression testing for mobile devices
                    <br>• Prove for scalability and performance of a software
                    <br>• Cooperate with firmware developers and validation engineers
                    <br>• Develop tests for software validation
                    <br>• Detect bug issues, prepare file defect reports and report test progress
                    <br>• Hands-on experience on Samsung, Apple, Google, LG, HTC, Xiaomi, Nokia
                  </p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Software Test Engineer, Jnd Solutions</h3>
                  <span>Bellevue, WA | Aug 2016 - Jul 2017</span>
                  <p class="line-text">
                    • Coordinate and execute testing cases to verify defects within Android software
                    <br>• Evaluate software defects and generate test reports
                    <br>• Communicate with quality assurance and development team members
                    <br>• Hands-on experience on testing tools and equipments - such as QXDM, QCAT, DM, ADB
                  </p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Manager/Barista, Richmond Beach Coffee Co.</h3>
                  <span>Shoreline, WA | Jun 2013 - Jan 2016</span>
                  <p class="line-text">
                    • Maintain expenses within budget through planning, waste reduction
                    <br>• Responsible for ordering, scheduling, and inventory management
                    <br>• Make decisions on work hours and hiring, training, and supervising employees
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Resume Section End -->

  <!-- Portfolio Section -->
  <section id="portfolios" class="section-padding">
    <!-- Container Starts -->
    <div class="container">
      <h2 class="section-title wow flipInX" data-wow-delay="0.4s">My Works</h2>
      <div class="row">
        <div class="col-md-12">
          <!-- Portfolio Controller/Buttons -->
          <div class="controls text-center">
            <a class="filter active btn btn-common" data-filter="all">
              All
            </a>
            <a class="filter btn btn-common" data-filter=".cplusplus">
              C++
            </a>
            <a class="filter btn btn-common" data-filter=".java">
              Java
            </a>
            <a class="filter btn btn-common" data-filter=".python">
              Python
            </a>
          </div>
          <!-- Portfolio Controller/Buttons Ends-->
        </div>

        <!-- Portfolio All Projects -->
        <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">

          <!-- Portfolio C++ Projects -->
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix cplusplus">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-1.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-1.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="https://gist.github.com/sungbin-kang/d536d321b4ab70c1fcd8ae2eb7a7f5bc">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix cplusplus">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-2.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-2.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="#">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix cplusplus">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-3.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-3.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="#">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix cplusplus">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-4.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-4.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="#">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Java Projects -->
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix all java">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-5.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-5.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="#">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix java">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-5.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-5.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="#">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix java">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-5.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-5.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="#">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Python Projects -->
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix python">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-6.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-6.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="#">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix python">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-6.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-6.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="#">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix python">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/gallery/img-6.jpg" alt="" />
                <div class="overlay">
                  <div class="icons">
                    <a class="lightbox preview" href="assets/img/gallery/img-6.jpg">
                      <i class="icon-eye"></i>
                    </a>
                    <a class="link" href="#">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div> <!-- Project ends -->
      </div>
    </div>
    <!-- Container Ends -->
  </section>
  <!-- Portfolio Section Ends -->

  <!-- Counter Area Start-->
  <section class="counter-section section-padding">
    <div class="container">
      <div class="row">
        <!-- Counter Item -->
        <div class="col-md-3 col-sm-6 work-counter-widget text-center">
          <div class="counter wow fadeInDown" data-wow-delay="0.3s">
            <div class="icon"><i class="icon-briefcase"></i></div>
            <div class="counterUp">250</div>
            <p>Project Working</p>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-md-3 col-sm-6 work-counter-widget text-center">
          <div class="counter wow fadeInDown" data-wow-delay="0.6s">
            <div class="icon"><i class="icon-check"></i></div>
            <div class="counterUp">950</div>
            <p>Project Done</p>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-md-3 col-sm-6 work-counter-widget text-center">
          <div class="counter wow fadeInDown" data-wow-delay="0.9s">
            <div class="icon"><i class="icon-diamond"></i></div>
            <div class="counterUp">150</div>
            <p>Awards Received</p>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-md-3 col-sm-6 work-counter-widget text-center">
          <div class="counter wow fadeInDown" data-wow-delay="1.2s">
            <div class="icon"><i class="icon-heart"></i></div>
            <div class="counterUp">299</div>
            <p>Happy Clients</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Counter Area End-->

  <!-- Contact Section Start -->
  <section id="contact" class="section-padding">
    <div class="contact-form">
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <h2>Contact Form</h2>
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required
                        data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                        data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required
                        data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5"
                        data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="footer-right-area wow fadeIn">
              <h2>Contact Address</h2>
              <div class="footer-right-contact">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <p>Seattle, WA</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <p><a href="mailto:sungbin9353@gmail.com">sungbin9353@gmail.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <p><a href="tel:253-561-3186">(253) 561-3186</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->

  <!-- Footer Section Start -->
  <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
            <ul class="social-icon">
              <li>
                <a class="linkedin" href="https://www.linkedin.com/in/sungbin-kang-6a25a5136/"><i
                    class="icon-social-linkedin"></i></a>
              </li>
              <li>
                <a class="github" href="https://github.com/sungbin-kang"><i class="icon-social-github"></i></a>
              </li>
            </ul>
            <p>Copyright © 2018 UIdeck All Right Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
  </a>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.mixitup.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/nivo-lightbox.js"></script>
  <script src="assets/js/jquery.slicknav.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/form-validator.min.js"></script>
  <script src="assets/js/contact-form-script.min.js"></script>
  <script src="assets/js/map.js"></script>

</body>

</html>