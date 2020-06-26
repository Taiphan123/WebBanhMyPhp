<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About</title>
    <?php
		require "common/header.php"
		?>
 
    <!--===============================================================================================-->	
	  <link rel="icon" type="image/png" href="images/icons/388.ico"/>
    <!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
	  <link rel="stylesheet" type="text/css" href="css/util.css">
	  <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    
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
    require "common/nav.php";
    ?> 
      <!-- END nav -->
      
    <div class="hero-wrap js-fullheight" style="background-image: url('images/91.webp');">
      <div class="overlay"></div>
      <div class="container">
        <div style="background: none" class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Breads</h1>
          </div>
        </div>
      </div>
    </div>

    

    <div class="limiter">
      <div class="container-table100">
        <div class="wrap-table100">
            <div class="container">
                <div class="row justify-content-start mb-5 pb-3">
                  <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Special Breads</span>
                    <h2 class="mb-4"><strong>Top</strong> Products</h2>
                  </div>
                </div>    		
              </div>
              <div style="width: fit-content;" class="block-17 my-4">
              <form style="padding-top: 0px !important" action="" method="post" class="d-block d-flex">
                <div style="padding-top: 0px !important" class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                  	<input type="text" name="Search" class="form-control" placeholder="Ex: Breads, Pastry, Bagels">
                  </div>
                </div>
                <input type="submit" name="SubmitSearch" class="search-submit btn btn-primary" value="Search">  
              </form>
            </div>
             

              <div class="table" method="post">
        
                <div class="row header">
                  <div class="cell">
                    Breads
                  </div>
                  <div class="cell">
                    Dolla
                  </div>
                  <div class="cell">
                    Type
                  </div>
                  <div class="cell">
                  </div>
                </div>
                 <!-- Tìm kiếm trong table -->
                  <?php 
                    $conn = mysqli_connect("localhost" , "root" , "" , "banhmy");
                    mysqli_set_charset($conn, 'UTF-8');
                    if (isset($_POST["SubmitSearch"]))
                    {   
                      $ten=$_POST["Search"];
                      $result=mysqli_query($conn, "SELECT `thuc_don`,`ten`,`gia` FROM table_banhmy WHERE ten LIKE '%$ten%' ");
                    }
                    else
                    {
                        $result=mysqli_query($conn, "select * from table_banhmy;");
                    }
                    
                    while($row=mysqli_fetch_assoc($result))
                    {
                  ?>
                      <div class="row">
                        <div class="cell" data-title="Breads" id="">
                          <?php echo $row["ten"]; ?>
                        </div>
                        <div class="cell" data-title="Dolla">
                            <?php echo $row["gia"];?> 
                        </div>
                        <div class="cell" data-title="Type">
                            <?php  
                              if ($row["thuc_don"] =="0")
                                echo "Breakfast";
                              else if($row["thuc_don"] =="1")
                                echo "Lunch";
                              else if($row["thuc_don"] =="2")
                                echo "Cafe";
                              else if($row["thuc_don"] =="3")
                                echo "BREAD AND BAKERY CASE";
                              else if ($row["thuc_don"] =="4")
                                echo "DRINKS";
                            ?>
                        </div>
                        
                        <div class="cell" data-title="Button">
                          <a href="edit.php?id=<?php echo $row["id"]; ?>"><button name="" id="thnb" class="button-clean-fruit"  onclick="background()">Edit</button>
                          <a href="delete.php?id=<?php echo $row["id"]; ?>"><button name="" id="thnc" class="button-clean-fruit"  onclick="size()">Delete</button>
                        </div>
                      </div>
                    <?php 
                      }
                        mysqli_close($conn);
                    ?>
              </div>
            <!-- <a style="color: #fff" href="add.php"><button id="thna" class="button-clean-fruit" onclick="color()">Add</button></a> -->
        </div>
      </div>
    </div>

    <?php
    require "common/footer.php"
    ?>
    
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


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

<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

    
  </body>
</html>