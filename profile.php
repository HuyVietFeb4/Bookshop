<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>User profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <header>
        <div class="logo_area">
            <img id = "web_logo" src="image/bookstore_logo.png">
            <h1 id = "web_name">MyBook</h1>
        </div>

        <nav>
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=books">Books</a></li>
                <li><a href="index.php?page=genres">Genres</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>

        <div class="user_area">
            <!-- <a href="index.php?page=signin">Sign In</a> -->
            <a href="index.php?page=cart"><img src="image/shopping-cart.png"></a>
            <a href="index.php?page=profile"><img src="image/social_media/facebook.png"></a>
        </div>
    </header>


    <section class="user_profile">
        <div class="profile_header">
            <img id="profile_pic" src="image/default_profile.png" alt="Profile Picture">
            <div class="profile_info">
                <p id="profile_name">Your Name</p>
                <p id="profile_email">yourname@gmail.com</p>
            </div>
            <button id="edit_button">Edit Profile</button>
        </div>
    </section>

    <!-- Next: add navigation to pages like shopee and benefit sections -->
    <section class="modal">
        <form id="edit_profile_form">
            <div class="form_header">
                <h2>Edit Profile</h2>
                <image id="pop_out_btn" src="./image/x-mark.png"></image>
            </div>
            <div class="field">
                <label for="name">Name:</label>
                <input type="text" id="name" value="Your Name">
            </div>
            <div class="field">
                <label for="email">Email Account:</label>
                <input type="email" id="email" value="yourname@gmail.com">
            </div>
            <div class="field">
                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile" placeholder="Add number">
            </div>
            <div class="field">
                <label for="location">Location:</label>
                <input type="text" id="location" value="USA">
            </div>
            <button type="button" id="save_changes">Save Changes</button>
        </form>
    </section>
    
    
    <footer>
        <div class="store_info">
            <div class="contact_info">
                <h1 id = "web_name">MyBook</h1>
                <p id = "phone_number">(828) 456-8420</p>
                <p id = "address">60 Locust Dr Waynesville North Carolina United States</p>
            </div>
            <p id="or">or</p>
            <div class="social_media">
                <img src="image/social_media/facebook.png" alt="Facebook">
                <img src="image/social_media/instagram.png" alt="Instagram">
                <img src="image/social_media/tiktok.png" alt="TikTok">
                <img src="image/social_media/twitter.png" alt="Twitter">
            </div>
        </div>
        <p id="copyright">&copy; 2025 Huy Viet. All Rights Reserved.</p>
    </footer>
    <script src="./js/edit_profile.js"></script>
</body>


</html>