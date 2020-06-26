<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add </title>
    <?php
		require "common/header.php"
		?>
    <script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
    
  <body>
  <?php session_start(); ?>
  <?php include("permission.php");?>
  

    <?php 
    if (isset($_POST["bntThem"]))
    {
      $ten = $_POST["txtTen"];
      $gia = $_POST["txtGia"];
      $anhien = $_POST["anhien"];
      $mota = $_POST["editor"];
      $hinh = $_POST["bntAddImage"];
      $conn=mysqli_connect("localhost", "root" , "", "banhmy");
      mysqli_set_charset($conn, "UTF-8");
      $result =mysqli_query($conn, "insert into `table_banhmy` (`id`, `thuc_don`, `ten`, `gia`, `hinh`, `mo_ta`) VALUES (NULL, '$anhien', '$ten', $gia, '$hinh', '$mota');");
      //nếu insert thành công
      mysqli_close($conn);
      if($result )
      {
        //chuyển đến trang theloai.php
        header("location:about.php");
        echo "Thêm mới thành công!";
      }
      else
      {
        echo "Thêm dữ liệu thất bại";
      }

    }
  ?>

    <?php
    require "common/nav.php";
    ?>
    

      <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/image_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Add</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Add</h1>
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
                  <select name="anhien" id="" class="form-control" placeholder="Keyword search">
                    <option value="0">BREAKFAST</option>
                    <option value="1">LUNCH</option>
                    <option value="2">CAFÉ</option>
                    <option value="3">BREAD AND BAKERY CASE.</option>
                    <option value="4">DRINKS</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="">Name</div>
                <input style="width: 507px !important; height: 52px !important;" type="text" name="txtTen" value="" required>
              </div>
              
              <div class="form-group">
                <div class="">Dolla</div>
                <input style="width: 507px !important; height: 52px !important;" type="text" name="txtGia" value="" required>
              </div>

              <div class="form-group">
                <div class="">Description</div>
                
                <div class="form-group wmd-panel">
                  <div id="wmd-button-bar">
                     
                    <form action="" method="post" >
                      <textarea name="editor" class="ckeditor" id="editor" cols="80" rows="10"></textarea>
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
                <div class=""></div>
                <input style="width: 507px !important; height: 52px !important; text-align: center" 
                type="file" name="bntAddImage" value="Add" required  placeholder="Add Image">
              </div>
              <div class="form-group">
                <input type="submit" name="bntThem" value="Add" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>