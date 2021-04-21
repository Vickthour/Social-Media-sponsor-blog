<?php session_start(); 


if(isset($_GET['action'])){
    if ($_GET['action'] == "delete"){
        foreach ($_SESSION['shopping_cart'] as $keys => $values){
            if ($values["item_id"] == $_GET["id"]){
                unset($_SESSION['shopping_cart'][$keys]);
               
                echo '<script>window.location="index.php"</script>';

            }
        }
    }
}
?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Ade,Ademola Akomolede,Sociallikes,buy likes,instagram likes,facebook likes,views,youtube likes,cart,influncer,social media">
  <title>SocailLikes | Home</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->

</head>
<body>
	
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider-main">
	<div class="top-header-content">
		<header class="tophny-header">
			<p></p>
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="index.php" style="border-top: 2px solid #ff7315;border-right: 2px solid #ff7315;">
						<i style="background: #ff7315; ">Social</i><span class="lohny" style="font-family: cursive;">Like</span>s</a>
					<!-- if logo is image enable this
							<a class="navbar-brand" href="#index.php">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					<!--/search-right-->
					<div class="search-right">

						<a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
							<span class="search-text"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Keyword" name="search" required="required"
										autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>

							</div>
							<a class="close" href="#">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="pages/about.php">About</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
									aria-expanded="false">Instagram
								</a>
								<div class="dropdown-menu second mt-2" style="display: none;">
									<a class="dropdown-item scroll" href="social/instagram.php?ubas8">Buy Instragram Likes</a>
									<a class="dropdown-item" href="social/instagram.php?jaysw%h">Buy Instragram Views</a>
									<a class="dropdown-item" href="social/instagram.php?s2gst">Buy Instragram Comments</a>
									<a class="dropdown-item" href="social/instagram.php?aya7t">Buy Instragram Followers</a>

									<div class="dropdown-divider"></div>
									<a class="dropdown-item scroll" href="pages/contact.php">Book for Account Mangement</a>
								</div>
							</li>

                            <li class="nav-item dropdown">
                                <a class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                   aria-expanded="false">Youtube
                                </a>
                                <div class="dropdown-menu second mt-2" style="display: none;">
                                    <a class="dropdown-item scroll" href="social/youtube.php?ujfyf4">Buy Youtube Likes</a>
                                    <a class="dropdown-item" href="social/youtube.php?chdud4f">Buy Youtube Views</a>
                                    <a class="dropdown-item" href="social/youtube.php?dhyfc">Buy Youtube Comments</a>
                                    <a class="dropdown-item" href="social/youtube.php?4hdfy">Buy Youtube Subscriber</a>
                                    <a class="dropdown-item" href="social/youtube.php?jgfyr">Buy Youtube Share</a>
                                </div>
                            </li>


							<li class="nav-item">
								<a class="nav-link" href="pages/contact.php">Contact</a>
							</li>

						</ul>


								<div class="transmitvcart galssescart2 cart cart box_1 top-right-strip ">
                                      <button class="top_transmitv_cart" type="submit" name="submit" data-toggle="modal" data-target="#myModal1" >
                                          My Cart
                                          <span class="fa fa-shopping-cart"></span>
                                      </button>
                                 
                                </div>

					</div>
				</div>
			</nav>
			<!--//nav-->
		</header>
		<div class="slider">

			<!--/banner-slider-->
			<div class="content-baner-inf">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item item4 active">
							<div class="container">
								<div class="carousel-caption">
									<h6><strong>Buy</strong><span style="background:rgba(16, 16, 16, 0.470588)"> Followers, Likes, Views & Subscribers</span></h6>
									
									<h4>We Help You To Grow <span style="font-family: cursive;">Your</span>
										<br>Social Networks.</h4>
									<a href="#services" class="shop-button btn">
										Get Started
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//banner-slider-->
			<!--//banner-slider-->

		</div>


</section>


<section class="w3l-content-w-photo-6">
	<!-- /specification-6-->
	  <div class="content-photo-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="align-photo-6-inf-cols row">
						
						<div class="photo-6-inf-right col-lg-6">
								<h3 class="hny-title text-left">Committed To Increase Your <span>Social Proof</span></h3>
								<p>Let SocailLikes do the hardwork to increase your social proof and Improve your Video Rankings</p>
								<a href="pages/services.php" class="read-more btn">
										Get Started
								</a>
						</div>
						<div class="photo-6-inf-left col-lg-6">
								<img src="assets/images/bg4.jpg" class="img-fluid" alt="">
						</div>
					</div>
				 </div>
			 </div>
	 </section>
   <!-- //specification-6-->

		<div class="overlay">
			<div class="overlayDoor"></div>
			<div class="overlayContent">
				<div class="loader">
					<div class="inner"></div>
				</div>
		</div>
		</div>
     
<section class="w3l-video-6">
	<!-- /video-6-->
	<div class="video-66-info">
		<div class="container-fluid">
			<div class="video-grids-info row">
				<div class="video-gd-right col-lg-8">
					<div class="video-inner text-center">
								<!--popup-->
									<a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
											<span class="fa fa-play" aria-hidden="true"></span>
									</a>
									<div id="small-dialog" class="mfp-hide">
										<div class="search-top notify-popup">
												<iframe src="https://player.vimeo.com/video/246139491" frameborder="0"
												allow="autoplay; fullscreen" allowfullscreen></iframe>
										</div>
									</div>
									<!--//popup-->
					</div>
				  </div>
				<div class="video-gd-left col-lg-4 p-lg-5 p-4">
					<div class="p-xl-4 p-0 video-wrap">
						<h3 class="hny-title text-left">Increase Your YouTube <span>Ranking</span>
						</h3>
						<p>Let SocailLikes use its Awesome Social Media Marketing Techniques to increase your social awareness.</p>
						<a href="#" class="read-more btn">
							Get Started
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- //video-6-->
<section class="features-4">
    <div class="features4-block py-5">
        <div class="container py-lg-5">
            <h6>We are the best</h6>
            <h3 class="hny-title text-center">Our<span>Services</span></h3>

            <div class="features4-grids text-center row mt-5">
                <div class="col-lg-3 col-md-6 features4-grid">
                    <div class="features4-grid-inn">
                        <img src="assets/images/you.png" class="icon-fea4" width="90" height="70">
                        <h5><a href="#URL">Youtube</a></h5>
                        <p>Buy High Retention YouTube, Subscribers, Views, Likes and Comments To Boost Your Videos and YouTube Channels.</p>

                        <a href="pages/services.php?yout" class="read-more btn">
                            Get Started
                        </a>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
                    <div class="features4-grid-inn">
                        <img src="assets/images/insta.png" class="icon-fea4" width="75" height="75">
                        <h5><a href="#URL">Instagram</a></h5>
                        <p>Buy Your Instagram Likes, Views and targeted Followers to Increase your Brand’s Awareness on Instagram.</p>

                        <a href="pages/services.php?insta" class="read-more btn">
                            Get Started
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 features4-grid">
                    <div class="features4-grid-inn">
                        <img src="assets/images/twit.jpg" class="icon-fea4" width="75" height="75">
                        <h5><a href="#URL">Twitter</a></h5>
                        <p>Buy High Quality Twitter Likes, Followers and targeted Retweets to Increase your Brand’s Awareness on Twitter.</p>

                        <a href="#" class="read-more btn">
                            Get Started
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 features4-grid">
                    <div class="features4-grid-inn">
                        <img src="assets/images/face.png" class="icon-fea4" width="100" height="75">
                        <h5><a href="#URL">Facebook</a></h5>
                        <p>Buy High Quality Facebook Likes, Views , Share and targeted Followers to Increase your network on Facebook.</p>

                        <a href="#" class="read-more btn" >
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //products-->
<section class="w3l-content-5" id="services">
	<!-- /content-6-section -->
	<div class="content-5-main">
		<div class="container">
			<div class="content-info-in row">
				<div class="content-gd col-md-6 offset-lg-3 text-center">
					<h3 class="hny-title two">
						Our
						<span>Services</span></h3>
					<p>We provide the best Social Media Marketing Services. Famous celebrities, musicians, bloggers, 
						artists, companies and marketers from all over the world are using SocailLikes YouTube,
						Instagram and Facebook promotion services in order to go Viral and Increase their Brand Awareness.</p>
					<a href="pages/services.php" class="read-more-btn2 btn">
						Check Out
					</a>

				</div>

			</div>

		</div>
	</div>
</section>


		<section class="cart_section">

          <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
            <!-- Modal1 -->
              <div class="modal-dialog container">
              <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    
                    <div class="col-md-12">
                      <table class="table table-border">
                        <tr>
                          <th width="15%">Name</th>
                          <th width="15%">Category</th>
                          <th width="5%">Quantity</th>
                          <th width="10%">Total</th>
                          <th width="10%" align="left">Action</th>
                        </tr>

                        <?php 

                          if (!empty($_SESSION["shopping_cart"])){
                              $total = 0;
                              foreach ($_SESSION['shopping_cart'] as $keys => $values){

                        ?>                  
                          <tr>
                              <td><?php echo $values['item_name']; ?></td>
                              <td><?php echo $values['item_cat']; ?></td>
                              <td><?php echo $values['item_quantity']; ?></td>

                              <td><?php echo number_format($values['item_quantity'] * $values['item_amount'], 2) ?></td>
                              <td><a href="index.php?action=delete&id=<?php echo $values['item_id']?>"><i class="fa fa-trash"></i></td>
                          </tr>

                          <?php
                                // $total = $total + ($values["item_quantity"] * $values["item_amount"]);
                            }
                          
                          }else{ 
                            echo "<tr><td colspan='100'><div class='alert alert-danger alert-dismissible col-md-12 col-sm-10'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Your cart is empty !</strong></div></td></tr>";
                        }
                          ?>


                      </table>
                      <div class="row" style="display: flex; flex-direction:row;justify-content: space-between;">
                        <div class="btn btn-danger col-md-3 col-sm-3" data-dismiss="modal">Close</div>
                        <a class="btn btn-success col-md-3 col-sm-3" href="checkout.php">Checkout</a>
                      </div>

                  </div>
                    
                </div>
              </div>
            </div>
          </div>
      </section>



  <section class="w3l-footer-22">
      <!-- footer-22 -->
      <div class="footer-hny py-1">
          <div class="container py-lg-3">
              <div class="text-txt row">
                  <div class="left-side col-lg-6">
                      <h3><a class="navbar-brand" href="index.php" style="border-top: 2px solid #ff7315;border-right: 2px solid #ff7315;">
						<i style="background: #ff7315; color: #fff">Social</i><span class="lohny" style="font-family: cursive;">Likes</span></a></h3>
                      <p>We work hard to increase your social proof and Networks </p>
                      <ul class="social-footerhny mt-lg-5 mt-4">

                          <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                          </li>
                      </ul>
                  </div>

                  <div class="right-side col-md-6 pl-md-5">
                      
                          <div class="sub-two-right">
                              <h6>We accept:</h6>
                              <ul>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-visa"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-mastercard"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-paypal"
                                              aria-hidden="true"></span></a>
                                  </li>
                                  <li><a class="pay-method" href="#"><span class="fa fa-cc-amex"
                                              aria-hidden="true"></span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  <div class="text-lg-right">
                      <p>© 2021 SocialLikes.Ng All rights reserved.
                  </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- //titels-5 -->
      <!-- move top -->



      <script>

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
          }
      </script>
      <!-- /move top -->
  </section>

<script src="//code.tidio.co/imvr4rybbldsxri1qbbnqap2fhz08esc.js" async></script>
  </body>

  </html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<!--//login-->
<script>
// optional
		$('#customerhnyCarousel').carousel({
				interval: 5000
    });
  </script>
 <!-- cart-js -->
 <!-- //cart-js -->
<!--pop-up-box-->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="assets/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function () {
		$(".dropdown").hover(
			function () {
				$('.dropdown-menu', this).stop(true, true).slideDown("fast");
				$(this).toggleClass('open');
			},
			function () {
				$('.dropdown-menu', this).stop(true, true).slideUp("fast");
				$(this).toggleClass('open');
			}
		);
	});


	$(document).ready(function() {
	// Users can skip the loading process if they want.
	$('.skip').click(function() {
		$('.overlay, body').addClass('loaded');
	})
	
	// Will wait for everything on the page to load.
	$(window).bind('load', function() {
		$('.overlay, body').addClass('loaded');
		setTimeout(function() {
			$('.overlay').css({'display':'none'})
		}, 2000)
	});
	
	// Will remove overlay after 1min for users cannnot load properly.
	setTimeout(function() {
		$('.overlay, body').addClass('loaded');
	}, 60000);
});
	
</script>

