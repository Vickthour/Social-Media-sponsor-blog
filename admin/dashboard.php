
<?php

?>  



<!Doctype html>
<html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin</title>
		
        <link href="../asset/css/font-awesome.css" rel="stylesheet">
        <link href="../asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../asset/css/options.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../asset/css/bootstrap.css"/>
        <script src="../asset/js/bootstrap.min.js"></script>
        <style>
            @font-face{
                font-family: "gotham-pro";
                src: url('../asset/fonts/gotham-pro-regular.eot');
                src: url('../asset/fonts/gotham-pro-regular.eot?#iefix') format('embedded-opentype'),
                url('../asset/fonts/gotham-pro-regular.svg#Gotham Pro') format('svg'),
                url('../asset/fonts/gotham-pro-regular.woff') format('woff'),
                url('../asset/fonts/gotham-pro-regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }  
        </style>
        <script src="../asset/js/jquery-3.5.1.min.js"></script>
        <script src="../asset/js/bootstrap.js"></script>
        </head>
        <body onload="content_load()">
        <main>
            <div class="container-fluid"> 
                <div class="">
                    <div class="col-md-3 sidebar">

                        <div class="sidemenu">
                                <a href="?menu=dsh"> <i class="fa fa-tachometer"> </i> Dashboard</a>
                                <a href="?menu=contact"> <i class="fa fa-home"> </i> Dashboard</a>
                                <a href="#"> <i class="fa fa-home"> </i> Dashboard</a>
                                <a href="#"> <i class="fa fa-home"> </i> Dashboard</a>
                        </div>   

                    </div>
                     
                    <div class="col-md-9">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                    if(isset($_GET['menu'])){
                                        $menu = $_GET['menu'];
                                        if($menu == "dsh"){
                                            require "pages/achat.php";
                                        }elseif($menu == "contact"){
                                            require"../chat.php";
                                        }
                                    }
                                
                                ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </main>   
    

  </body>
</html>  
      

<?php } ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  
    
