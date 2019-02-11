<?php
$receiver = $_SESSION['name'];
$sql = "SELECT * FROM messages WHERE receiver='$receiver' ORDER BY id DESC; ";

$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<div class='message' data-id='" . $row['id'] . "'>";
        echo "<span class='sender'>" . $row['sender'] . "</span>";
        echo "<span class='body'>"; 
        custom_echo($row['body'], 120);
        echo "</span>";
        echo "<span class='time'>" . $row['dated'] . "</span>";
        echo "</div>";
    }
} else {
    echo "<div class='no-messages'><h4>Wow! Such empty!</h4></div>";
}

function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}

?>

