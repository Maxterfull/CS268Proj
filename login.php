<!DOCTYPE html>
<html>
    <script type="text/javascript" src="js/search.js"></script>
    <head>
        <title>Login</title>
        <link rel ="stylesheet" type="text/CSS" href="recipeCSS.css">
    </head>
    <body>
        
        <div class="grid">
            <div class="header">
                <div class="header-container">
                    <ul class="styled-list">
                        <li class="styled-list"><a href="#home">Home</a></li>
                        <li class="styled-list"><a href="#about">About</a></li>
                        <li class="styled-list"><a href="#recipes">Recipe Central</a></li>
                        <li class="styled-list"><input type="text" id="searchInput" placeholder="Search..." /></li>
                    </ul>
                </div>
            </div>
        
            <!-- Search results container -->
            <div id="searchResults"></div>
        
            <!-- Link to the external JavaScript file -->
            <script src="search.js"></script>
        </div>
        
            </div>
            
        <div class="flex-container">
        <?php
$servername = "localhost";
$username = "root";
$password = "123";
$another_password = "";
$dbname = "groupsite";
mysqli_report(MYSQLI_REPORT_OFF);
$conn = new mysqli($servername, $username, $another_password, $dbname);

//check connection
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}


$account = $_POST['name'];
$user_password = $_POST['password'];

$sql = "SELECT username,password from accounts";

$result = $conn->query($sql);

$loggedin=0;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      if($account == $row["username"]){
        if($user_password == $row['password']){
            echo "User ".$account." Logged in";
            $loggedin=1;
            break;
        }else{
            echo "Invalid Password";
        }
      }
    }
  } else {
    echo "No accounts found.";
  }

  if($loggedin==0){
    echo "unable to log in";
  }

  $conn->close();


?>
        </div>
    </body>
</html>

