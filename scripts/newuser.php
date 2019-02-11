<?php
session_start();
include 'error.php';
require 'db-connect.php';

$name = filter_var(htmlspecialchars($_POST['name']), FILTER_SANITIZE_STRING);
$username = filter_var(htmlspecialchars($_POST['username']), FILTER_SANITIZE_STRING);
$pin = filter_var(htmlspecialchars($_POST['pin']), FILTER_VALIDATE_INT);

$sql = "SELECT * FROM users WHERE username='$username'";

$result = $conn->query($sql);
if($result->num_rows > 0){
    session_destroy();
    header('Location: ../register.php');
} else {
    $sql = "INSERT INTO users(name, username, pin) VALUES ('$name', '$username', '$pin')";
    $resultInserted = $conn->query($sql);
    $_SESSION['id'] = $username;
    $_SESSION['name'] = $username;
    $_SESSION['error'] = "";
    header("Location: ../home.php");
}

?>