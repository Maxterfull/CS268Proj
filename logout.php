<html>
<head>

<title>
</title>
</head>
<body>
<p>Welcome to the secret page!</p>
<?php
session_start();

//unset all the session variables
$_SESSION = array();

session_destroy();
header('location: homepage.html')



?>

</body>
</html>
