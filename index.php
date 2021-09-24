<?php
  require('includes/db.php');
  $query = "SELECT * FROM home,section_control,social_media,about";
  $run = mysqli_query($db,$query);
  $user_data = mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$user_data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/SUNDAY-10.JPG" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">

      <h1><a href="index.php"><?=$user_data['title']?></a></h1>
      
      <h2><?=$user_data['subtitle']?></h2>
     

      <?php
      if ($user_data['showicons']) {
        ?>
        <div class="social-links">
        <?php if($user_data['twitter']!=''){?>
        <a href="https://twitter.com/<?=$user_data['twitter']?>" class="twitter"><i 
        class="icofont-twitter"></i></a>
        <?php
      }

      ?>

<?php if($user_data['facebook']!=''){?>
        <a href="https://facebook.com/<?=$user_data['facebook']?>" class="facebook"><i 
        class="icofont-facebook"></i></a>
        <?php
}
        ?>


<?php if($user_data['instagram']!=''){?>
        <a href="https://instagram.com/<?=$user_data['instagram']?>" class="instagram"><i 
        class="icofont-instagram"></i></a>
        </div>
        <?php
      }
      ?>
      <nav class="nav-menu d-none d-lg-block">
        <ul>

        <?php
        if ($user_data['home_section']){
        ?>
        <li class="active"><a href="#header">Home</a></li>
        <?php
        }
        if ($user_data['about_section']) {
        ?>
          <li><a href="#about">About</a></li>
        <?php
        }
        if ($user_data['ccontact_section']) {
        ?>
          <li><a href="#contact">Contact</a></li>

          <?php
        }
        ?>

          <?php
        }
        ?>
        </ul>
      </nav><!-- .nav-menu -->

    

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/<?=$user_data['profile_pic']?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?=$user_data['about_title']?></h3>
          <p class="font-italic">
           <?=$user_data['about_subtitle']?>
          </p>
          
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <?php
                  $query2 = "SELECT * FROM personal_info";
                  $run2 = mysqli_query($db,$query2);
                  while ($personal_info = mysqli_fetch_array($run2)){
                    ?>
                       <li><i class="icofont-rounded-right"></i> <strong><?=$personal_info['label']?> : </strong><?=$personal_info['value']?></li>
                    <?php
                  };
                  ?>
              </ul>
                </div>
          </div>
          <p>
            <?=$user_data['about_desc']?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-12">

          <?php
          $query3 = "SELECT * FROM skills";
          $run3 = mysqli_query($db,$query3);
          while ($skill = mysqli_fetch_array($run3)){
            ?>
             <div class="progress">
            <span class="skill"><?=$skill['skill_name']?> <i class="val"><?=$skill['skill_level']?> %</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?=$skill['skill_level']?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
            <?php

          };
          ?>

         

      

        

      </div>

    </div><!-- End Skills -->

   

    <!-- ===== Projects ======= -->
    <div class="container work" id="work">

      <div class="section-title">
        <h2>My Work</h2>  
      </div>

      
        <div class="work-category">
          <button id="all" class="active" onclick="showRequiredCategory(this)">All Projects </button>
          <button id="php"  onclick="showRequiredCategory(this)">PHP Projects </button>
          <button id="html"  onclick="showRequiredCategory(this)">HTML Projects</button>

        </div>
  
        <div class="category-all showCategory">
          <a href=""><img src="assets/img/tdnews.png"></a>
          <a href=""><img src="assets/img/Facebook clone.png"></a>
          <a href=""><img src="assets/img/heto.png"></a>
          <a href=""><img src="assets/img/themydee.png"></a>
          <a href=""><img src="assets/img/Caspolls.png"></a>
        </div>

        <div class="category-php hideCategory">
          <a href=""><img src="assets/img/tdnews.png"></a>
          <a href=""><img src="assets/img/themydee.png"></a>
        </div>

        <div class="category-html hideCategory">
          <a href=""><img src="assets/img/Facebook clone.png"></a>
          <a href=""><img src="assets/img/heto.png"></a>
          <a href=""><img src="assets/img/Caspolls.png"></a>
        </div>


      
      
    </div>
     

  </section><!-- End About Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>10,Osunfunke Street,Oshorun Village, Owode-Ibeshe, Ikorodu, Lagos State, Nigeria.</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="https://web.facebook.com/me/" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="https://www.instagram.com/themy_dee/" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="#" class="github"><i class="icofont-github"></i></a>
              <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>nifetemiboy@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+234 907 703 4764</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    Designed by <a href="#">ThemydeeCodes</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>