<?php
include 'showErrors.php';
require 'db-connect.php';

$id = filter_var($_POST['id'], FILTER_VALIDATE_INT);

$sql = "DELETE FROM messages where id='$id'";

$result = $conn->query($sql);

$conn->close();
?>