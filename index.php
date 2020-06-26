<!DOCTYPE html>
<html lang="en">
	 <!-- < ?   php  -->
	<!-- //session_start();
	//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
	//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
	if (!isset($_SESSION['username'])) {
		header('Location: login.php');
	} -->
	<!-- ?  > -->
	<?php session_start(); ?>
  <head>
    <title>Ong Rut Bakery</title>
	<?php
		require "common/header.php"
		?>
  </head>
  <body>
    
  <?php
    require "common/nav.php";
    ?>

      <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>BÁNH MÌ ÔNG RÚT<br></strong></h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Trời ơi tin được hông!</p>
            <div class="block-17 my-4">
              <form style="padding-top: 0px !important" action="" method="post" class="d-block d-flex">
                <div style="padding-top: 0px !important" class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                  	<input type="text" class="form-control" placeholder="Ex: Breads, Pastry, Bagels">
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Search">  
              </form>
            </div>
            <p>Or browse the highlights</p>
            <p class="browse d-md-flex">
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="product.php"><i class="flaticon-fork"></i>Breads</a></span>
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="product.php"><img style="width: 30px;" src="data:image/svg+xml;base64,
								PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00NyAxIDUxMSA1MTEuOTk4OTciIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48Zz48cGF0aCBkPSJtMzk2LjY3NTc4MSA0Ni4yNTM5MDZoLTI0Ljg5MDYyNWwtNi45MTQwNjItMzMuNTI3MzQ0Yy0xLjUyMzQzOC03LjM3NS04LjA5Mzc1LTEyLjcyNjU2Mi0xNS42MjEwOTQtMTIuNzI2NTYyaC0yODEuMzg2NzE5Yy03LjUzMTI1IDAtMTQuMTAxNTYyIDUuMzUxNTYyLTE1LjYyMTA5MyAxMi43MjY1NjJsLTYuOTE3OTY5IDMzLjUyNzM0NGgtMjQuODkwNjI1Yy0xMC45OTIxODggMC0xOS45MzM1OTQgOC45NDE0MDYtMTkuOTMzNTk0IDE5LjkzMzU5NHYzMi45NTcwMzFjMCAxMC45OTIxODggOC45NDE0MDYgMTkuOTM3NSAxOS45MzM1OTQgMTkuOTM3NWg5Ljc4MTI1bDUuNTQyOTY4IDM4Ljk0OTIxOWMtMS42Nzk2ODcuOTY4NzUtMy4yMTA5MzcgMi4yMDcwMzEtNC41MTE3MTggMy43MDMxMjUtMy4zMjgxMjUgMy44Mzk4NDQtNC44MjgxMjUgOC45MjU3ODEtNC4xMTMyODIgMTMuOTYwOTM3bDM3LjAwMzkwNyAyNTkuOTg4MjgyYzEuMDE5NTMxIDcuMTcxODc1IDYuNDA2MjUgMTIuODU5Mzc1IDEzLjIxMDkzNyAxNC41MzkwNjJsNS4yNjU2MjUgMzcuMDE1NjI1YzIuMDExNzE5IDE0LjExNzE4OCAxNC4yNzczNDQgMjQuNzYxNzE5IDI4LjUzNTE1NyAyNC43NjE3MTloMTk0LjgxNjQwNmMxNC4yNTc4MTIgMCAyNi41MjM0MzctMTAuNjQ0NTMxIDI4LjUzNTE1Ni0yNC43NjE3MTlsNS4yNjU2MjUtMzcuMDE1NjI1YzYuODA0Njg3LTEuNjc5Njg3IDEyLjE5MTQwNi03LjM2NzE4NyAxMy4yMTA5MzctMTQuNTM5MDYybDM3LjAwMzkwNy0yNTkuOTg4MjgyYy43MTQ4NDMtNS4wMzUxNTYtLjc4NTE1Ny0xMC4xMjEwOTMtNC4xMTMyODEtMTMuOTYwOTM3LTEuMzAwNzgyLTEuNDk2MDk0LTIuODMyMDMyLTIuNzM0Mzc1LTQuNTE1NjI2LTMuNzAzMTI1bDUuNTQ2ODc2LTM4Ljk0OTIxOWg5Ljc4MTI1YzEwLjk5MjE4NyAwIDE5LjkzMzU5My04Ljk0NTMxMiAxOS45MzM1OTMtMTkuOTM3NXYtMzIuOTU3MDMxYy0uMDAzOTA2LTEwLjk5MjE4OC04Ljk0NTMxMi0xOS45MzM1OTQtMTkuOTM3NS0xOS45MzM1OTR6bS0yMS41NjI1IDEyNy4zMjQyMTktMzcuMDAzOTA2IDI1OS45ODgyODFjLS4xNzU3ODEgMS4yMzQzNzUtMS4yNDYwOTQgMi4xNjAxNTYtMi40ODgyODEgMi4xNjAxNTZoLTcxLjg0NzY1NmMtNC4xNDQ1MzIgMC03LjUwMzkwNyAzLjM1OTM3Ni03LjUwMzkwNyA3LjUwNzgxM3MzLjM1OTM3NSA3LjUwNzgxMyA3LjUwMzkwNyA3LjUwNzgxM2g2MC43NTM5MDZsLTQuODk0NTMyIDM0LjM4MjgxMmMtLjk2NDg0MyA2Ljc2MTcxOS02LjgzOTg0MyAxMS44NjMyODEtMTMuNjcxODc0IDExLjg2MzI4MWgtMTk0LjgxMjVjLTYuODMyMDMyIDAtMTIuNzA3MDMyLTUuMTAxNTYyLTEzLjY3MTg3Ni0xMS44NjMyODFsLTQuODkwNjI0LTM0LjM4MjgxMmgxMzYuMjUzOTA2YzQuMTQ4NDM3IDAgNy41MDc4MTItMy4zNTkzNzYgNy41MDc4MTItNy41MDc4MTNzLTMuMzU5Mzc1LTcuNTA3ODEzLTcuNTA3ODEyLTcuNTA3ODEzaC0xNDcuMzUxNTYzYy0xLjI0MjE4NyAwLTIuMzEyNS0uOTI1NzgxLTIuNDg4MjgxLTIuMTYwMTU2bC0zNy4wMDM5MDYtMjU5Ljk4ODI4MWMtLjE0MDYyNS0uOTg4MjgxLjMwODU5NC0xLjY3OTY4Ny41ODk4NDQtMi4wMDM5MDYuMjY5NTMxLS4zMDg1OTQuODU1NDY4LS44MDA3ODEgMS43Njk1MzEtLjg0NzY1Ny4xMDE1NjItLjAwMzkwNi4xOTkyMTktLjAxMTcxOC4zMDQ2ODctLjAxOTUzMWgzMjcuNzg5MDYzYy4xMDE1NjIuMDA3ODEzLjIwMzEyNS4wMTU2MjUuMzA0Njg3LjAxOTUzMS45MTQwNjMuMDQ2ODc2IDEuNS41MzkwNjMgMS43Njk1MzIuODQ3NjU3LjI4MTI1LjMyNDIxOS43MzA0NjggMS4wMTU2MjUuNTg5ODQzIDIuMDAzOTA2em0tMzI5LjczMDQ2OS01NC40OTYwOTRoMzI2LjM0NzY1N2wtNS4yMTA5MzggMzYuNjEzMjgxaC0zMTUuOTI1Nzgxem0zNTYuMjE0ODQ0LTE5LjkzNzVjMCAyLjcxNDg0NC0yLjIwNzAzMSA0LjkyMTg3NS00LjkyMTg3NSA0LjkyMTg3NWgtMzc2LjI0MjE4N2MtMi43MTA5MzggMC00LjkyMTg3NS0yLjIwNzAzMS00LjkyMTg3NS00LjkyMTg3NXYtMzIuOTU3MDMxYzAtMi43MTQ4NDQgMi4yMTA5MzctNC45MjE4NzUgNC45MjE4NzUtNC45MjE4NzVoNjcuMTc1NzgxYzQuMTQ0NTMxIDAgNy41MDM5MDYtMy4zNTkzNzUgNy41MDM5MDYtNy41MDc4MTMgMC00LjE0NDUzMS0zLjM1OTM3NS03LjUwMzkwNi03LjUwMzkwNi03LjUwMzkwNmgtMjYuOTUzMTI1bDYuMjg5MDYyLTMwLjQ5MjE4N2MuMDg5ODQ0LS40MzM1OTQuNDc2NTYzLS43NS45MTc5NjktLjc1aDI4MS4zODY3MTljLjQ0MTQwNiAwIC44MjgxMjUuMzE2NDA2LjkxNzk2OS43NWw2LjI4OTA2MiAzMC40OTIxODdoLTIzMy45MTQwNjJjLTQuMTQ4NDM4IDAtNy41MDc4MTMgMy4zNTkzNzUtNy41MDc4MTMgNy41MDM5MDYgMCA0LjE0ODQzOCAzLjM1OTM3NSA3LjUwNzgxMyA3LjUwNzgxMyA3LjUwNzgxM2gyNzQuMTMyODEyYzIuNzE0ODQ0IDAgNC45MjE4NzUgMi4yMDcwMzEgNC45MjE4NzUgNC45MjE4NzV6bTAgMCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDAwMDAwIj48L3BhdGg+PHBhdGggZD0ibTI2NS4wMjM0MzggMjQxLjQyMTg3NWMtLjA1MDc4Mi0uMDUwNzgxLS4xMDU0NjktLjA5NzY1Ni0uMTYwMTU3LS4xNDg0MzctMjQuOTUzMTI1LTI0LjY5NTMxMy03MC40MTAxNTYtMTkuNTcwMzEzLTEwMS40ODQzNzUgMTEuNTA3ODEyLTE0Ljg1MTU2MiAxNC44NDc2NTYtMjQuMzIwMzEyIDMzLjQwNjI1LTI2LjY2NDA2MiA1Mi4yNTc4MTItMi40MzM1OTQgMTkuNTQ2ODc2IDMuMDE1NjI1IDM3LjA5NzY1NyAxNS4zMzk4NDQgNDkuNDIxODc2IDAgLjAwMzkwNi4wMDM5MDYuMDAzOTA2LjAwNzgxMi4wMDc4MTIuMDE5NTMxLjAxOTUzMS4wMzkwNjIuMDM5MDYyLjA1ODU5NC4wNTQ2ODggMTAuMzk4NDM3IDEwLjM2MzI4MSAyNC40OTYwOTQgMTUuODQzNzUgNDAuMzc1IDE1Ljg0Mzc1IDIuOTMzNTk0IDAgNS45MzM1OTQtLjE5MTQwNyA4Ljk3NjU2Mi0uNTY2NDA3IDE4Ljg1MTU2My0yLjM0Mzc1IDM3LjQxMDE1Ni0xMS44MTY0MDYgNTIuMjYxNzE5LTI2LjY2NDA2MiAzMS4xNTIzNDQtMzEuMTU2MjUgMzYuMjM0Mzc1LTc2Ljc2OTUzMSAxMS4zMjQyMTktMTAxLjY3OTY4OC0uMDExNzE5LS4wMTU2MjUtLjAyMzQzOC0uMDIzNDM3LS4wMzUxNTYtLjAzNTE1NnptLTExMy40MTAxNTcgNjUuNDY4NzVjMS45MzM1OTQtMTUuNTUwNzgxIDkuODgyODEzLTMwLjk5NjA5NCAyMi4zNzg5MDctNDMuNDk2MDk0IDE0Ljk3MjY1Ni0xNC45NzI2NTYgMzMuNzE4NzUtMjIuODYzMjgxIDUwLjQ4MDQ2OC0yMi44NjMyODEgNy43MDMxMjUgMCAxNC45ODA0NjkgMS42NzU3ODEgMjEuMjg1MTU2IDUuMDg5ODQ0LTEyLjYwNTQ2OCA3LjQ4ODI4MS0zMi4xNzk2ODcgMjIuMjE4NzUtMzguMTMyODEyIDQ0LjA1MDc4MS01LjE3OTY4OCAxOC45ODA0NjktMzMuMjgxMjUgNDAuMDA3ODEzLTQ4LjcwMzEyNSA0OS43NTc4MTMtNi4yODEyNS04LjYyODkwNy04Ljg3NS0xOS45NTcwMzItNy4zMDg1OTQtMzIuNTM5MDYzem05MS41MDM5MDcgMjUuNjI4OTA2Yy0xMi41IDEyLjUtMjcuOTQ1MzEzIDIwLjQ0NTMxMy00My40OTYwOTQgMjIuMzc4OTA3LTEwLjk4NDM3NSAxLjM2NzE4Ny0yMS4wMTU2MjUtLjQzMzU5NC0yOS4xMjg5MDYtNS4wODk4NDQgMTUuNDgwNDY4LTEwLjIxODc1IDQ1LjEzMjgxMi0zMi40MTQwNjMgNTEuNjE3MTg3LTU2LjE4NzUgNS4yOTI5NjktMTkuNDE3OTY5IDI2LjIxNDg0NC0zMi40OTIxODggMzUuNzY5NTMxLTM3LjU3NDIxOSAxNC44NTkzNzUgMTkuNzgxMjUgOC44NzUgNTIuODMyMDMxLTE0Ljc2MTcxOCA3Ni40NzI2NTZ6bTAgMCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9ImFjdGl2ZS1wYXRoIiBzdHlsZT0iZmlsbDojMDAwMDAwIj48L3BhdGg+PC9nPiA8L3N2Zz4=" /></i>Coffee</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="product.php"><i class="flaticon-meeting-point"></i>Places</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-	center"><a href="product.php"><i class="flaticon-shopping-bag"></i>Shopping</a></span>
            </p>
          </div>
        </div>
      </div>
		</div>
		
		<section style="min-width: 980px; position: absolute; margin-left: 0px; top: 1693px; height: 831px; left: 0px; width: 100%;" data-responsive="true" class="strc1" id="comp-il0rilh2">x
			<div style="position: absolute; top: 0px; width: calc(100% - 0px); height: 100%; overflow: hidden; pointer-events: auto; min-height: 831px; min-width: 980px; left: 0px; right: 0px; bottom: 0px;" data-page-id="a4d4d" data-enable-video="true" data-bg-effect-name="" data-media-type="" data-render-fixed-position="true" data-use-clip-path="" data-needs-clipping="" class="strc1balata" id="comp-il0rilh2balata">
				<div style="position:absolute;width:100%;height:100%;top:0;background-color:transparent" data-background-image="" data-position="absolute" class="bgColor" id="comp-il0rilh2balatabgcolor">
					<div style="width:100%;height:100%;position:absolute;top:0;background-image:;opacity:1" id="comp-il0rilh2balatabgcoloroverlay" class="bgColoroverlay">
					</div>
				</div>
			</div>

			<div style="position:relative;width:calc(100% - 0px);min-width:980px" id="comp-il0rilh2inlineContent" class="strc1inlineContent">
				<div style="flex: 980 1 0%; margin-left: 0px; min-width: 980px; margin-top: 0px; margin-bottom: 0px; top: 0px; height: 831px; position: relative;" data-content-width="980" class="strc1" id="mediaisj0ddbp5">
					<div style="position: absolute; top: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; min-width: 980px; min-height: 831px; left: 0px; right: 0px; bottom: 0px; clip: rect(0px, 1410px, 831px, 0px);" data-page-id="a4d4d" data-enable-video="true" data-bg-effect-name="BackgroundParallax" data-media-type="WixVideo" data-render-fixed-position="true" data-use-clip-path="" data-needs-clipping="true" class="strc1balata" id="mediaisj0ddbp5balata">
						<div style="width: 100%; height: 100%; top: 0px; background-color: transparent; position: fixed;" data-background-image="" data-position="fixed" class="bgColor" id="mediaisj0ddbp5balatabgcolor">
							<div style="width:100%;height:100%;position:absolute;top:0;background-image:;opacity:1" id="mediaisj0ddbp5balatabgcoloroverlay" class="bgColoroverlay">
							</div>
						</div>

						<div style="min-height: 831px; min-width: 980px; pointer-events: none; top: 0px; transform-style: preserve-3d; width: 1410px; height: 831px; position: fixed; left: 0px;" data-effect="BackgroundParallax" data-fitting="fill" data-align="top" class="bgMedia" id="mediaisj0ddbp5balatamedia">
							<div data-quality="1080p" data-player-type="html5" style="width: 100%; height: 100%; transform: translate3d(0px, -8.6px, 0px);" class="bgVideo" id="mediaisj0ddbp5balatamediavideo">
								<video role="presentation" preload="auto" playsinline="" crossorigin="anonymous" style="opacity: 1; position: absolute; min-width: 1477px; min-height: 831px; left: -33px;" muted="" id="mediaisj0ddbp5balatamediavideovideo" class="bgVideovideo" width="1477" height="831" src="https://video.wixstatic.com/video/11062b_9108ae2752254777a3ac7000818dc9bc/1080p/mp4/file.mp4"></video>
								<div style="opacity: 0; position: absolute; width: 1410px; height: 831px;" data-style="position:absolute" class="bgVideoposter" id="mediaisj0ddbp5balatamediavideoposter">
									<img id="mediaisj0ddbp5balatamediavideoposterimage" alt="" data-type="image" style="width: 1410px; height: 831px; object-fit: cover;" src="https://static.wixstatic.com/media/11062b_9108ae2752254777a3ac7000818dc9bcf000.jpg/v1/fill/w_1410,h_831,al_t,q_85,usm_0.33_1.00_0.00/11062b_9108ae2752254777a3ac7000818dc9bcf000.webp">
								</div>
							</div>
						</div>
						
						<div style="position:absolute;width:100%;height:100%;top:0;background-color:rgba(0, 0, 0, 0.06)" data-background-image="" data-position="fixed" class="bgOverlay" id="mediaisj0ddbp5balataoverlay">
							<div style="width:100%;height:100%;position:absolute;top:0;background-image:;opacity:1" id="mediaisj0ddbp5balataoverlayoverlay" class="bgOverlayoverlay">
							</div>
						</div>
					</div>
					
					<div style="width:100%;position:absolute;top:0;bottom:0" id="mediaisj0ddbp5inlineContent" class="strc1inlineContent">
					</div>
				</div>
				<style type="text/css" data-styleid="strc1">
					.strc1:not([data-mobile-responsive]) > .strc1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
					.strc1[data-mobile-responsive] > .strc1inlineContent {position:relative;}
					.strc1[data-responsive] {display:-ms-grid;display:grid;justify-content:center;grid-template-columns:100%;grid-template-rows:1fr;-ms-grid-columns:100%;-ms-grid-rows:1fr;}
					.strc1[data-responsive] > .strc1inlineContent {display:flex;}
					.strc1[data-responsive] > * {position:relative;grid-row-start:1;grid-column-start:1;grid-row-end:2;grid-column-end:2;-ms-grid-row-span:1;-ms-grid-column-span:1;margin:0 auto;}
				</style>
			</div>
		</section>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href="#ss2">
                <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
                <div class="media-body p-2 mt-2">
                  <h3 class="heading mb-3">Top Product</h3>
                  <p>What's new at OngRut's Bakery???</p>
                </div>
              </a>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href="#ss3">
                <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
                <div class="media-body p-2 mt-2">
                  <h3 class="heading mb-3">More &amp; More</h3>
                  <p>What's new at OngRut's Bakery???</p>
                </div>
              </a>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href="#ss4">
                <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
                <div class="media-body p-2 mt-2">
                  <h3 class="heading mb-3">The Crew at OngRut's Bakery</h3>
                  <p>What's new at OngRut's Bakery???</p>
                </div>
              </a>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <a href="#ss5">
                <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
                <div class="media-body p-2 mt-2">
                  <h3 class="heading mb-3">Our Dedicated Support</h3>
                  <p>What's new at OngRut's Bakery???</p>
                </div>
              </a>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" id="ss2">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Products</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/1.png);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Red sugar flower</a></h3>
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
	    							<span class="price">$2</span>
    							</div>
    						</div>
    						<p></p>
    						<p class="days"><span>BAKERY - SWEET - BIO</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <br>566 Nui Thanh St</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/2.png);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Red sugar flower</a></h3>
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
	    							<span class="price">$2</span>
    							</div>
    						</div>
    						<p></p>
    						<p class="days"><span>BAKERY - SWEET - BIO</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <br>566 Nui Thanh St</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/3.png);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Red sugar flower</a></h3>
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
	    							<span class="price">$2</span>
    							</div>
    						</div>
    						<p></p>
    						<p class="days"><span>BAKERY - SWEET - BIO</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <br>566 Nui Thanh St</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/6.png);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Red sugar flower</a></h3>
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
	    							<span class="price">$2</span>
    							</div>
    						</div>
    						<p></p>
    						<p class="days"><span>BAKERY - SWEET - BIO</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <br>566 Nui Thanh St</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/7.png);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Red sugar flower</a></h3>
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
	    							<span class="price">$2</span>
    							</div>
    						</div>
    						<p></p>
    						<p class="days"><span>BAKERY - SWEET - BIO</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <br>566 Nui Thanh St</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section" id="ss3">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>More</strong> &amp; More</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/11.jpeg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Bob's Well Bread Bakery</a></h3>
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
	    							<span class="price">$3.6</span>
    							</div>
    						</div>
    						<p>Start the Morning Right with This Hand-Held Turkey-Sausage Delight</p>
    						<p class="days"><span>BAKERY - SWEET - BIO</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <br>566 Nui Thanh St</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/12.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#"> Pan de Mie</a></h3>
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
	    							<span class="price">$3.6</span>
    							</div>
    						</div>
    						<p>RoadFood.com Says Bob’s Well Bread is LEGENDARY</p>
    						<p class="days"><span>BAKERY - SWEET - BIO</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <br>566 Nui Thanh St</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/13.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Egg in a Framer</a></h3>
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
	    							<span class="price">$3.6</span>
    							</div>
    						</div>
    						<p> A local farm egg, over easy, in a grilled slice of Pain de Mie with bacon béchamel sauce & bacon lardons.</p>
    						<p class="days"><span>BAKERY - SWEET - BIO</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> <br>566 Nui Thanh St</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light" id="ss4">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
          	<span class="subheading"></span>
            <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
            <p>Welcome To OngRut's Bakery</p>
						<p>Pastries are out by 7am.  Breads are out starting at 7am, and continuing to come out until mid-morning.  Pre-orders require 48 hours notice, as well as pre-payment. Please note that we do occasionally sell out early of many items.  Feel free to call first, before heading our way.</p>
            <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(images/Bobs.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">OngRut Bakery products are hand-made with only the finest ingredients and natural starters. No added preservatives will be found in any of the things we bake, and we strive to source our ingredients locally using farmers and growers who practice the purest growing initiatives.</p>
		                    <p class="name">Bobs</p>
		                    <span class="position">Guest from italy</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(images/Bobs-1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">OngRut Bakery products are hand-made with only the finest ingredients and natural starters. No added preservatives will be found in any of the things we bake, and we strive to source our ingredients locally using farmers and growers who practice the purest growing initiatives.</p>
		                    <p class="name">Bobs</p>
		                    <span class="position">Guest from London</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(images/Bobs-2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">OngRut Bakery products are hand-made with only the finest ingredients and natural starters. No added preservatives will be found in any of the things we bake, and we strive to source our ingredients locally using farmers and growers who practice the purest growing initiatives.</p>
		                    <p class="name">Bobs</p>
		                    <span class="position">Guest from Philippines</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section-parallax" id="ss5">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>OngRut Bakery</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
    require "common/footer.php"
    ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script type="js/main.js"></script>
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