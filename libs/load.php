<?php

include_once 'includes/Mic.class.php';
include_once 'includes/Database.class.php';

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app_new/__templates/$name.php"; //not consistant.
}

function validate_credentials($username, $password)
{
    if ($username == "uk@gmail.com" and $password == "password") {   
        return true;
    } else {
        return false;
    }
}
function signup($user, $pass, $email, $phone) {
$conn=Database::getConnection();

$sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `active`)
VALUES ('$user', '$pass', '$email', '$phone', '1');";
$error = false;
if ($conn->query($sql) == true) {
    $error = false;
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    $error = $conn->error;
}

return $error;
}


