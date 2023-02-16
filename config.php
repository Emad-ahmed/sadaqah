<?php

$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB_NAME  = "sadaqah";



$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DB_NAME);

if (!$conn) {
    echo "<script>alert('ERROR! DB Not Connected')</script>";
}
