<?php
$con = mysqli_connect("localhost", "root", "", "auth");

if (mysqli_connect_errno()) {
    echo "Failed connect to MySQL: " . mysqli_connect_error();
}