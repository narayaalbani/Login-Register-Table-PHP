<?php
require('db.php');

function register($data)
{
    global $con;

    $name = $data["name"];
    $email = $data["email"];
    $password = $data["password"];
    $confirm_password = $data["confirm_password"];

    $result = mysqli_query($con, "SELECT email FROM account WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        return "username sama";
    } else if ($password != $confirm_password) {
        return "password beda";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO account (name, email, password) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password);
        $stmt->execute();

        return mysqli_affected_rows($con);
    }
}

function login($data)
{
    global $con;

    $email = $data["email"];
    $password = $data["password"];

    $query = "SELECT * FROM account WHERE email = '$email'";
    $result = $con->query($query);

    if (mysqli_num_rows($result) === 1) {
        $user_data = mysqli_fetch_assoc($result);

        if (password_verify($password, $user_data["password"])) {
            $_SESSION['login'] = true;
            header("Location: ..");
            exit;
        }
    } else {
        return true;
    }
}
