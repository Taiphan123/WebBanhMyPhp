<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	  <link rel="icon" type="image/png" href="images/icons/388.ico"/>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php session_start(); ?>
  <?php include("permission.php");?>
    <?php
      $id = $_GET["id"];
      //mở kết nối
      $conn = mysqli_connect("localhost","root","","banhmy");
      //require("lib/connect.php");
      mysqli_set_charset($conn, 'UTF-8');
      //lấy dòng có id = $id
      $result = mysqli_query($conn,"select * from table_banhmy where id = $id");
      //lấy dòng dữ liệu trong $result
      $row = mysqli_fetch_assoc($result);
      //kiểm tra nút sửa đã được nhấn hay chưa
      if (isset($_POST["bntThem"]))
      {
        $ten=$_POST["txtTen"];
        $gia=$_POST["gia"];
        $anhien=$_POST["optAnHien"];
        $mota=$_POST["editor"];
        $result = mysqli_query($conn,"UPDATE `table_banhmy` SET `thuc_don` = '$anhien', `ten` = '$ten', `gia` = '$gia', `mo_ta` = '$mota' WHERE `table_banhmy`.`id` = $id;");
        if ($result)
        {
          header("location:about.php");
        }
        else
        {
          echo "Cập nhật thất bại";
        }
      }
    ?>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">OngRut Bakery.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
  
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="menus.php" class="nav-link">Menus</a></li>
            <li class="nav-item"><a href="detail.php" class="nav-link">Detail</a></li>
            <li class="nav-item"><a href="coffee.php" class="nav-link">Coffee</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="customer.php" class="nav-link">Customer</a></li>
            <li class="nav-item cta"><a href="add_KH.php" class="nav-link"><span>Add Customer</span></a></li>
            <li class="nav-item cta"><a href="add.php" class="nav-link"><span>Add listing</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
      <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/image_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Edit</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Edit</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container" method="post">
        <div class="row d-flex mb-5 contact-info">
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="#" method="post">
              <div class="form-group">
                <div class="select-wrap one-third">
                  <select name="optAnHien" id="" class="form-control" placeholder="Keyword search">
                    <option value="0" 
                      <?php 
                        if ($row["thuc_don"] == "0")
                          echo "selected";
                      ?>
                    >Breakfast
                    </option>
                    <option value="1"
                      <?php 
                        if ($row["thuc_don"] == "1")
                          echo "selected";
                      ?>
                    >Lunch
                    </option>
                    <option value="1"
                      <?php 
                        if ($row["thuc_don"] == "2")
                          echo "selected";
                      ?>
                    >Cafe
                    </option>
                    <option value="1"
                      <?php 
                        if ($row["thuc_don"] == "3")
                          echo "selected";
                      ?>
                    >BREAD AND BAKERY CASE
                    </option>
                    <option value="1"
                      <?php 
                        if ($row["thuc_don"] == "4")
                          echo "selected";
                      ?>
                    >Drinks
                    </option>
                  </select>
                </div>
              </div>
              <div class="form-group">
              <div class="">Name</div>
                <input style="width: 507px !important; height: 52px !important;" type="text" name="txtTen" value="<?php echo $row["ten"]; ?>">
              </div>
              <div class="form-group">
                <div class="">Dolla</div>
                <input style="width: 507px !important; height: 52px !important;" type="text" name="gia" 
          value="<?php echo $row["gia"]; ?>">
              </div>
              <div class="form-group">
                <div class="">Description</div>
                
                <div class="form-group wmd-panel">
                  <div id="wmd-button-bar">
                     
                    <form action="" method="post" >
                      <textarea name="editor" class="ckeditor" id="editor" cols="80" rows="10"><?php 
                        echo $row["mo_ta"];
                      ?></textarea>
	                  </form>
   
                    <script>
                      ckeditor.replace('editor');
                    </script>
                  <div class="invalid-feedback mb-3">
                    Nội dung không được để trống
                  </div>

                  <div id="wmd-preview" class="wmd-preview"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="bntThem" value="Update" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>

    

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div style="margin-bottom: 0 !important; background: none" class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">OngRut Bakery.</h2>
              <p>Trời ơi tin được hông được hông!</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
                <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">566 Nui Thanh St. Hai Chau District, Da Nang City, Viet Nam</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+84 76 306 1890</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ongrutbakery@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>