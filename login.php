<!DOCTYPE html>
<?php include 'loginpage.php';?>
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
                    <li class="styled-list"><a href="homepage.html" target="_blank">Home</a></li>
                    <li class="styled-list"><a href="about.html" target="_blank">About</a></li>
                    <li class="styled-list"><a href="directory.html" target="_blank">Recipe Central</a></li>
                    <li class="styled-list"><a href="account.php" target="_blank">Account</a></li>

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
         <form action="Login.php" method="post">
    <p>Username:</p>
    <input type="text" name="username">  
    <p>Password</p>
    <input type="password" name="password">
    <input type="submit" value="Login">
    <p>Don't have an account? <a href="Register.php">Sign up now</a>.</p>
    </form>
        </div>

        <?php
    if(empty($_POST['username']) || empty($_POST['password'])){
        die();
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    //remove malicious contents
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);
    //get the hash of the password 
    $result = check_user($username, $password);
    if($result === true)
    {
        session_start();
            //create session information
            $_SESSION["loggedin"] = true;
            $_SESSION['username'] = $username;
            $_SESSION["id"] = $username.date("Y-m-d H:i:s");
            echo "<script type='text/javascript'>alert('logged in as $name');</script>";
            
            // Redirect the browser
            header("Location: account.php");
    }
    else
    {
        //something is wrong
        echo "<script>alert('$result')</script>";
        echo "Cannot match the user name and the password you entered!";
    }

?>



</html>

