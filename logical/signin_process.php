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

        $check_admin_query = "SELECT * FROM Admins where Email = ?";
        $check_admin_statement = $connection->prepare($check_admin_query);
        $check_admin_statement->bind_param("s", $email);
        $check_admin_statement->execute();
        $admin_result = $check_admin_statement->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            $salt1 = "%$32*^";
            $salt2 = "fwfbgh#$()";
            $token = hash('ripemd128', "$salt1$password$salt2");
            if ($token == $user["Passwords"]) { 
                session_regenerate_id(true);
                $_SESSION["Email"] = $email;
                $_SESSION["Passwords"] = $token;
                $_SESSION["User_name"] = $user["User_name"];
                $_SESSION["Money_spent"] = $user["Money_spent"];
                $_SESSION["Users_ID"] = $user["Users_ID"];
                $_SESSION["PFP_URL"] = $user["PFP_URL"];
                $_SESSION["is_logged_in"] = true;
                $_SESSION["is_admin"] = false;
                echo "Sign in successfully";
                $connection->close();
                header("Location: http://localhost/Real-web-lab/index.php?page=home");
            } else {
                echo "Wrong email/password, try again.";
                $connection->close();
                header("Location: http://localhost/Real-web-lab/index.php?page=signin");
            }
        } else if ($admin_result->num_rows == 1){
            $admin = $admin_result->fetch_assoc();
            $salt1 = "%$32*^";
            $salt2 = "fwfbgh#$()";
            $token = hash('ripemd128', "$salt1$password$salt2");
            if ($token == $admin["Passwords"]) { 
                session_regenerate_id(true);
                $_SESSION["Email"] = $email;
                $_SESSION["Passwords"] = $token;
                $_SESSION["Admin_name"] = $admin["Admin_name"];
                $_SESSION["Admins_ID"] = $admin["Admins_ID"];
                $_SESSION["PFP_URL"] = $admin["PFP_URL"];
                $_SESSION["is_logged_in"] = true;
                $_SESSION["is_admin"] = true;
                echo "Sign in successfully";
                $connection->close();
                header("Location: http://localhost/Real-web-lab/index.php?page=home");
            } else {
                echo $token . '<br>';
                echo $admin["Passwords"] . '<br>';
                echo "Wrong email/password, try again.";
                $connection->close();
                // header("Location: http://localhost/Real-web-lab/index.php?page=signin");
            }
        }
        else {
            echo "Could not find your account, try again";
            $connection->close();
            header("Location: http://localhost/Real-web-lab/index.php?page=signin");
        }
    }
    else {
        echo "Invalid input, try again";
        $connection->close();
        header("Location: http://localhost/Real-web-lab/index.php?page=signin");
    }
}