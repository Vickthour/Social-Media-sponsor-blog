<?php
include('../pages/db.php');
$obj = new Db();
$con = $obj->connect();
?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Facebook | Service</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->

</head>
<body>
    <section class="w3l-banner-slider-main inner-pagehny">
        <div class="breadcrumb-infhny">
      
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
                      <span class="search-text">Search here</span></a>
                    <!-- search popup -->
      
      
                    <div id="search" class="pop-overlay">
                      <div class="popup">
      
                        <form action="#" method="post" class="search-box">
                          <input type="search" placeholder="Keyword" name="search" required="required" autofocus="">
                          <button type="submit" class="btn">Search</button>
                        </form>
      
                      </div>
      
                      <a class="close" href="#">×</a>
                    </div>
                    <!-- /search popup -->
                  </div>
                  <!--//search-right-->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon fa fa-bars"> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/about.php">About</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                aria-expanded="false">What we offer
                            </a>
                            <div class="dropdown-menu second mt-2" style="display: none;">
                                <a class="dropdown-item scroll" href="instagram.php">Instagram</a>
                                <a class="dropdown-item" href="facebook.php">Facebook</a>
                                <a class="dropdown-item" href="twitter.php">Twitter</a>
                                <a class="dropdown-item" href="youtube.php">TikTok</a>
    
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item scroll" href="#feedback">Account Mangement</a>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="../pages/contact.php">Contact</a>
                        </li>
                        
                    </ul>

                    <div class="transmitvcart galssescart2 cart cart box_1 top-right-strip ">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="top_transmitv_cart" type="submit" name="submit" value="">
                                My Cart
                                <span class="fa fa-shopping-cart"></span>
                            </button>
                        </form>
                    </div>
      
                  </div>
                </div>
              </nav>
              <!--//nav-->
            </header>
            <div class="breadcrumb-contentnhy">
              <div class="container">
                <nav aria-label="breadcrumb">
                  <h2 class="hny-title text-center">About Us</h2>
                  <ol class="breadcrumb mb-0">
                    <li><a href="index.html">Home</a>
                      <span class="fa fa-angle-double-right"></span></li>
                    <li class="active">About</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
      </section>




      <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
                <p class="text-center">Handpicked Favourites just for you</p>
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-5 mt-3">
                    <?php
                    $i = 0;
                    $check = 'Facebook';
                    $details=$con->query("SELECT * from posts where post_name='$check' ");
                    $rowCount = $details->rowCount();
                    $fetch = $details->fetchAll(PDO::FETCH_ASSOC);
                    if($rowCount > 0){
                        foreach($fetch as $data){



                            $i++;
                            ?>

                    <div class="col-lg-3 col-6 product-incfhny mt-4">

                        <div class="product-grid2 transmitv">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="<?php echo  $data['image'] ?>">
                                    <img class="pic-2 img-fluid" src="<?php echo  $data['image'] ?>">
                                </a>
                                <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
    
                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                </ul>
                                <div class="transmitv single-item">
                                <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="<?php echo $data['post_name'] ?>">
                                        <input type="hidden" name="amount" value="<?php echo $data['price'] ?>">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#"><?php echo  $data['post_name'] ?> </a></h3>
                                <span class="price"><del><?php echo  '#' . ($data['price'] - 10); ?></del> <?php echo '#'.$data['price'] ?></span>
                            </div>
                        </div>
                    </div>
                    <?php } } ?>
    
                </div>
                <!-- //row-->
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
            <i style="background: #ff7315; color: #fff">Social</i><span class="lohny" style="font-family: cursive;">Like</span>s</a></h3>
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
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
              scrollFunction()
          };

          function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  document.getElementById("movetop").style.display = "block";
              } else {
                  document.getElementById("movetop").style.display = "none";
              }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
          }
      </script>
      <!-- /move top -->
  </section>
    
</body>

<script src="../assets/js/minicart.js"></script>
<script>
    transmitv.render();

    transmitv.cart.on('transmitv_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
</html>
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/jquery-2.1.4.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

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
</script>