<?php


//check if the user is in the database
function check_user($username1, $password1){
   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$hash = password_hash($password1,PASSWORD_DEFAULT);
$sql = "INSERT INTO users
VALUES (null,'$username1','$hash');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>