<?php
include('../pages/db.php');
$obj = new Db();
$con = $obj->connect();

    if(@$_GET['j']){
        $delete = @$_GET['j'];
        $query = "DELETE from posts where id='$delete'";
        $run = $con->query($query);
        if($run){
            echo "<script>window.open('dash.php?s','_self');</script>";
        }
        else
        {
            echo "lol";
        }
    } 

?>




















<div class="col-md-12" style="background-color:none;">
                <div style="border-radius:0px; box-shadow:0px 0px 3px #fc3c2a;margin-bottom:50px">
                    <div>
                        <h3 align="center" style="color:white"><i class="glyphicon glyphicon-copy"></i>  SUBSCRIBE NOW</h3>
                    </div>
					<hr/>
                    <form method="post" action="" enctype="multipart/form-data">
						<div class="panel-body" style="margin-top:-15px;">  
							<fieldset>	
								
								<div class="form-group">
                                    <label style="color:white">Nickname</label>
                                    <input class="form-control" name="nick" placeholder="Your Nick?" required/>
                                </div>	
								
								
								<div class="form-group">
                                    <label style="color:white">Email</label>
                                    <input class="form-control" name="email" placeholder="Enter Valid Email" required/>
                                </div>	
								
								<?php
									if(isset($_POST['submit']))
									{//1st starts
										$nick= $_POST['nick'];
										$email = $_POST['email'];
										if($con->query("INSERT INTO subscriber(nick,email) values('$nick','$email')")){    
											echo "<p class='alert alert-success'><strong>Successful: We will ge back to you ): !</strong></p>";
										}
										else{
											echo "<p class='alert alert-danger'><strong>Failed:Try again. !</strong></p>";
										
										}// isset bracket ends here, I don tire!
									}
								?>    
							</fieldset>
						</div>
						<div>
                            <center>
                                <button name="submit" type="submit" class="btn" style="padding:12px 20px; background-color:#fc3c2a;color:white;font-weight:200;> <i class="glyphicon glyphicon-airplane"></i> Submit  </button>     
                            </center>
						</div>
						
					</form>
				</div>
			</div>
						<div style="margin-top:50px; text-align:center">
								<i style="color:white;margin:5px;font-size:30px" class="fa fa-facebook-official" href="#"></i>
								<i style="color:white;margin:5px;font-size:30px" class="fa fa-twitter" href="#"></i>
								<i style="color:white;margin:5px;font-size:30px" class="fa fa-instagram" href="#"></i>
								<i style="color:white;margin:5px;font-size:30px" class="fa fa-youtube" href="#"></i>
						</div>
		


