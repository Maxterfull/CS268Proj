
<html>
    <?php
        session_start();
        
        ?>
    <script type="text/javascript" src="js/search.js"></script>
    <head>
        <title>Account</title>
        <link rel ="stylesheet" type="text/CSS" href="recipeCSS.css">
    </head>
    <body>
        
        <div class="grid">
            <div class="header">
                <div class="header-container">
                <ul class="styled-list">
                    <li class="styled-list"><a href="homepage.html" target="_blank">Home</a></li>
                    <li class="styled-list"><a href="about.html" target="_blank">About</a></li>
                    <li class="styled-list"><a href="recipePages.html" target="_blank">Recipe Central</a></li>
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
            
            <div>
            You are not currently logged in.
            <br>
            
            Don't have an account? <a href="Register.php">Sign up now</a>.
            <br>
            
            Ready to log in? <a href="login.php">Login</a>.
        
            </div> 
            
            <div>
                
            </div>
        </div>
    </body>
    
    
    <?php 
    if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"] == true){
        $name = $_SESSION["username"];

        header("Location: accountloggedin.php");

        
    }
    ?>
        
</html>
