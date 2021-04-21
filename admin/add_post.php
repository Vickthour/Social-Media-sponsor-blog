<br/>
<div class="col-md-8 col-md-offset-2">
    <div class="login-panel panel panel-default" style="border-radius:0px; box-shadow:2px 2px 2px 0px;">
        <div>
            <h3 align="center"><i class="fa fa-copy"></i> Upload Tips </h3>
        </div>
        <hr/>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="panel-body" style="margin-top:-15px;">
                <fieldset>


                    <div class="form-group">
                        <label>Product Name</label>
                        <select class="form-control" name="name" >
                            <option name="name" value="Facebook">Facebook</option>
                            <option name="name" value="Instagram">Instagram</option>
                            <option name="name" value="Twitter">Twitter</option>
                            <option name="name" value="Youtube">Youtube</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Product Price</label>
                        <input class="form-control" type="decimal" name="price" placeholder="Product price For 50 (#)" required/>
                    </div>

                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" name="description" placeholder="Product Detials" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Product Categories</label>
                        <select class="form-control" name="category" >
                            <option name="category" value="Likes">Likes</option>
                            <option name="category" value="Comments">Comments</option>
                            <option name="category" value="Views">Views</option>
                            <option name="category" value="Followers">Followers</option>
                            <option name="category" value="Subscribers">Subscribers</option>
                            <option name="category" value="Share">Share</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Product Picture</label>
                        <input class="form-control" name="image" type="file" placeholder="Product Detials" accept=".jpg, .png, .jpeg" required>
                    </div>

                    <?php
                    $json = file_get_contents("php://input");
                    $obj = json_decode($json,true);
                    if(isset($_POST['submit']))
                    {//1st starts

                        $target_dir = "../uploads/" . rand() . "_" . time() . ".jpg, .png, .jpeg";

                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $description = $_POST['description'];
                        $category = $_POST['category'];
                        $date = date("l jS \of F Y H:i:s A");

                        if(move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)) {
                            echo "uploaded";
                        }else{
                            echo "Not uploaded!";
                        }

                         // $check = $con->query("SELECT * FROM posts where post_name = '$name' AND category = '$category' ");
                         // $seer = mysqli_num_rows(mysqli_query($con,$check));

                         //    if($seer == '1'){
                         //        echo "Existed poooooooo";

                         //    }else{

                                $true = $con->query("INSERT INTO posts(post_name,price,category,description,image,dateAdded) VALUES('$name','$price','$category','$description','$target_dir','$date') ");
                                // Receiving image sent from Application

                                if ($true) {
                                    echo "<p class='alert alert-success'><strong>Successfully Uploded !</strong></p>";
                                }else {
                                    echo "<script>alert('Error!!!')</script>";
                                }  
                            
                    }// isset bracket ends here
                    ?>
                </fieldset>
            </div>
            <div class="panel-footer">
                <center>
                    <button name="submit" type="submit" class="btn btn-success" style="padding:12px 20px;"> <i class="fa fa-send"></i> Submit  </button>
                </center>
            </div>
        </form>
    </div>
</div>