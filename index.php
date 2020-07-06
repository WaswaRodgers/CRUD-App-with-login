<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">CRUD App with Login</a>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <div class="dropdown"> 
		      	<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">About</button>
		      	<div class="dropdown-menu"> 
		      		<a class="dropdown-item" href="#">About CRUD</a> 
		      		<a class="dropdown-item" href="#">Goals</a> 
		      		<a class="dropdown-item" href="#">Contacts</a> 
		      	</div> 
		      </div> 
		      <li class="nav-item">
		        <a class="nav-link" href="#">Services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Blog</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Contacts</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav> 


<?php include_once('includes/footer.php') ?>
</div>