
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
        <div>
            You are logged in as <?php echo $_SESSION["username"];?>
            <br>
            Want to logout? <a href="logout.php">logout</a>
            <br>
            You can access the members only page with an exclusive recipe <a href="members.php">here.</a>
            


            </div> 
            
            <div class = "footer">
                
            </div>
        </div>
    </body>
    
        
</html>
