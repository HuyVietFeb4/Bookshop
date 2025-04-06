<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once "./database_connect.php";
require_once "./function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize_input($_POST["email"]);
    $name = sanitize_input($_POST["name"]);
    $subject = sanitize_input($_POST["subject"]);
    $message = sanitize_input($_POST["message"]);
    if ($email && $name && $subject && $message) { 
        $add_contact_query = 'INSERT INTO Contact (Names, Email, Title, Messages) VALUES (?, ?, ?, ?)';
        $add_contact_statement = $connection->prepare($add_contact_query);
        $add_contact_statement->bind_param("ssss", $name, $email, $subject, $message);
        $add_contact_statement->execute();
        $connection->close();
        header("Location: http://localhost/Real-web-lab/index.php?page=contact");
    }
    else {
        echo 'Invalid input, try again';
        $connection->close();
        header("Location: http://localhost/Real-web-lab/index.php?page=contact");
    }
}