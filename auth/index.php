<?php
session_start();
require('auth.php');

if (isset($_SESSION["login"])) {
    header("Location: ..");
    exit();
}

$showLogin = true;
if (isset($_GET['action']) && $_GET['action'] == 'register') {
    $showLogin = false;
}

function text($status)
{
    return $status ? 'Login' : 'Register';
}

if (isset($_POST['login'])) {
    if (login($_POST)) {
        $errorLogin = true;
    }
} else if (isset($_POST['register'])) {
    if (register($_POST) === "username sama") {
        $errorRegister = "<div class='alert alert-warning' role='alert'>
                                Username has been registered!
                            </div>";
    } else if (register($_POST) === "password beda") {
        $errorRegister = "<div class='alert alert-warning' role='alert'>
                                Password and confirm password not same!
                            </div>";
    } else {
        if (register($_POST) > 0) {
            echo "<script>
                document.location.href = '..';
                alert('Register success!');
            </script>";
        } else {
            echo "<script>
                alert('Register failed!');
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo text($showLogin) ?> Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/4.5.2-bootstrap.min.css">
    <style>
        /* Custom CSS to center the form */
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .margin-top {
            margin-top: 180px;
        }

        /* Custom CSS for the side image */
        .side-image {
            background-image: url('your-image-url.jpg');
            /* Replace 'your-image-url.jpg' with the actual image URL */
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
                <img src="../images/<?php echo strtolower(text($showLogin)) ?>.png" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header">
                        <?php echo text($showLogin) ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <?php if ($showLogin) : ?>
                                <?php if (isset($errorLogin)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        Username or password wrong!
                                    </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                                <div class="form-group mt-4">
                                    <div class="text-center">
                                        <span>Don't have an account?</span>
                                        <a href="index.php?action=register">Register Here</a>
                                    </div>
                                </div>

                            <?php else : ?>
                                <?php if (isset($errorRegister)) {
                                    echo $errorRegister;
                                } ?>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
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
                                        <a href="index.php?action=login">Login Here</a>
                                    </div>
                                </div>
                            <?php endif; ?>
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