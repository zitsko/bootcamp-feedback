
<!-- define database constants -->

<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'kostas');
define('DB_PASS', 'qwerty1234');
define('DB_NAME', 'php_dev');

//Create the connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check the connection
if($conn->connect_error){
    die('Connection Failed' . $conn-> connect_error);
}

