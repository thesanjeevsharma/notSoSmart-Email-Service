<?php 
session_start();
if(strlen($_SESSION['id']) === 0){
    header('Location: index.php');
    $loc = "Login";
}
$loc = "Home";
require 'scripts/db-connect.php';
include 'scripts/showErrors.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png" type="image/png"> 
    <title>notSoSmart Email | <?php echo $loc; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">notSoSmart Email</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            Hello, &nbsp;<?php echo $_SESSION['name']; ?>!
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="scripts/logout.php" method="POST">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Logout</button>
        </form>
    </div>
</nav>