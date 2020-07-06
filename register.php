<!doctype html>
<html>
    <head>
        <title>MyDetails App Register</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-light bg-info navbar-expand-lg">
            <a class="navbar-brand">
                MyDetails App
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
                        <a class="nav-link" href="login.php">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1 style="text-align: center;">Register for an account!</h1>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-12 bg-light text-dark">
                            <div class='messagesuccessone' role='alert'></div>
                            <div class='messagefail' role='alert'></div>
                            <form id="ajaxpost" method="post" enctype="multipart/form-data" action="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group  has-error">
                                            <label for="firstname">First name</label>
                                            <input class="form-control form-control-danger" type="text" 
                                            name="firstnametext" id="firstname" placeholder="First name">
                                            <span class="text-danger firstnameerror"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name">
                                            <span class="text-danger lastnameerror"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="location">Location(County)</label>
                                            <select class="form-control" type="text" name="location" id="location" placeholder="Location">
                                                <option value="Mombasa">Mombasa</option>
                                                <option value="Nairobi">Nairobi</option>
                                                <option value="Kisumu">Kisumu</option>
                                                <option value="Lamu">Lamu</option>
                                                <option value="Bungoma">Bungoma</option>
                                                <option value="Kakamega">Kakamega</option>
                                                <option value="Moyale">Moyale</option>
                                                <option value="Migori">Migori</option>
                                            </select>
                                            <span class="text-danger locationerror"></span>
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <div class="form-group  has-error">
                                                <label for="address">Address</label>
                                                <textarea class="form-control form-control-danger" type="text" 
                                                name="address" id="address" rows="2" placeholder="Address"></textarea>
                                                <span class="text-danger addresserror"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" name="emailtext" 
                                                id="email" placeholder="Please type your email">
                                                <span class="text-danger emailerror"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="password" 
                                                id="password" placeholder="********">
                                                <span class="text-danger passworderror"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group col-md-4">
                                            <label for="confirmpassword">Confirm Password</label>
                                            <input class="form-control" type="password" name="confirmpassword" 
                                            id="confirmpassword" placeholder="********">
                                            <span class="text-danger conpasserror"></span>
                                        </div>
                                         <div class="radio col-md-4">
                                            <label for="gender">Gender</label><br/>
                                            <input type="radio" name="gender" id="male" value="m"> Male
                                            <input type="radio" name="gender" id="female" value="f"> Female
                                            <input type="radio" name="gender" id="none" value="n"> Prefer not to answer
                                        </div> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="phone">Phone number</label>
                                                <input class="form-control" type="text" name="phone" id="phone" 
                                                placeholder="Phone number">
                                                <span class="text-danger phoneerror"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="avatar">Profile photo</label>
                                            <input class="form-control" type="file" name="avatar" 
                                            id="avatar">
                                            <span class="text-danger filetypeerror"></span>
                                            <span class="text-danger imagesizeerror"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
