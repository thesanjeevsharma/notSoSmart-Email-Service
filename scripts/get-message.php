<?php
session_start();
require 'showErrors.php';
require 'db-connect.php';

$msgID = (int)($_GET['id']);
$msgID = filter_var($msgID, FILTER_VALIDATE_INT);

$sql = "SELECT id, sender, receiver, body, dated FROM messages WHERE id='$msgID'";

$result = ($conn->query($sql))->fetch_assoc();

$data = new \stdClass();

$data->sender = $result['sender'];
$data->receiver = $result['receiver'];
$data->body = $result['body'];
$data->dated = $result['dated'];
$data->id = $result['id'];

$data = json_encode($data);

echo $data;

?>