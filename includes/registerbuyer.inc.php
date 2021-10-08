<?php

/**********************************************************
		USER REGISTRATION
 **********************************************************/
// if user clicks on register button
if (isset($_POST['buyerBtn'])) {
    session_start();
    include("./db.inc.php");
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $repeatpassword = mysqli_real_escape_string($conn, $_POST['repeatpassword']);

    /************************
			INPUT VALIDATION error handlers
     ************************/
    //username validation/ check if username field is empty
    if (empty($username)) {
        $_SESSION['message'] = "Please enter username";
        header("Location: ../registration.php?username=empty");
        exit();
    } else {
        // check if username exits 
        $sql = "SELECT * FROM buyer WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['message'] = "username taken";
            header("Location: ../registration.php?username=taken");
            exit();
        } else {
            //phone number validation
            if (empty($phone)) {
                $_SESSION['message'] = "Please enter phone number";
                header("Location: ../registration.php?phonenumber=empty");
                exit();
            } else {
                //email validation
                if (empty($email)) {
                    $_SESSION['message'] = "Please enter E-mail";
                    header("Location: ../registration.php?email=empty");
                    exit();
                } else {
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $_SESSION['message'] = "email is invalid";
                        header("Location: ../registration.php?email=invalid");
                        exit();
                    } else {
                        // check if email exits 
                        $sql = "SELECT * FROM buyer WHERE email='$email'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $_SESSION['message'] = "email taken";
                            header("Location: ../registration.php?email=taken");
                            exit();
                        } else {
                            //password validation
                            //check if both passwords match
                            if ($password !== $repeatpassword) {
                                $_SESSION["message"] = "The two passwords do not match";
                                header("Location: ../registration.php?passwords=invalid");
                                exit();
                            } else {
                                // hash password
                                $password = md5($password);

                                //insert user into the database
                                $insertBuyer = "INSERT INTO buyer (buyer_username, buyer_email, buyer_phone,  buyer_password, register_date) VALUES ('$username' , '$email' , '$phone' , '$password' , NOW());";
                                $runBuyer = mysqli_query($conn, $insertBuyer);
                                $_SESSION['username'] = $username;
                                $_SESSION['email'] = $email;
                                $_SESSION['phone'] = $phone;
                                $_SESSION['successMessage'] = "Account Created succesfully";
                                //present user with login page
                                header("Location: ../login.php");
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    header("Location: ../login.php?access=denied");
    exit();
}
