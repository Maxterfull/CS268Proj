<?php
        session_start();
        ?>
<head>
    <link rel ="stylesheet" type="text/CSS" href="recipeCSS.css">
    <title>Special Members Page</title>
    

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
    <h1>Welcome to the members page!</h1>
    <h2>This is the spot to see new recipes, released early.</h2>
    
    <h2>Ingredients:</h2>
    <ul>
        <li><strong>Brownies</strong></li>
        <ul>
            <li>1/2 cup butter</li>
            <li>1 cup white sugar</li>
            <li>2 eggs</li>
            <li>1/3 cup unsweetened cocoa powder</li>
            <li>1/2 cup all purpose flower</li>
            <li>1/4 teaspoon baking powder</li>
        </ul>
        

    <h2>Instructions:</h2>
    <ol>
        <li><strong>Preheat the oven:</strong> Preheat the oven to 350°F (245°C).</li>
        <li> On a lightly floured surface, roll out the dough into a round shape about 1/4 inch thick.
             Transfer the dough to a pizza stone or baking sheet lined with parchment paper.</li>
        <li>Melt 1/2 cup butter in a large saucepan. Remove from heat, and stir in sugar, eggs, and 1 teaspoon vanilla. Beat in 1/3 cup cocoa, flour, salt, and baking powder. Spread batter into prepared pan.

</li>
        <li>Bake in the preheated oven until top is dry and edges have started to pull away from the sides of the pan, about 25 to 30 minutes. Let cool.</li>
    </ol>

    <h2>Enjoy your delicious brownies!</h2>
</body>

</html>
