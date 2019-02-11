<?php
include('showErrors.php');

// Add your credentails here
define('DB_SERVER', 'localhost');
//Username
define('DB_USER', 'root');
//Password
define('DB_PASS', 'root');
//DB Name
define('DB_USERS', 'users');

//Two tables to be created - `users` and `messages`. DB name - `users`.

// `users` Table
// 1. id [int(4)]
// 2. name [varchar(30)]
// 3. username [varchar(12)]
// 4. pin (4 DIGIT)

// `messages` Table
// 1. id [int(4)]
// 2. sender [varchar(12)]
// 3. receiver [varchar(12)]
// 4. body [varchar(1000)]
// 5. dated [date]

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_USERS);
if($conn->connect_error){
    die("Error: " . $conn->connect_error);
}

?>