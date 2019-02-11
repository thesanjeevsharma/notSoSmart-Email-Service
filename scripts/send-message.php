<?php
session_start();

require 'db-connect.php';

$receiver = filter_var(htmlspecialchars($_POST['to']), FILTER_SANITIZE_STRING);
$sender = $_SESSION['name'];
$body = nl2br(filter_var(htmlspecialchars($_POST['message-body']), FILTER_SANITIZE_STRING));
$dated = date("Y-m-d");

$username = $receiver;
require 'checkuser.php';

if(strlen($_SESSION['error']) > 0){
    header("Location: ../home.php");
    die;
}

$sql = "INSERT INTO messages (sender, receiver, body, dated) VALUES (?, ?, ?, ?)";

$cmd = $conn->prepare($sql);

$cmd->bind_param("ssss", $sender, $receiver, $body, $dated);

echo $receiver;
echo $sender;
echo $body;
echo $dated;

$cmd->execute();

$cmd->close();
$conn->close();

header('Location: ../home.php');
?>