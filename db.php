<?php
    $conn = mysqli_connect("localhost", "root", "", "signup_page");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>