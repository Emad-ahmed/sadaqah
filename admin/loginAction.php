<?php

include 'config.php';

$email = $_POST['username'];
$password = $_POST['password'];





if ($email == "emad123" && $password == "12345") {
    $_SESSION['email'] = $email;
    echo "<script>location.href = 'index.php'</script>";
} else {
    echo "<script>alert('Incorrect Username Or Password')</script>";
    echo "<script>location.href = 'login.php'</script>";
}
