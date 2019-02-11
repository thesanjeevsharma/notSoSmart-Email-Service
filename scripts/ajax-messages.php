<?php
session_start();
require 'db-connect.php';

$receiver = $_SESSION['name'];
$sql = "SELECT * FROM messages WHERE receiver='$receiver' ORDER BY id DESC; ";

$result = $conn->query($sql);
if($result->num_rows > 0){
    $data = "";
    while($row = $result->fetch_assoc()){
        $data .= "<div class='message' data-id='" . $row['id'] . "'>";
        $data .= "<span class='sender'>" . $row['sender'] . "</span>";
        $data .= "<span class='body'>"; 
        $data .= custom_echo($row['body'], 120);
        $data .= "</span>";
        $data .= "<span class='time'>" . $row['dated'] . "</span>";
        $data .= "</div>";
    }
    echo $data;
} else {
    echo "<div class='no-messages'><h4>Wow! Such empty!</h4></div>";
}

function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    return $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    return $y;
  }
}

?>

