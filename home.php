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
    <?php require_once './html_component/header.php'; ?>

    <section class="welcome_area">
        <div class="welcome_content">
            <p id="welcome_title">Finding a book to read? You are in the right place!</p>
            <p>Fiction, comics, documentaries, horror, fantasy — you name it, we've got it all right here!</p>
            <button id="btn_buy_now">BUY NOW</button>
        </div>
    </section>
    <?php require_once './html_component/benefit.php'; ?>
    <section class="genres">
        <div class="intro">
            <p id="title">Browse The Genres</p>
            <p id="content">Discover new genres or finding new kind of books to read!</p>
        </div>
        
        <div class="genre_list">
            <div class="genre_card">
                <img id = "genre_img" src="image/books/default.jpg">
                <p id="genre_name">Something</p>
            </div>

            <div class="genre_card">
                <img id = "genre_img" src="image/books/default.jpg">
                <p id="genre_name">Something</p>
            </div>

            <div class="genre_card">
                <img id = "genre_img" src="image/books/default.jpg">
                <p id="genre_name">Something</p>
            </div>

            <div class="genre_card">
                <img id = "genre_img" src="image/books/default.jpg">
                <p id="genre_name">Something</p>
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
                <p id="book_title">Title Lorem ipsum</p>
                <div class="star_container">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                </div>
                <div class="btn_book">
                    <p id="price">VND 234.422</p>
                    <button id="add_to_cart">Add to cart</button>
                </div>
            </div>
        </div>
        <div class="book_card">
            <img id = "book_img" src="image/books/default.jpg">
            <div class="book_info">
                <p id="book_title">Title Lorem ipsum</p>
                <div class="star_container">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                </div>
                <div class="btn_book">
                    <p id="price">VND 234.422</p>
                    <button id="add_to_cart">Add to cart</button>
                </div>
            </div>
        </div>
        <div class="book_card">
            <img id = "book_img" src="image/books/default.jpg">
            <div class="book_info">
                <p id="book_title">Title Lorem ipsum</p>
                <div class="star_container">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/half-star.jpg">
                </div>
                <div class="btn_book">
                    <p id="price">VND 234.422</p>
                    <button id="add_to_cart">Add to cart</button>
                </div>
            </div>
        </div>

        <div class="book_card">
            <img id = "book_img" src="image/books/default.jpg">
            <div class="book_info">
                <p id="book_title">Title Lorem ipsum</p>
                <div class="star_container">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/half-star.jpg">
                </div>
                <div class="btn_book">
                    <p id="price">VND 234.422</p>
                    <button id="add_to_cart">Add to cart</button>
                </div>
            </div>
        </div>

        <div class="book_card">
            <img id = "book_img" src="image/books/default.jpg">
            <div class="book_info">
                <p id="book_title">Title Lorem ipsum</p>
                <div class="star_container">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/half-star.jpg">
                </div>
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
    
    <?php require_once './html_component/footer.php'; ?>
</body>


</html>