<!DOCTYPE html>
<html>
    <script type="text/javascript" src="js/search.js"></script>
    <head>
        <title>Register your account</title>
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
        <?php include 'registerpage.php';?>
        <?php include 'userpage.php'; ?>
        <form action="register.php" method="post">
    <p>Username:</p>
    <input type="text" name="username">  
    <p>Password</p>
    <input type="password" name="password">
    <p>Reenter Password</p>
    <input type="password1" name="password1">
    <input type="submit" value="Login">
    </form>
</body>
<?php
    if(empty($_POST['username']) || empty($_POST['password'])){
        die();
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];

    //remove malicious contents
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);
    $password1 = htmlspecialchars($password1);

    

    if($password===$password1){
    //enter password to database
    $check = name($username);
    if($check){echo 'username in use';
    echo '<script>alert("Username is already in use")</script>';
    header("refresh:0");
    
}
    $result = check_user($username, $password);



    if($result === true)
    {
        session_start();
            //create session information
            $_SESSION["loggedin"] = true;
            $_SESSION['username'] = $username;
            $_SESSION["id"] = $username.date("Y-m-d H:i:s");
            
            // Redirect the browser
            
    }
    else
    {
        //something is wrong
        echo "<script>alert('$result')</script>";
        echo "Cannot match the user name and the password you entered!";
    }
}else{
    echo '<script>alert("Entered Passwords Do Not Match")</script>';

}

?>


        </div>
    </body>
</html>

