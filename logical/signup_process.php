<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once "./database_connect.php";
require_once "./function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize_input($_POST['email']);
    $username = sanitize_input($_POST['username']);
    $password = sanitize_input($_POST['password']);
    $confirm_password = sanitize_input($_POST['confirm_password']);

    if ($email && $username && $password && $confirm_password) { 
        $check_email_query = "SELECT Email FROM Users where Email = ?";
        $check_email_statement = $connection->prepare($check_email_query);
        $check_email_statement->bind_param("s", $email);
        $check_email_statement->execute();
        $result = $check_email_statement->get_result();

        if ($result->num_rows > 0) {
            echo "Email is already registered. Please use another email or sign in with this email.";
            header("Location: http://localhost/Real-web-lab/index.php?page=signun");
            $connection->close();
            exit();
        } else {
            $salt1 = "%$32*^";
            $salt2 = "fwfbgh#$()";
            $token = hash('ripemd128', "$salt1$password$salt2");
            add_user($connection, $email, $username, $token);
            echo "Sign up successfully, redirect to sign in page...";
            $connection->close();
            header("Location: http://localhost/Real-web-lab/index.php?page=signin");
        }
    }
    else {
        echo "Invalid input, try again";
        $connection->close();
        header("Location: http://localhost/Real-web-lab/index.php?page=signup");
    }
}