<?php
include_once('includes/connect.php');

if(isset($_POST['register'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $location = $_POST['location'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $image_name = $_FILES['profile']['name'];
    $image_size = $_FILES['profile']['size'];
    $image_temp = $_FILES['profile']['tmp_name'];
    $image_path = 'images/'.$image_name;
    $image_type = $_FILES['profile']['type'];
    $image_error = $_FILES['profile']['error'];
    $image_ext = explode(".", $image_name);
    $actual_ext = strtolower(end($image_ext));
    $allowed_ext = array("jpg", "jpeg", "png", "gif");
    $response = array();

    move_uploaded_file($image_temp, $image_path);
    


    if (empty($firstname)) {
        $response['fname_empty'] .= "First Name field cannot be empty!";
    }

    if (empty($lastname)) {
        $response['lname_empty'] .= "Last Name field cannot be empty!";
    }

    if (empty($username)) {
        $response['username_empty'] .= "Username field cannot be empty!";
    }

    if (empty($email)) {
        $response['email_empty'] .= "Email field cannot be empty!";
    }

    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['email_empty'] .= "Email is invalid!";
        }
    }

    if (empty($image_name)) {
        $response['image_empty'] .= "Profile field cannot be empty!";
    }




    if ($response == null) {
        $sql = "INSERT INTO mydetails(firstname, lastname, gender, location, email, phone, address, password, image) VALUES('$firstname', '$lastname', '$gender', '$location', '$email', '$phone', '$address', '$password', '$image_name')";
        $query = mysqli_query($db_connection, $sql);

        if ($query) {
            header("Location: login.php");
        } else {
            echo "Registration Failed!";
        }
    } else {
        echo "<span style = 'color:red;'>Error occurred, check if all fields are filled.</span>";
    }

}


if(isset($_POST['login'])) {

    header("Location: login.php");
}
?>
?>

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
                                                <input class="form-control" type="email" name="email" 
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

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="confirmpassword">Confirm Password</label>
                                            <input class="form-control" type="password" name="confirmpassword" 
                                            id="confirmpassword" placeholder="********">
                                            <span class="text-danger conpasserror"></span>
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="radio col-md-4">
                                            <label for="gender">Gender</label>
                                            <input type="radio" name="gender" id="male" value="m">Male
                                            <input type="radio" name="gender" id="female" value="f">Female
                                        </div> 
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Phone number</label>
                                            <input class="form-control" type="text" name="phone" id="phone" 
                                            placeholder="Phone number">
                                            <span class="text-danger phoneerror"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="profile">Profile photo</label>
                                            <input class="form-control" type="file" name="profile" 
                                            id="profile">
                                            <span class="text-danger filetypeerror"></span>
                                            <span class="text-danger imagesizeerror"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" name="register" class="btn btn-danger">Submit</button>
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
