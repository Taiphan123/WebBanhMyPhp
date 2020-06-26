<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About Us</title>
    <?php
		require "common/header.php"
		?>
  <body>
   
     <?php
    require "common/nav.php";
    ?> 
        

      <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/contact.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>About Us</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 566 Nui Thanh Street, Hai Chau District, Da Nang City, Viet Nam</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="">+84 76 306 1890</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="ongrutbakery@gmail.com">ongrutbakery@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website:</span> <a href="#">ongrutbakery.com</a></p>
          </div>
        </div>
        <div class="row block-9">

          <div class="col-md" id="map"></div>
        </div>
      </div>
    </section>


<?php
    require "common/footer.php"
    ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=true"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>