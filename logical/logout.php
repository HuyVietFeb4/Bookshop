<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname(dirname($_SERVER['PHP_SELF'])), '/\\');
if(isset($_SESSION["is_logged_in"]) and $_SESSION["is_logged_in"] == true) {
    session_unset();
    session_destroy();
    header("Location: $base_url/index.php?page=home");
}