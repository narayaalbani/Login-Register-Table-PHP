<?php
require('db.php');
require('auth.php');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>
                alert('Register success!');
                document.location.href = '../auth/login.php';
            </script>";
    } else {
        echo "<script>
                alert('Register failed!');
            </script>";
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../css/4.5.2-bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Custom CSS to center the form */
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .margin-top {
            margin-top: 150px;
        }

        /* Custom CSS for the side image */
        .side-image {
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row margin-top">

            <div class="col-md-6 side-image">
                <img src="../images/register.png" class="img-fluid" alt="login-image">
            </div>

            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter your username" oninput="filterInput(this)" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" placeholder="Enter your confirm password" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                            <div class="form-group mt-4">
                                <div class="text-center">
                                    <span>Already have an account?</span>
                                    <a href="../auth/login.php">Login Here</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>