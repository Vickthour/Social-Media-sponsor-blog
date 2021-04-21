<?php
include('../pages/db.php');
$obj = new Db();
$con = $obj->connect();

$admin=$_GET['py'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin panel - DashBoard</title>
        <link href="../assets/css/font-awesome.css" rel="stylesheet">
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery-3.3.1.min.js"></script>
    </head>
    <body>
       
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="dash.php"><i class="fa fa-lock"></i> Adminpanel</b></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="tipDel.php"><i class="fa fa-sign-out"></i>  Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       

        <div class="container-fluid" style="margin-top:50px; background:#666;">
            <div class="row">
                <div class="col-sm-3">
                    <br/>
                    <div class="well well-md">
                        <ul class="nav">
                            <li class="" style="background:#232020; color: white; text-align:center; font-size:25px; padding:0px 0px; margin:0px"><i class="fa fa-tachometer"> </i> Dashboard </li>
                            <li><a href="dash.php?u"><span class="fa fa-user"></span> Check Site Visitors</a></li>
                            <li><a href="dash.php?jay"><span class="fa fa-product-hunt"></span> Add Product</a></li>
                            <li><a href="dash.php?s"><span class="fa fa-upload"></span> Upload Product</a></li>
                        </ul>
                    </div>
                </div>
                 <!--
                    ==================
                        right Side
                    ==================
                 -->
                <div class="col-sm-9" style="background:#fdfdfd">
                    <!-- container-fluid-->
                      <?php 
                      if(isset($_GET['u'])){
                          include('user.php');
                      }
                      else if(isset($_GET['a'])){
                          require 'pages/achat.php';
                      }
                      else if(isset($_GET['s'])){
                          include('uploaded_post.php');
                      }
                      else if(isset($_GET['jay'])){
                          include('add_post.php');
                      }
                      else{  
                    ?>
                    <h1 class="page-header">Website Dashboard</h1>
                    <h3>Welcome ! <?php echo ucwords($admin); ?> </h3>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="well" style="border-radius:0px; padding-bottom:0px; box-shadow:2px 2px 3px 0px;">
                                <table class="table table-bordered table-hover table-striped">
                    
                                    <tr>
                                        <td colspan="2" style="background:#555; color:#fff; text-align:center; font-size:20px;">Website Stats</td>
                                    </tr>

                                  	

                                    <tr>
                                                <td align="center" width="50%"><b>Total Users </b></td>
                                                <td align="center" width="50%">
                                                    <b>
                                                        <?php

                                                            $query = $con->query("SELECT * from users");
                                                            echo  $rowCount = $query->rowCount();
                                                              $fetch = $query->fetchAll(PDO::FETCH_ASSOC);
                                                            ?>
                                                    </b>
                                                </td>
                                            </tr>	

                                    <tr>
                                                <td align="center" width="50%"><b>Total Admins (Expert)</b></td>
                                                <td align="center" width="50%">
                                                    <b>
                                                        <?php

                                                        $quer = $con->query("SELECT * from admin_login ");
                                                        echo  $rowCounter = $quer->rowCount();
                                                        $fetch = $quer->fetchAll(PDO::FETCH_ASSOC);
                                                        ?>
                                                    </b>
                                                </td>
                                            </tr>	

                                   
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <?php } ?>
                </div>
            </div>
        </div>
        <!--
        ==================
            Footer Section
        ==================
        -->
        <footer class="container-fluid" style="background:#232020; font-size:19px; color:white;">
            <p align="center">Copyright &copy; 2021</p>
            <p align="center">SocialLikes.Ng</p>
        </footer>
        <script src="../asset/js/bootstrap-3.5.1.min.js"></script>
        <script src="../asset/js/jquery-3.5.1.min.js"></script>
    </body>
</html>
