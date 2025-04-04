<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once "./database_connect.php";
require_once "./function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    if ($email && $password) { 
        $check_email_query = "SELECT * FROM Users where Email = ?";
        $check_email_statement = $connection->prepare($check_email_query);
        $check_email_statement->bind_param("s", $email);
        $check_email_statement->execute();
        $result = $check_email_statement->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $salt1 = "%$32*^";
            $salt2 = "fwfbgh#$()";
            $token = hash('ripemd128', "$salt1$password$salt2");
            if ($token == $row["Passwords"]) { 
                session_regenerate_id(true);
                $_SESSION["Email"] = $email;
                $_SESSION["Passwords"] = $token;
                $_SESSION["User_name"] = $row["User_name"];
                $_SESSION["Money_spent"] = $row["Money_spent"];
                $_SESSION["PFP_URL"] = $row["PFP_URL"];
                $_SESSION["is_logged_in"] = true;
                echo "Sign in successfully";
                $connection->close();
                echo '<script>setTimeout(function(){ window.location.href = "http://localhost/Real-web-lab/index.php?page=home"; }, 4000);</script>';
            } else {
                echo $token . "<br>";
                echo $row["Passwords"] . "<br>";
                echo "Wrong email/password, try again.";
                $connection->close();
                echo '<script>setTimeout(function(){ window.location.href = "http://localhost/Real-web-lab/index.php?page=signin"; }, 4000);</script>';
            }
        } else {
            echo "Could not find your account, try again";
            $connection->close();
            echo '<script>setTimeout(function(){ window.location.href = "http://localhost/Real-web-lab/index.php?page=signin"; }, 4000);</script>';
        }
    }
    else {
        echo "Invalid input, try again";
        $connection->close();
        echo '<script>setTimeout(function(){ window.location.href = "http://localhost/Real-web-lab/index.php?page=signup"; }, 4000);</script>';
    }
}