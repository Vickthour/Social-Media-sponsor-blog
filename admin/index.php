<?php require"connect.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Admin</title>
	<link rel="icon" href="img/logo.png">
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../assets/css/bootstrap.css"/>
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="login-area">
				<div class="text-center">
					<i class="fa fa-users fa-5x"></i>
					<p class="h3 text-bold">Admin Login</p>
				</div>			
                <form method="post" action="">
            		<div class="form-group">
	    				<label for="username" class=""><i class="fa fa-user"></i> Username</label>
	    				<input type="text" id="username" class="form-control" placeholder="Username" name="username" required>
                	</div>
                	<div class="form-group">
	    				<label for="password" class=""><i class="fa fa-user"></i> Password</label>
	    				<input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                	</div>		
                	<div class="form-group">
	    				<button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i>
	    					Login
	    				</button>
                	</div>
         <?php
			if(isset($_POST['submit'])){//1st starts
				$user= $_POST['username'];
				$pass = $_POST['password'];
				$check = "select * from admin_login WHERE username = '$user' AND password = '$pass' ";
				$checker = mysqli_num_rows(mysqli_query($con,$check));
					if(($checker == '1') && ($user || $pass != "")){
				/*	mysqli_query($con,"UPDATE incidents SET status='Seen' WHERE agency = '$user' ");*/
						
						echo "alert('Successfully Login')";
						header("location: dash.php?py=$user");
					
						// creating email as session
         			   $_SESSION['user'] = $checker['user'];
						exit(); 
					}else{
					echo "<p class='alert alert-danger'><strong>Failed:Try again. !</strong></p>";
				
				}// isset bracket ends here, I don tire!
			}
		?>    		
				</form>
            </div>
		</div>			
	</div>
		<div class="logginFormFooter text-center nav">
			&copy; 2021 Reserved <a href="#">SocialLikes.Ng</a>
		</div>
</div>

</body>
</html>