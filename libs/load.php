<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php"; //not consistant.
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
$username = "yuhes";
$password = "abcdefg_12345";
$dbname = "yuhes_photo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    print("Connection Success!!");
}

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

}

