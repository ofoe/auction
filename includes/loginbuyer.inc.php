<?php

/**********************************************************
		USER LOGIN 
 **********************************************************/
//if user clicks on login button
if (isset($_POST['buyerBtn'])) {
    include("./db.inc.php");
    session_start();
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    /************************
			INPUT VALIDATION  error handlers
     ************************/
    //check if username field are empty
    if (empty($username)) {
        $_SESSION['message'] = "Please enter username";
        header("Location: ../login.php?username=empty");
        exit();
    } else {
        //check if password field is empty
        if (empty($password)) {
            $_SESSION['message'] = "Please enter password";
            header("Location: ../login.php?password=empty");
            exit();
        } else {
            //hash the password 
            $password = md5($password);
            $checkLogin = "SELECT * FROM buyer WHERE buyer_username='$username' AND buyer_password='$password'";
            $runLogin = mysqli_query($conn, $checkLogin);
            if (mysqli_num_rows($runLogin) == 1) {
                $_SESSION['successMessage'] = "Login succesful";
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
                header("Location: ../buyer/index.php");
                exit();
            } else {
                //check if username exits in the database
                $checkUsername = "SELECT * FROM buyer Where buyer_username = '$username'";
                $runUsername = mysqli_query($conn, $checkUsername);
                if (mysqli_num_rows($runUsername) < 1) {
                    $_SESSION['message'] = "Invalid username or Password";
                    header("Location: ../login.php?username=error");
                    exit();
                } else {
                    //check if password is correct
                    $checkPassword = "SELECT * FROM buyer WHERE buyer_password = '$password'";
                    $runPassword = mysqli_query($conn, $checkPassword);
                    if (mysqli_num_rows($runPassword) < 1) {
                        $_SESSION['message'] = "Invalid username or Password";
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
