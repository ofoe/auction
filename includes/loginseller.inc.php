<?php

/**********************************************************
		USER LOGIN 
 **********************************************************/
//if user clicks on login button
if (isset($_POST['sellerBtn'])) {
    include("./db.inc.php");
    session_start();
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    /************************
			INPUT VALIDATION  error handlers
     ************************/
    //check if username field are empty
    if (empty($email)) {
        $_SESSION['error'] = "Please enter email";
        header("Location: ../login.php?email=empty");
        exit();
    } else {
        //check if password field is empty
        if (empty($password)) {
            $_SESSION['error'] = "Please enter password";
            header("Location: ../login.php?password=empty");
            exit();
        } else {
            //hash the password 
            $password = md5($password);
            $checkLogin = "SELECT * FROM seller WHERE seller_email='$email' AND seller_password='$password'";
            $runLogin = mysqli_query($conn, $checkLogin);
            if (mysqli_num_rows($runLogin) == 1) {
                $_SESSION['success'] = "Login succesful";
                $_SESSION['email'] = $email;
                header("Location: ../seller/index.php");
                exit();
            } else {
                //check if username exits in the database
                $checkEmail = "SELECT * FROM seller Where seller_email = '$email'";
                $runEmail = mysqli_query($conn, $checkEmail);
                if (mysqli_num_rows($runEmail) < 1) {
                    $_SESSION['error'] = "Invalid Email";
                    header("Location: ../login.php?email=error");
                    exit();
                } else {
                    //check if password is correct
                    $checkPassword = "SELECT * FROM seller WHERE seller_password = '$password'";
                    $runPassword = mysqli_query($conn, $checkPassword);
                    if (mysqli_num_rows($runPassword) < 1) {
                        $_SESSION['error'] = "InvalidPassword";
                        header("Location: ..login.php?login=error");
                        exit();
                    }
                }
            }
        }
    }
} else {
    header("Location: ../login.php?access=denied");
    exit();
}
