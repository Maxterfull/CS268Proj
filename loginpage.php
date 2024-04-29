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
            <form method="post" action="login.php">
                Name:<input type="text" name="name"><br>
                Password:<input type="text" name="password"><br>
                <input type="submit">
            </form>    
        </div>
    </body>
</html>