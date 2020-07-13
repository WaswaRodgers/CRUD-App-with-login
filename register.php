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
    $imageSize = 5000 * 5000;
    $allowed_ext = ["jpg", "jpeg", "png", "gif"];
    $response;
    
    move_uploaded_file($image_temp, $image_path);

    if (empty($firstname)) {
        $response['fname_empty'] .= "First Name field cannot be empty!";
    }

    if (empty($lastname)) {
        $response['lname_empty'] .= "Last Name field cannot be empty!";
    }

    if (empty($location)) {
        $response['location_empty'] .= "Location field cannot be empty!";
    }

    if (empty($gender)) {
        $response['gender_empty'] .= "Gender cannot be empty!";
    }

    if (empty($address)) {
        $response['address_empty'] .= "Address field cannot be empty!";
    }

     if (empty($password)) {
        $response['password_empty'] .= "Please enter Password!";
    }

    if ($password !== $confirmpassword) {
        $response['confirmpassword'] .= "The passwords must match!";
    }

    if(empty($phone)) {
        $response['phone_empty'] .= "Phone field cannot be empty!";
    }

    if(!empty($phone)) {
        if(!is_numeric($phone)) {
            $response['phone_invalid'] .= "Please enter a valid phone number!";
        }
    }

    if (empty($email)) {
        $response['email_empty'] .= "Email field cannot be empty!";
    }

    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response['email_invalid'] .= "Email is invalid!";
        }
    }

    if (empty($image_name)) {
        $response['image_empty'] .= "Profile field cannot be empty!";
    }

    if(in_array($actual_ext, $allowed_ext) == false){
        $response['Filetype'] .= "Invalid Image formart";
    }

    if($image_size > $imageSize){
        $response['Image_size'].="The image size is too big";
    }


    print_r($_FILES);


    if ($response == null) {
        if(move_uploaded_file($image_temp, $image_path)) {
            print_r($response);
            $sql = "INSERT INTO mydetails (firstname, lastname, gender, location, email, phone, address, password, image) VALUES('$firstname', '$lastname', '$gender', '$location', '$email', '$phone', '$address', '$password', '$image_name')";
            $query = mysqli_query($db_connection, $sql);
            print_r($query);

            if ($query) {
                header("Location: login.php");
            } else {
                echo "Registration Failed!";
            }
        } else {
            echo "Image was not uploaded!";
        }
    } else {
        echo "<span style = 'color:red;'>Error occurred, check if all fields are filled.</span>";
    }

}



if(isset($_POST['login'])) {

    header("Location: login.php");
}
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
                            <form id="ajaxpost" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group  has-error">
                                            <label for="firstname">First name</label>
                                            <input class="form-control" type="text" 
                                            name="firstname" id="firstname" placeholder="First name">
                                            <span class="text-danger firstnameerror"><?php echo $response['fname_empty']; ?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name">
                                            <span class="text-danger lastnameerror"><?php echo $response['lname_empty']; ?></span>
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
                                            <span class="text-danger locationerror"><?php echo $response['location_empty']; ?></span>
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <div class="form-group  has-error">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" type="text" 
                                                name="address" id="address" rows="2" placeholder="Address"></textarea>
                                                <span class="text-danger addresserror"><?php echo $response['address_empty']; ?></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" name="email" 
                                                id="email" placeholder="Please type your email">
                                                <span class="text-danger emailerror"><?php echo $response['email_empty']; ?></span>
                                                <span class="text-danger emailerror"><?php echo $response['email_invalid']; ?></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input class="form-control" type="password" name="password" 
                                                id="password" placeholder="********">
                                                <span class="text-danger passworderror"><?php echo $response['password_empty']; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="form-group col-md-4">
                                            <label for="confirmpassword">Confirm Password</label>
                                            <input class="form-control" type="password" name="confirmpassword" 
                                            id="confirmpassword" placeholder="********">
                                            <span class="text-danger conpasserror"><?php echo $response['confirmpassword']; ?></span>
                                        </div>

                                    <div class="row col-md-12">
                                        <div class="form-group col-md-4">
                                            <label>Gender</label>
                                            <input type="radio" name="gender" id="male" value="m">Male
                                            <input type="radio" name="gender" id="female" value="f">Female
                                            <span class="text-danger passworderror"><?php echo $response['gender_empty']; ?></span>
                                        </div> 
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="phone">Phone number</label>
                                            <input class="form-control" type="text" name="phone" id="phone" 
                                            placeholder="Phone number">
                                            <span class="text-danger phoneerror"><?php echo $response['phone_empty']; ?></span>
                                            <span class="text-danger phoneerror"><?php echo $response['phone_invalid']; ?></span>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="profile">Profile photo</label>
                                            <input class="form-control" type="file" name="profile" 
                                            id="profile">
                                            <span class="text-danger filetypeerror"><?php echo $response['Filetype']; ?></span>
                                            <span class="text-danger imagesizeerror"><?php echo $response['Image_size']; ?></span>
                                            <span class="text-danger imagesizeerror"><?php echo $response['image_empty']; ?></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <input type="submit" name="register" class="btn btn-danger" value="Submit">
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
