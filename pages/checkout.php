<?php
session_start();
include('db.php');
$obj = new Db();
$con = $obj->connect();
if(isset($_GET['action'])){
   if ($_GET['action'] == "delete"){
       foreach ($_SESSION['shopping_cart'] as $keys => $values){
              if ($values["item_id"] == $_GET["id"]){
                unset($_SESSION['shopping_cart'][$keys]);
              
               echo '<script>window.location="checkout.php"</script>';

           }
       }
   }
}


if (isset($_POST['checkout'])) {
       $link = $_POST['link'];
       $email = $_POST['email'];
       foreach ($_SESSION['shopping_cart'] as $keys => $val){
           $product_type = $val['item_name'];
           $category = $val['item_cat'];

         }
           $date = date("l jS \of F Y H:i:s A");

       $process = $con->query("INSERT INTO users(email,product_type,category,link,dated) VALUES('$email','$product_type','$category','$link','$date') ");

}

?>
<!doctype html>
<html lang="zxx">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SocialLikes | CheckOut</title>

  <link rel="stylesheet" href="../assets/css/style-starter.css">

  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">


</head>
<body>
   <section class="container">
       <div class="jumbotron">
           <h1 class="title">Checkout</h1>
       </div>

       <div class="form-group">
          <form method="post">
            <label>Enter Email: <span style="color: red;">*</span></label>
            <input type="text" id = "email" name="email" class="form-control col-md-4" placeholder="Enter Valid mail" required>

       
                        <div class="col-md-12">
                            <table class="table table-border">
                                <tr>
                                    <th width="15%">Name</th>
                                    <th width="15%">Category</th>
                                    <th width="10%">Quantity</th>
                                    <th width="10%">Total</th>
                                    <th width="30%">Link</th>
                                    <th width="5%">Action</th>
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

                                            <td><?php echo number_format(($values['item_quantity']/50) * $values['item_amount'], 2) ?></td>
                                            <td><input type="text" name="link" class="form-control col-md-8" value="<?php echo $values["item_link"] ?>" required><i>Confirm social media link</i></td>
                                            <td><a href="checkout.php?action=delete&id=<?php echo $values['item_id']?>"><i class="fa fa-trash"></i></td>
                                              
                                        </tr>

                                        <?php
                                        $total = $total + (($values["item_quantity"]/50) * $values["item_amount"]);

                                        $fin = number_format($total,2);

                                    } ?>

                                    <tr>
                                    	<td colspan="3" align="right"><strong>Total</strong></td>
                                    	<td><?php echo $fin; ?></td>
                                      <input type="hidden" value='<?php echo $total; ?>' id="amount">
                                    	<td></td>
                                    </tr>

                                    <?php
                                

                                }else{
                                    echo "<tr><td colspan='100'><div class='alert alert-danger alert-dismissible col-md-12'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Your cart is empty !</strong></div></td></tr>";
                                }
                                ?>


                            </table>
                            <div class="row">
                                <a class="btn btn-secondary name='checkout' col-md-3 col-sm-3" href="">Check Other products</a>
                                <script src="https://js.paystack.co/v1/inline.js"></script>
                                   <button type="button" name="checkout" class="btn btn-success col-md-3" onclick="payWithPaystack()">Pay</button>
                            </div>

                        </div>

            </form>
       </div>

   </section>
<script src="//code.tidio.co/imvr4rybbldsxri1qbbnqap2fhz08esc.js" async></script>
</body>
                  


</html>

<!-- place below the html form -->
<script>
  function payWithPaystack(){
    
    if (document.getElementById("email").value === "") {
      alert('Please enter a valid email');
    }
    else
    var handler = PaystackPop.setup({
      key: 'pk_live_18496583bb332c8b9c62d167c806e7b09611aa9d',
      email: document.getElementById("email").value,
      amount: document.getElementById("amount").value * 100,
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
          window.location="debug.php"
      },
      onClose: function(){
          alert('window closed');
      }
    }

    );
    handler.openIframe();
  }

</script>
