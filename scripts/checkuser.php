<?php
session_start();
include 'error.php';
require 'db-connect.php';

$sql = "SELECT * FROM users WHERE username='$username'";

$result = $conn->query($sql);
if($result->num_rows > 0){
    $_SESSION["error"] = "";
} else {
    $_SESSION["error"] = "No such user found!";
}
?>