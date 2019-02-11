<?php
session_start();

$server = "localhost";
$admin = "root";
$password = "root";
$db = "users";

$username = filter_var(htmlspecialchars($_POST['username']), FILTER_SANITIZE_STRING);
$pin = filter_var(htmlspecialchars($_POST['pin']), FILTER_VALIDATE_INT);
$allOk = 1;

//echo $username;
//echo $pin;

if(!filter_var($pin , FILTER_VALIDATE_INT) === true){
    $allOk = 0;
}

if($allOk){
    $conn = new mysqli($server, $admin, $password, $db);
    if($conn->connect_error){
        $allOk = 0;
        echo "Error here!";
    }
    $sql = "SELECT id, username FROM users WHERE username='$username' and pin=$pin";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        // while($row = $result->fetch_assoc()) {
        //     echo "id: " . $row["id"]. " - USERNAME: " . $row["username"] . "<br>";
        // }
        $_SESSION['id'] = $username;
        $_SESSION['name'] = $username;
        $_SESSION['error'] = "";
        header("Location: ../home.php");
    } else {
        header("Location: ../index.php");
    }
} else {
    echo "Error";
}



?>