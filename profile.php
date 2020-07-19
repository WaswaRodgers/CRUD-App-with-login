<?php 
    session_start();
    include_once('includes/connect.php');

    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $profile_picture = $_SESSION['image'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
    $location = $_SESSION['location'];
    $gender = $_SESSION['gender'];
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud App Profile</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
		.user_details_list {
			border: 1px solid brown;
            display:flex;
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
            <div class="row text-success justify-content-center text-center">
                <h2><?php echo "Welcome ".$firstname." ".$lastname; ?></h2>
            </div>
        	
           
                

            <div class="row col-md-12 user_details">
                    <h2 class="bg-warning text-center col-md-12">My Details</h2>
                    <div class="user_details_list justify-content-center">
                        
                        <div class="col-md-4 rounded-circle mt-1">
                
                            <img src="images/<?php echo $profile_picture; ?>" class="rounded-circle" width="100%">
    
                        </div>

                        <div class="col-md-8 details_list">
                            <h3 style="font-weight: bold;">Name: <?php echo $firstname." ".$lastname; ?></h3>
                            <h4>Location: <?php echo $location; ?></h4>
                            <h4>Email: <?php echo $email; ?></h4>
                            <h4>Gender: <?php echo $gender; ?></h4>
                            <h4>Phone No: <?php echo $phone; ?></h4>
                        </div>
                    </div>
            </div> 
           
        </div>

</body>
</html>