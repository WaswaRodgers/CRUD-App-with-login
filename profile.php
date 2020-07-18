<?php 
    session_start();
    include_once('includes/connect.php');

    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $profile_picture = $_SESSION['image'];
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud App Profile</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
		.details_list {
			border: 1px solid brown;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-light bg-info navbar-expand-lg">
            <a class="navbar-brand">
                <img src="images/wr logo.png" alt="Logo" width="50">MyDetails App
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
        	<div class="row mt-2">
                <h2 class="text-success mx-auto"><?php echo "Welcome ".$firstname." ".$lastname; ?></h2>
                <div class="col-md-4">
                    <img src="images/<?php echo $profile_picture; ?>" class="rounded-circle" width="50%">
                </div>
            </div>
            <div class="details">
            	<h2 class="bg-info text-center">My Details</h2>
            	<div class="details_list justify-content-center text-center">
            		<h3 style="font-weight: bold;">Name: Waswa Rodgers</h3>
            		<h4>Location: Lutacho, Webuye</h4>
            		<h4>Email: waswam1994@gmail.com</h4>
            		<h4>Gender: Male</h4>
            		<h4>Phone No: 0702261867</h4>
            	</div>
            </div>
        </div>

</body>
</html>