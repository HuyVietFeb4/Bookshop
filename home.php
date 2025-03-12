<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
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
    <section class="welcome_area">
        <div class="welcome_content">
            <p id="welcome_title">Finding a book to read? You are in the right place!</p>
            <p>Fiction, comics, documentaries, horror, fantasy — you name it, we've got it all right here!</p>
            <button id="btn_buy_now">BUY NOW</button>
        </div>
    </section>

    <section class="genres">
        <div class="intro">
            <p id="title">Browse The Genres</p>
            <p id="content">Discover new genres or finding new kind books to read!</p>
        </div>
        
        <div class="genre_list">
            <div class="genre_card">
                <img id = "genre_img" src="image/books/default.jpg">
                <p>Something</p>
            </div>

            <div class="genre_card">
                <img id = "genre_img" src="image/books/default.jpg">
                <p>Something</p>
            </div>

            <div class="genre_card">
                <img id = "genre_img" src="image/books/default.jpg">
                <p>Something</p>
            </div>

            <div class="genre_card">
                <img id = "genre_img" src="image/books/default.jpg">
                <p>Something</p>
            </div>
        </div>
        <div class="btn_explore_more">
            <button id="explore_more">Explore more</button>
        </div>
        
    </section>

    <section class="newly_arrive">
        <div class="intro">
            <p id="title">Newly Arrive Books</p>            
            <p id="content">Discover our newly arrive books from all around the world!</p>
        </div>
        <div class="book_list">
            <div class="book_card">
                <img id = "book_img" src="image/books/default.jpg">
                <div class="book_info">
                    <h3>Title Lorem ipsum dolor sit amet.</h3>
                    <p id="description">Description Lorem ipsum dolor sit amet consectetur, adipisicing elit. lorem</p>
                    <div class="btn_book">
                        <p id="price">VND 234.422</p>
                        <button id="add_to_cart">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn_explore_more">
            <button id="explore_more">Explore more</button>
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
</body>


</html>