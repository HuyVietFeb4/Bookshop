<?php 
function add_user($connection, $email, $user_name, $password)
{
    $query = "INSERT INTO Users (Email, User_name, Passwords, Money_spent, PFP_URL) VALUES (?, ?, ?, ?, ?)";
    $statement = $connection->prepare($query);
    $total_money = 0;
    $pfp_url = "default_profile.png";
    $statement->bind_param("sssis", $email, $user_name, $password, $total_money, $pfp_url);
    $statement->execute();
}

function sanitize_input($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}