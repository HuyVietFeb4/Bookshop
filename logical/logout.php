<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(isset($_SESSION["is_logged_in"]) and $_SESSION["is_logged_in"] == true) {
    session_unset();
    session_destroy();
    header("Location: http://localhost/Real-web-lab/index.php?page=home");
}