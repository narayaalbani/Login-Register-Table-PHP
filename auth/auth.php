<?php
function register($data)
{
    global $con;

    $name = $data["name"];
    $username = $data["username"];
    $password = $data["password"];
    $confirm_password = $data["confirm_password"];

    $result = mysqli_query($con, "SELECT username FROM account WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username sudah terdaftar.')
        </script>";
        return false;
    } else if ($password != $confirm_password) {
        echo "<script>
            alert('Konfirmasi password tidak sesuai.')
        </script>";
        return false;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO account (name, username, password) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("sss", $name, $username, $password);
        $stmt->execute();

        return mysqli_affected_rows($con);
    }
}
