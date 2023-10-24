<?php
session_start(); 
require('function.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    define('DB', 'db.txt');

    if (file_exists(DB)) {
        $loadDB = file(DB, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $loggedIn = false;
        $user_Name=''; 
        $userEmail=''; 
        $userRole = ''; 

        foreach ($loadDB as $line) {
            $data = explode('|', $line);
            $storedUserName = $data[1];
            $storedEmail = $data[2];
            $storedPassword = $data[3];
            $storedRole = $data[4];

            if ($email === $storedEmail && $password === $storedPassword) {
                $loggedIn = true;
                $user_Name=$storedUserName;
                $userEmail=$storedEmail;
                $userRole = $storedRole;
                break;
            }
        }

        if ($loggedIn) {
            // Successful login, redirect based on the user's role.
            if ($userRole === 'Admin') {
                $_SESSION['name']=$user_Name;
                $_SESSION['email']= $storedEmail;
                $_SESSION['role']= $userRole;
                header('Location: admin_dashboard.php');
                exit;
            } else {
                $_SESSION['name']=$user_Name;
                $_SESSION['email']= $storedEmail;
                $_SESSION['role']= $userRole;
                header('Location: user_dashboard.php');
                exit;
            }
        } else {
            // Invalid login, display an error message.
            $login_err= 'Invalid email or password. Please try again.';
        }
    } else {
        echo 'Database file does not exist.';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="heading">
                    <h3>LOGIN FORM</h3>
                    <div class="row">
                        <div class="col-md-12 mx-auto mt-2">
                        <main class="form-signin w-100 m-auto text-center">
                        <form action="#" method="POST">
                            <?php
                                if (!empty($_SESSION['msg'])) {
                                    echo '<div class="error-message alert-danger"><h4>' . $_SESSION['msg']. '<h4></div>';
                                }
                            ?>
                            <div class="form-floating">
                            <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com">
                            <label for="floatingEmail">Email address</label>
                            </div> <br>
                            <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                            </div>
                            <?php
                                if (!empty($login_err)) {
                                    echo '<div class="error-message alert-danger"><h4>' . $login_err. '<h4></div>';
                                }
                            ?>
                            <button class="btn button mb-3" name="submit" type="submit">Login</button> <br>
                            <small class="mt-5 mb-5 text-muted reg_text">Don’t Have and Account? <a href="register.php" target="">Register Here</a></small>
                            
                            <p class="mt-3">(Admin) Email: <span class="user_color">tanvir@gmail.com</span> & Password: <span class="pass_color">1234</span></p>
                            <p>(User) Email: <span class="user_color">miraz@gmail.com</span> & Password: <span class="pass_color">1234</span></p>

                        </form>
                        </main>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    setTimeout(function() {
        var messageDiv = document.querySelector(".error-message");
        if (messageDiv) {
            messageDiv.style.display = "none";
        }
    }, 2000); // 2000 milliseconds = 2 seconds
</script>
</body>
</html>

