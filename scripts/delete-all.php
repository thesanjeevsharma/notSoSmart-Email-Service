<?php
session_start();
include 'showErrors.php';


require 'db-connect.php';
$username = $_SESSION['name'];
echo $username;
$sql = "DELETE FROM messages WHERE receiver='$username'";

$result = $conn->query($sql);

header('Location: ../home.php');
?>
