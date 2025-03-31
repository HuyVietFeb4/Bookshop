<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signin.css">
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
            <a href="index.php?page=signin">Sign In</a>
        </div>
    </header>
    <div class="big_container">
        <div class="container">
            <h2>Sign Up With</h2>
            <div class="social-login">
                <button class="facebook"><img id="fb_icon" src="image/social_media/facebook.svg"/>Facebook</button>
                <button class="google"><img id="gg_icon" src="image/social_media/google.svg"/>Google</button>
            </div>
            <form>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="input-group">
                    <label for="confirm_password">Confirm password</label>
                    <input type="password" id="confirm_password" name="confirm_password">
                </div>
                <button type="submit" class="sign-in">Sign Up</button>
            </form>
            <p class="signup">Already have an account? <a href="index.php?page=signin">Sign in now</a></p>
        </div>
    </div>
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
</body>
</html>
