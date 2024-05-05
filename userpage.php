<?php


//check if the user is in the database
function name($username1){
   
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


$sql = "SELECT username from users";

$result = $conn->query($sql);

$loggedin=0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      if($username1 == $row["username"]){
            
            return true;
        }
      }
    }
   

  $conn->close();
  return false;
}

?>
