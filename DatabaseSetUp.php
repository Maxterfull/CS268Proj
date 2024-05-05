<html>
<head>

<title>Database Set Up</title>
</head>
<body>

<?php
//connect to mysql

$servername = "localhost";
$username = "root";
$password = "";
//disable mysqli error report
mysqli_report(MYSQLI_REPORT_OFF);
// Create connection
//i here means improved
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error){
    //Print a message and terminate the current script:
    die("Connection failed: ".$conn->connect_error);
}

$sql = "CREATE DATABASE user_system";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully"."<br>";
} 
else {
    echo "Error creating database: " . $conn->error."<br>";
}

$sql = "USE user_system;";

if ($conn->query($sql) === TRUE) {
    echo "Database changed successfully"."<br>";
} 
else {
    echo "Error changing database: " . $conn->error."<br>";
}

$sql = "CREATE TABLE users (userID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, username VARCHAR(50) NOT NULL UNIQUE, password VARCHAR(255) NOT NULL);";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully"."<br>";
} 
else {
    echo "Error creating table: " . $conn->error."<br>";
}

$username = "bob123";
$password = "abcde";
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(userID, username, password) VALUES (100001, '$username', '$password')";
$result = $conn->query($sql);

if ($result) {
    echo "New record created successfully"."<br>";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
}

echo "Create Database and Table successfully"."<br>";
$conn->close(); 
?> 

<a href="Login.php">Link back to login page</a>

</body>
</html>
