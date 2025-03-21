<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Books</title>
    <link rel="stylesheet" href="css/books.css">
    <!-- <link rel="stylesheet" href="css/component/filter.css"> -->
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
        <p id="welcome_title">Books</p>
    </section>

    <section class="filter_area">
        <div class="search_area">
            <input type="text" id="search_bar" placeholder="Search something...">
            <button id="search_button"><img src="image/search.png"></button>
        </div>

        <form class="sort_form">
            <select for="sort_by" id="sort_by" name="sort_by">
                <option value="_">Sort by</option>
                <option value="title">Title</option>
                <option value="price">Price</option>
                <option value="star">Stars</option>
            </select>
        
            <select for="sort_order" id="sort_order" name="sort_order">
                <option value="_">Sort order</option>
                <option value="ASC">Ascending</option>
                <option value="DESC">Descending</option>
            </select>
            <input id ="confirm_sort" type="submit" value="Sort"/>
        </form>
        
    </section>

    <section class="book_list">
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

        <div class="book_card">
            <img id = "book_img" src="image/books/default.jpg">
            <div class="book_info">
                <p id="book_title">Title Lorem ipsum</p>
                <div class="star_container">
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
    </section>
    
    <section class="page_area">
        <div id="prev_page">Previous</div>
        <div id="main_page">1</div>
        <div id="page">2</div>
        <div id="page">3</div>
        <div id="next_page">Next</div>
    </section>

    <section class="benefit_area">
        <div class="benefit_content">
            <img src="image/benefit/choice.png">
            <div class="content_container">
                <p id="benefit_title">Diverse selection</p>
                <p id="benefit_detail">Over 1000+ books to choose</p>
            </div>
        </div>

        <div class="benefit_content">
            <img src="image/benefit/free-delivery.png">
            <div class="content_container">
                <p id="benefit_title">Free Shipping</p>
                <p id="benefit_detail">Order over 300.000 VND</p>
            </div>
        </div>

        <div class="benefit_content">
            <img src="image/benefit/coupon.png">
            <div class="content_container">
                <p id="benefit_title">Exclusive Offers and Discounts</p>
                <p id="benefit_detail">Sales happen every week</p>
            </div>
        </div>

        <div class="benefit_content">
            <img src="image/benefit/customer-support.png">
            <div class="content_container">
                <p id="benefit_title">24/7 Support</p>
                <p id="benefit_detail">Dedicated support</p>
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
</body>


</html>