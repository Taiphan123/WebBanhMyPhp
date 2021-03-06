<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Product</title>
	<?php
		require "common/header.php"
		?>
	<link rel="stylesheet" href="innfor.css">
	

  </head>
  <body>
  <?php session_start(); ?>
       <?php
    require "common/nav.php";
    ?>

      <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/banh-mibg.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Product</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1 }">Product</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div style="padding-top: 100px;" class="row">
        	<div class="col-lg-3 sidebar ftco-animate">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find</h3>
        			<form action="#">
        				<div class="fields">
		              <!-- <div class="form-group">
		                <input type="text" class="form-control" placeholder="Bread, coffee, ...">
		              </div> -->
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="thucdon" id="" class="form-control" placeholder="Keyword search">
						<option value="">ALL</option>
	                      <option value="0">BREAKFAST</option>
	                      <option value="1">LUNCH</option>
	                      <option value="2">CAFÉ</option>
	                      <option value="3">BREAD AND BAKERY CASE.</option>
	                      <option value="4">DRINKS</option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
								<input type="number" value="50" min="0" max="120"/>$
							</span>
								<input value="1000" min="0" max="120" step="5" type="range"/>
								<input value="50000" min="0" max="120" step="5" type="range"/>
								<!-- </svg> -->
						</div>
		              </div>
		              <div class="form-group">
					  <input  type="submit" value="Search" class="btn btn-primary py-3 px-5" name="btnSearch">
		              </div>
		            </div>
	            </form>
        		</div>
          </div>
          <div class="col-lg-9">
		  <div class="row">
			  <?php 
                    $conn = mysqli_connect("localhost" , "root" , "" , "banhmy");
                    mysqli_set_charset($conn, 'UTF-8');
                    if(isset($_POST["btnSearch"])) { $result=mysqli_query($conn, " SELECT * FROM `table_banhmy` WHERE `thuc_don`=2 "); }
                    else
                    {
					
						$result=mysqli_query($conn, " SELECT * FROM `table_banhmy` ");
					}
					$i=1;
					$ten;
                    while($row=mysqli_fetch_assoc($result))
                    {
						$i++;
						
            ?>
          				<div class="col-md-4 ftco-animate">
		    				<div class="destination">
								<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/<?php echo $row["hinh"]; ?>);">
									<div class="icon d-flex justify-content-center align-items-center">
											<span class="icon-search2"></span>
									</div>
								</a>
								<div class="text p-3">
										<div class="d-flex">
											<div class="one">
												<h3><a name="ten" href="#"><?php echo $row['ten']; ?></a></h3>
												<p class="rate">
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star"></i>
													<i class="icon-star-o"></i>
													<span>8 Rating</span>
												</p>
											</div>
											<div class="two">
												<span class="price">$ <?php echo $row["gia"];?> </span>
											</div>
										</div>
										<p></p>
										<p class="days"><span>BAKERY - SWEET - BIO</span></p>
										<hr>
										<p class="bottom-area d-flex">
											<span><i class="icon-map-o"></i> <br>566 Nui Thanh St</span> 
											<span name ="Discover"  class="ml-auto "><a href="#login-box"  class="show-window ">Discover</a></span>
											
										</p>
								</div>
							</div>
		    			</div>
				<?php 
                      }
                        mysqli_close($conn);
                ?>
          	<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
					  						
												<?php
												$ten = $_POST["ten"];
											
												$conn = mysqli_connect("localhost","root","","banhmy");
												mysqli_set_charset($conn, 'UTF-8');
												$result = mysqli_query($conn,"select * from table_banhmy where id =14");
												$row = mysqli_fetch_assoc($result);

												?>
											<div class="login" id="login-box"  style="width: 800px; top: 20%; left: 45%; border-radius: 1%">
												<h4 style="text-align: center; margin-bottom: 0; color: #de3242; font-family: none; font-size: xx-large;">Infor Product</h4>
												<hr>
												<div class="row" style="font-family: initial;">
													<div class="col-lg-6">
														<img src="images/<?php echo $row["hinh"]; ?>" style="width: inherit; margin-left: 5%;  border-radius: 3%;" >
													</div>
													<div class="col-lg-6">
														<div class="one">
															<h4><a href="#"><?php echo $row["ten"]; ?></a></h4>
														</div>
														<div class="two">
															<span class="price" style="font-size: xx-large;">	&#36; <?php echo $row["gia"]; ?></span>
														</div>
														<hr>
														<?php echo $row["mo_ta"]; ?>
													</div>
												</div>
											</div>
										<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
										<script>
												$(document).ready(function() {
												$('a.show-window').click(function() {
													//lấy giá trị thuộc tính href - chính là phần tử "#login-box"
													var loginBox = $(this).attr('href');
																				
													//cho hiện hộp đăng nhập trong 300ms
													$(loginBox).fadeIn(300);
																				
													// thêm phần tử id="over" vào sau body
													$('body').append('<div id="over">');
													$('#over').fadeIn(300);
																				
													return false;
												});
																					
												// khi click đóng hộp thoại
												$(document).on('click', "a.close, #over", function() {
													$('#over, .login').fadeOut(300 , function() {
														$('#over').remove();
													});
													return false;
												});
												});
										</script>

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
  <script src="js/range.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>