<?php


//check if the user is in the database
function check_user($username, $password){
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname= "user_system";
    //disable mysqli error report
    mysqli_report(MYSQLI_REPORT_OFF);
    // Create connection
    //i here means improved
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error)
    {
        $conn->close();
        return "Database connection error";
    }
    

    $sql = "SELECT * FROM users WHERE username = '$username';";
    $result = $conn->query($sql);

    if (!$result) {
        $conn->close();
        return "sql operation error";
    } 

    if ($result->num_rows > 0) {
        // output data of each row
        $conn->close();
        $hashed_password = $result->fetch_assoc()["password"];

        //
        if(password_verify($password, $hashed_password))
        {
            return true;
        }
        else
        {
            return "The password you entered is wrong!";
        }
    }
    else
    {
        $conn->close();
        return "Cannot match the user name you entered!";
    }
}

?>
