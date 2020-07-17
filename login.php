<?php 
	include_once('includes/connect.php');
	error_reporting(1);

	if(isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db_connection, $_POST['username']);
    	$password = mysqli_real_escape_string($db_connection, $_POST['password']);
    	$response;


    	if(empty($username)) {
    		$response['username_empty'] .= "Please enter Username";
    	}

    	if(empty($password)) {
    		$response['password_empty'] .= "Please enter Password";
    	}

    	if($response == null) {
    		$sql = "SELECT * FROM mydetails WHERE email = '$username' AND password = '$password'";
    		$query = mysqli_query($db_connection, $sql);
    		$rows = mysqli_num_rows($query);

    		if($rows == 1) {
    			while($result = mysqli_fetch_assoc($query)) {
    				header("Location: profile.php");
    			}
    		} else {
    			echo "Confirm your login details!";
    		}
    	
    	}
	}
?>






<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">MyDetails App</a>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="register.php">Register</a>
		      </li>
		    </ul>
		  </div>
		</nav> 
		<div class="section pb-2">
			<h1 style="text-align: center;">Login to Proceed!</h1>
			<div class="row col-md-12 justify-content-center bg-secondary text-center">
			<form class="" method="post" action=""> 
				<div class="row col-md-8 m-auto">
					<div class="row col-md-12 form-group"> 
						<label for="username">Username</label> 
						<input type="text" class="form-control" id="username" name="username" placeholder="Username">
						<span class="text-danger"><?php echo $response['username_empty']; ?></span>
					</div> 
					<div class="row col-md-12 form-group"> 
						<label for="password">Password</label> 
						<input type="password" class="form-control" id="password" name="password" placeholder="">
						<span class="text-danger"><?php echo $response['password_empty']; ?></span> 
					</div> 
					<div class="row col-md-12">
	                    <button name="login" type="submit" class="btn btn-success btn-block">Login</button>
	                </div>
				</div>
			</form>
			</div>
			
			
		</div>



</div>
<?php include_once('includes/footer.php') ?>