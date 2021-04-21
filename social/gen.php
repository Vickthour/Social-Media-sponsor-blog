<?php
session_start();
include('../pages/db.php');
$obj = new Db();
$con = $obj->connect();
$alert = '';
$track = $_GET['id'];

if(isset($_POST['add_cart'])){
    if(isset($_SESSION['shopping_cart'])){
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
            if (!in_array($_GET['id'], $item_array_id)){
                $count = count($_SESSION['shopping_cart']);

                $item_array = array(
                    'item_id' => $_GET['id'],
                    'item_name' => $_POST['item_name'],
                    'item_cat' => $_POST['item_cat'],
                    'item_amount' => $_POST['amount'],
                    'item_quantity' => $_POST['quantity'],
                    'item_link' => $_POST['link'],

                );
                $_SESSION['shopping_cart'][$count] = $item_array;

              $alert = "<div class='alert alert-success alert-dismissible col-md-6'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Successfully Added to your cart !</strong><button data-toggle='modal' data-target='#myModal1' class='alert alert-link' >View cart?</button></div>";
            }else{
                $alert = "<div class='alert alert-danger alert-dismissible col-md-6'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Already Added to the cart !</strong></div>";
            }
    }else{
        $item_array = array(
            'item_id' => $_GET['id'],
            'item_name' => $_POST['item_name'],
            'item_cat' => $_POST['item_cat'],
            'item_amount' => $_POST['amount'],
            'item_quantity' => $_POST['quantity'],
            'item_link' => $_POST['link'],
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}


if(isset($_GET['action'])){
    if ($_GET['action'] == "delete"){
        foreach ($_SESSION['shopping_cart'] as $keys => $values){
            if ($values["item_id"] == $_GET["id"]){
                unset($_SESSION['shopping_cart'][$keys]);
                 header('location: '. $_SERVER['HTTP_REFERER']);
                 exit;


            }
        }
    }
}

                      if(isset($_GET['id'])){
                      $details=$con->query("SELECT * from posts where id='$track' ");
                      }
                      else{
                        header('location: '. $_SERVER['HTTP_REFERER']);
                      }                              
                        

?>

<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Youtube | Services</title>
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
                     <i style="background: #ff7315; ">Social</i><span class="lohny" style="font-family: cursive;">Like</span>s</a>                  <!-- if logo is image enable this   
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
              <li class="nav-item dropdown">
                <a class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                  aria-expanded="false">Instagram
                </a>
                <div class="dropdown-menu second mt-2" style="display: none;">
                  <a class="dropdown-item scroll" href="instagram.php?ubas8">Buy Instragram Likes</a>
                  <a class="dropdown-item" href="instagram.php?jaysw%h">Buy Instragram Views</a>
                  <a class="dropdown-item" href="instagram.php?s2gst">Buy Instragram Comments</a>
                  <a class="dropdown-item" href="instagram.php?aya7t">Buy Instragram Followers</a>

                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item scroll" href="pages/contact.php">Book for Account Mangement</a>
                </div>
              </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                   aria-expanded="false">Youtube
                                </a>
                                <div class="dropdown-menu second mt-2" style="display: none;">
                                    <a class="dropdown-item scroll" href="youtube.php?ujfyf4">Buy Youtube Likes</a>
                                    <a class="dropdown-item" href="youtube.php?chdud4f">Buy Youtube Views</a>
                                    <a class="dropdown-item" href="youtube.php?dhyfc">Buy Youtube Comments</a>
                                    <a class="dropdown-item" href="youtube.php?4hdfy">Buy Youtube Subscriber</a>
                                    <a class="dropdown-item" href="youtube.php?jgfyr">Buy Youtube Share</a>
                                </div>
                            </li>


              <li class="nav-item">
                <a class="nav-link" href="../pages/contact.php">Contact</a>
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

             <?php   $rowCount = $details->rowCount();
                    $fetch = $details->fetchAll(PDO::FETCH_ASSOC);
                    if($rowCount > '0'){
                        foreach($fetch as $data){
                          $i++;
                          ?>
            <div class="breadcrumb-contentnhy">
              <div class="container">
                <nav aria-label="breadcrumb">
                  <h2 class="hny-title text-center">Buy <?php echo $data['post_name'].' '.$data['category']; ?></h2>
                  <ol class="breadcrumb mb-0">
                    <li><a href="index.html">Home</a>
                      <span class="fa fa-angle-double-right"></span></li>
                    <li class="active">Services</li>
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
                <div class="container">
                  <div class="row">
                    <p><?php echo $alert; ?></p>

                     <div class="col-md-6 text-center">
                        <img class="lg-6 img-fluid" src="<?php echo  $data['image'] ?>">
                        <h3 class="hny-title mb-0"><?php echo $data['category'];?></h3>
                     </div>
                     
                     <div class="col-md-6">

                        <h3 class="hny-title mb-0 text-center"><?php 
                                echo $data['post_name']." ".$data['category'];
                        
                        ?>
                       </h3>
                       

                                  <div class="transmitv single-item">
                                    <hr/>
                                    <span class="price" style="font-weight: bolder;font-family: 'Work Sans',sans-serif;">
                                        <?php echo '#'.($data['price']/50) * 50 ?> - <?php echo '#'.($data['price']/50) * 20000 ?>
                                        
                                      </span>
                                  <form action="instagram.php?action&id=<?php echo $data['id']; ?>" method="post" oninput="x.value=parseInt(a.value) * (parseInt(b.value)/50)" >

                                        <input type="hidden" name="item_name" value="<?php echo $data['post_name'] ?>">
                                        <input type="hidden" id="a" name="amount" value="<?php echo $data['price'] ?>">
                                        <input type="hidden" name="item_cat" value="<?php echo $data['category'] ?>">

                                        <select class="add-to-cart_bad text-center" id="b" name="quantity">
                                            <option name="quantity" value="50" > 50 <?php echo $data['category'] ?> </option>
                                            <option name="quantity" value="100" > 100 <?php echo $data['category'] ?></option>
                                            <option name="quantity" value="200" > 200 <?php echo $data['category'] ?></option>
                                            <option name="quantity" value="500" > 500 <?php echo $data['category'] ?></option>
                                            <option name="quantity" value="1000" > 1K <?php echo $data['category'] ?></option>
                                            <option name="quantity" value="2000" > 2K <?php echo $data['category'] ?></option>
                                            <option name="quantity" value="3000" > 3K <?php echo $data['category'] ?></option>
                                            <option name="quantity" value="5000" > 5K <?php echo $data['category'] ?></option>
                                            <option name="quantity" value="10000" > 10K <?php echo $data['category'] ?></option>
                                            <option name="quantity" value="15000" > 15K <?php echo $data['category'] ?></option>
                                            <option name="quantity" value="20000" > 20K <?php echo $data['category'] ?></option>
                                            
                                        </select>
                                        <hr>

                                        <h3># <output name="x" for="a b"></output></h3>
                                        <hr>

                                        <code>
                                          Please enter a link to your youtube video(https://www.youtube.com/watch?v=4tIno223yGk)
                                        </code>
                                        <input type="text" name="link" class="form-control" placeholder="e.g : https://www.instagram.com/hd647" required><br/>

                                        <span></span>
                                        <button type="submit" name="add_cart" class="add-to-cart_bad">
                                            Add to Cart
                                        </button>
                                  </form>                                              
                                </div>                       
                      </div>
                  </div> 
                    <h3 class="hny-title mb-0">Description</h3>
                    <span><?php echo $data['description']; ?></span>                          
                </div>

                 <?php }}else{

                    echo "<script>window.open('../index.php','_self');</script>";

                 } ?>
                <!-- //row-->
<hr/>




                

            <Section>
               <div class="ecom-products-grids row mt-lg-5 mt-3">
                    <?php
                    $i = 0;
                    $details=$con->query("SELECT * from posts order by 1 desc");
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
                                <form action="../social/gen.php?id=<?php echo $data['id']; ?>" method="post">
                                        <input type="hidden" name="item_name" value="<?php echo $data['post_name'] ?>">
                                        <input type="hidden" name="amount" value="<?php echo $data['price'] ?>">
                                        <input type="hidden" name="item_cat" value="<?php echo $data['category'] ?>">

                                        <button type="submit" class="transmitv-cart add-to-cart">
                                            Select Option
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2 class="title"><a href="#"><?php echo  $data['post_name'].'</h2><h6>'.$data['category'].'</h6>' ?> </a>
                                <span class="price"><?php echo  '#' . (($data['price']/50) * 50); ?>  - <?php echo '#'.(($data['price']/50) * 20000); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php } } ?>
                   
                </div>
            </Section>
                
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

                              <td><?php echo number_format(($values['item_quantity']/50) * ($values['item_amount']), 2) ?></td>
                              <td><a href="instagram.php?action=delete&id=<?php echo $values['item_id']?>"><i class="fa fa-trash"></i></td>
                          </tr>

                          <?php
                                // $total = $total + ($values["item_quantity"] * $values["item_amount"]);
                            }
                          
                          }else{ 
                            echo "<tr><td colspan='100'><div class='alert alert-danger alert-dismissible col-md-12'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Your cart is empty !</strong></div></td></tr>";
                        }
                          ?>


                      </table>
                      <div class="row" style="display: flex; flex-direction:row;justify-content: space-between;">
                        <div class="btn btn-danger col-md-3 col-sm-6" data-dismiss="modal">Close</div>
                        <a class="btn btn-success col-md-3 col-sm-6" href="../pages/checkout.php">Checkout</a>
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
<script src="//code.tidio.co/imvr4rybbldsxri1qbbnqap2fhz08esc.js" async></script>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
$("#quan").change(function(){
  var val = $(this).val();
  $('#quan').val(val);
  $('#quan').val(val*#amt);
});

</script>