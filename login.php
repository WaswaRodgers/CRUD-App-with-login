<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">MyDetails App</a>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Register</a>
		      </li>
		    </ul>
		  </div>
		</nav> 
		<div class="section pb-2">
			<h1 style="text-align: center;">Login to Proceed!</h1>
			<div class="row col-md-12 justify-content-center bg-secondary">
			<form class=""> 
				<div class="row col-md-12 form-group"> 
					<label for="username">Username</label> 
					<input type="text" class="form-control" id="username" name="username" placeholder="Username"> 
				</div> 
				<div class="row col-md-12 form-group"> 
					<label for="password">Password</label> 
					<input type="password" class="form-control" id="password" name="password" placeholder=""> 
				</div > 
				<button type="submit" class="btn btn-primary" name="login">Login</button> 
			</form>
			</div>
			
			
		</div>


<?php include_once('includes/footer.php') ?>
</div>