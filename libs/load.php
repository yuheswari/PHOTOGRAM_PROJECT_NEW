<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app_new/_templates/$name.php"; //not consistant.
}

function validate_credentials($username, $password)
{
    if ($username == "uk@gmail.com" and $password == "password") {   
        return true;
    } else {
        return false;
    }
}
function signup($username,$password,$email,$phone){

$servername = "mysql.selfmade.ninja";
$user = "yuhes";
$pass = "abcdefg_12345";
$dbname = "yuhes_photo";

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql="INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
VALUES ('$username', '$password', '$email','$phone','0', '1');";

//echo $sql;

$result=false;
if ($conn->query($sql) === TRUE) {
  $result=true;
 } else {
    $result=false;
 }

 $conn->close();
 return $result;

}

