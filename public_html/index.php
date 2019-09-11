<?php
include_once("./database/constants.php");

if (!isset($_SESSION["userid"])) {
    header("location:" . DOMAIN . "/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome to Icha3a</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">Icha</span>3a</a>
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-center " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#services-section" class="nav-link">Services</a></li>
                <li><a href="#about-section" class="nav-link">About Us</a></li>
                <li><a href="#team-section" class="nav-link">Doctors</a></li>
                
                <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
              </nav>
          
            </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    

    <div class="site-section-cover img-bg-section" style="background-image: url('images/person-transparent-2.png'); " data-aos="fade">
      
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">

            <div class="box-shadow-content">
              <div class="block-heading-1">
                <span class="d-block mb-3"  data-aos="fade-up">Welcome To Toothsy</span>
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">We Care For Your Smile</h1>
              </div>
              
              <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod modi, eius minus hic illum perspiciatis! Voluptate facere tempore, libero enim fugit, temporibus non dolor nostrum iure ad. Dolorem, explicabo!</p>
              <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary text-white py-3 px-5">Contact Us</a></p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="img-absolute">
        <img src="images/person-transparent-2.png" alt="Image" class="img-fluid">
      </div> -->
    </div>



    <div class="site-section block-feature-1-wrap" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="block-heading-1">
              <span>All Kind Of Services</span>
              <h2>Dental Services</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up">
            <div class="block-feature-1">
              <span class="icon">
                <span class="flaticon-dentist"></span>
              </span>
              <h2 class="text-black">Tooth Extraction</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit quo quae</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="block-feature-1">
              <span class="icon">
                <span class="flaticon-dental-care"></span>
              </span>
              <h2 class="text-black">Tooth Fillings</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit quo quae</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="block-feature-1">
              <span class="icon">
                <span class="flaticon-dental-1"></span>
              </span>
              <h2 class="text-black">Braces Install</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit quo quae</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up">
            <div class="block-feature-1">
              <span class="icon">
                <span class="flaticon-baby"></span>
              </span>
              <h2 class="text-black">Children Clinic</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit quo quae</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            <div class="block-feature-1">
              <span class="icon">
                <span class="flaticon-tooth"></span>
              </span>
              <h2 class="text-black">Tooth Cleaning</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit quo quae</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="block-feature-1">
              <span class="icon">
                <span class="flaticon-dental"></span>
              </span>
              <h2 class="text-black">Patient Records</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit quo quae</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section gradient-bg-1" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
          <div class="col-8 mb-5">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="https://vimeo.com/45830194" class="popup-vimeo">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="images/img-video-1.jpg" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                <div class="block-counter-1">
                  <span class="number"><span data-number="8">0</span>+</span>
                  <span class="caption">Year of Experience</span>
                </div>
              </div>
              <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                <div class="block-counter-1">
                  <span class="number"><span data-number="15">0</span>+</span>
                  <span class="caption">Expert Doctors</span>
                </div>
              </div>
              <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                <div class="block-counter-1">
                  <span class="number"><span data-number="320">0</span>+</span>
                  <span class="caption">Health Sections</span>
                </div>
              </div>
              <div class="col-md-6 mb-4 col-lg-0 col-lg-3">
                <div class="block-counter-1">
                  <span class="number"><span data-number="1500">0</span>+</span>
                  <span class="caption">Happy Smiles</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="block-heading-1">
              <span>Expert Doctors</span>
              <h2>Meet Our Team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/doc_person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Bob Carry</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Doctor</span>
              <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, repellat. At, soluta. Repellendus vero, consequuntur!</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/doc_person_2.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Jean Smith</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Doctor</span>
              <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil quia veritatis, nam quam obcaecati fuga.</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="block-team-member-1 text-center rounded">
              <figure>
                <img src="images/doc_person_3.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Ricky Fisher</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Dentist</span>
              <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quidem, laudantium, illum minus numquam voluptas?</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
      <div class="container">
        
        <div class="text-center mb-5">
          <div class="block-heading-1">
            <span>Happy Client Says</span>
            <h2>Testimonial</h2>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13">
          <div>
            <div class="block-testimony-1 text-center">
              
              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Ricky Fisher</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">
              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Ken Davis</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">
              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Mellisa Griffin</h3>
            </div>
          </div>

          <div>
            <div class="block-testimony-1 text-center">
              <blockquote class="mb-4">
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, fugit excepturi sapiente voluptatum nulla odio quaerat quibusdam tempore similique doloremque veritatis et cupiditate, maiores cumque repudiandae explicabo tempora deserunt consequuntur?&rdquo;</p>
              </blockquote>

              <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Robert Steward</h3>
            </div>
          </div>


        </div>

      </div>
    </div>

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1">
              <span>Latest Blog Posts</span>
              <h2>Our Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div>
              <a href="single.html" class="mb-4 d-block"><img src="images/img-video-1.jpg" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.html">Every Smile Is Precious</a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2019</span> By <a href="single.html" class="by">James Cooper</a></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga veritatis culpa quis!</p>
              <p><a href="single.html">Read More</a></p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="post-entry mb-4">
              <h2><a href="single.html">Consectetur adipisicing elit veritatis culpa</a></h2>
              <p class="text-muted text-uppercase small"><span class="mr-2">January 18, 2019</span> by <a href="single.html" class="by">James Cooper</a></p>
            </div>

            <div class="post-entry mb-4">
              <h2><a href="single.html">Consectetur adipisicing elit veritatis culpa</a></h2>
              <p class="text-muted text-uppercase small"><span class="mr-2">January 18, 2019</span> by <a href="single.html" class="by">James Cooper</a></p>
            </div>

            <div class="post-entry mb-4">
              <h2><a href="single.html">Consectetur adipisicing elit veritatis culpa</a></h2>
              <p class="text-muted text-uppercase small"><span class="mr-2">January 18, 2019</span> by <a href="single.html" class="by">James Cooper</a></p>
            </div>

            <div class="post-entry mb-4">
              <h2><a href="single.html">Consectetur adipisicing elit veritatis culpa</a></h2>
              <p class="text-muted text-uppercase small"><span class="mr-2">January 18, 2019</span> by <a href="single.html" class="by">James Cooper</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1">
              <span>Get In Touch</span>
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5">
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email address">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <h2 class="text-black">Need a call for presentation?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum quibusdam nisi, illum nulla aspernatur <a href="#">voluptas nam praesentium</a> aut quidem aperiam, quae non tempora recusandae voluptatibus fugit impedit.</p>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <!-- <div class="col-md-3">
                
              </div> -->
            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </div>


              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>