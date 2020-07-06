<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MyDetails App</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#"><img src="images/wr logo.png" alt="Logo" width="50">MyDetails App</a>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <div class="dropdown"> 
		      	<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">About</button>
		      	<div class="dropdown-menu"> 
		      		<a class="dropdown-item" href="#about">About CRUD</a> 
		      		<a class="dropdown-item" href="#goals">Goals</a> 
		      		<a class="dropdown-item" href="#contacts">Contacts</a> 
		      	</div> 
		      </div> 
		      <li class="nav-item">
		        <a class="nav-link" href="login.php">Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="register.php">Register</a>
		      </li>
		    </ul>
		  </div>
		</nav> 
		<div class="section bg-success pb-2">
			<h1 style="text-align: center;">MyDetails App</h1>
		
			<div class="row col-md-8 bg-primary m-auto" id="about">
				<h3 style="text-align: center;">About</h3>
				<p>This MyDetails App with login functionality. Performs all CRUD operations. This MyDetails App with login functionality. Performs all CRUD operations. This MyDetails App with login functionality. Performs all CRUD operations. This MyDetails App with login functionality. Performs all CRUD operations.</p>
				
			</div>
			<hr/>
			<div class="row col-md-8 bg-primary m-auto" id="goals">
				<h3 style="text-align: center;">Goals</h3>
				<div class="row col-md-12 justify-content-center pb-2">
					<div class="col-md-3 mr-1 bg-white">Goal One</div>
					<div class="col-md-3 mr-1 bg-white">Goal Two</div>
					<div class="col-md-3 bg-white">Goal Three</div>
				</div>
			</div>
			<hr/>
			<div class="row col-md-8 bg-primary m-auto" id="contacts">
				<h3 style="text-align: center;">Contacts</h3>
				<div>
					kkgggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
				</div>
			</div>
			
		</div>


<?php include_once('includes/footer.php') ?>
</div>