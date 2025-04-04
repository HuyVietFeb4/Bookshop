<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $_SESSION["is_logged_in"] = false;
    $page = 'home';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    else if (isset($_POST['page'])) {
        $page = $_POST['page'];
    }
    include "$page.php";
?>