<?php 
    if(isset($_POST['compose_cv'])) {
        header("Location: compose_cv.php");
    }

    if(isset($_POST['view_cv'])) {
        header("Location: profile_cv.php");
    }

    if(isset($_POST['edit_profile'])) {
        header("Location: edit_profile.php");
    }
?>