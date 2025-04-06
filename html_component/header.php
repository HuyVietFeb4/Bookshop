<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>
<header>
    <a class="logo_area" href="index.php?page=home">
        <img id = "web_logo" src="image/bookstore_logo.png">
        <h1 id = "web_name">MyBook</h1>
    </a>
    <nav>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=books">Books</a></li>
            <li><a href="index.php?page=genres">Genres</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    <div class="user_area">
        <?php 
            if(isset($_SESSION["is_logged_in"]) and $_SESSION["is_logged_in"] == true) 
            { 
                echo '<a href="index.php?page=cart" id="cart"><img src="image/shopping-cart.png"></a>';
                echo '<a href="index.php?page=profile" id="profile"><img src="image/social_media/facebook.png"></a>';
                echo '<form method="POST" action="./logical/logout.php"> <button id="log_out_btn" type="submit">Log Out</button> </form>';
            } 
            else {
                echo '<a href="index.php?page=signin">Sign In</a>';
            }
        ?>
    </div>
</header>