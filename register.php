<?php
session_start();
if(strlen($_SESSION['id']) > 0){
    header('Location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.png" type="image/png"> 
    <title>notSoSmart Email | Register</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<header>
    <div class="jumbotron">
        <h1>notSoSmart Email Service</h1>
        <p>Email service so dumb that you'll love its cuteness! </p>
    </div>
</header>
<main>
    <div class="portal">
        <div class="login">
            <h2>Register</h2>
            <form action="scripts/newuser.php" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" maxlength="12" class="form-control" id="username" name="username" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" maxlength="30" class="form-control" id="name" name="name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="pin">PIN</label>
                    <input type="password" maxlength="4" class="form-control" id="pin" name="pin" placeholder="4-digit PIN" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Yes! I want to join.</button>
            </form>
            <a href="index.php">
                Have an account? Login.
            </a>
        </div>
    </div>
</main>
<footer>
    <p>&copy; Sanjeev Sharma</p>
</footer>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>