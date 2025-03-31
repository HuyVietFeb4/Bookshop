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
            <a href="index.php?page=profile"><img src="image/social_media/facebook.png"></a>
        </div>
    </header>

    <section class="book_detail">
        <img id = "book_image" src="image/books/default.jpg">
        <div class="detail">
            <p id="title">Lorem ipsum dolor sit amet.</p>
            <p>VND <a id="price_detail">300.000</a></p>
            <p>By <a id="author">WHO</a></p>
            <div class="stars_container">
                <img src="./image/books/star.jpg">
                <img src="./image/books/star.jpg">
                <img src="./image/books/star.jpg">
                <img src="./image/books/star.jpg">
                <img src="./image/books/half-star.jpg">
            </div>
            <p id="genre">Genres: Lorem, ipsum.</p>
            <p id="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, illo repellendus! Dicta fugit labore incidunt nam sed assumenda, alias quae.</p>

            <div class="condition">
                <p>Condition</p>
                <div id="choose_condition">
                    <button id="chosen">New</button>
                    <button>Used</button>
                    <button>Digital</button>
                </div>
            </div>

            <div class="order_detail">
                <div class="quanity_change">
                    <button id="minus">-</button>
                    <span id="quanity">1</span>
                    <button id="plus">+</button>
                </div>
                <button id="add_to_cart_btn">Add to cart</button>
            </div>
        </div>
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
    <script src="./js/star_rating.js"></script>
</body>


</html>