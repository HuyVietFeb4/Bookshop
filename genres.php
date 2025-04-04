<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Genres</title>
    <link rel="stylesheet" href="css/genres.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php require_once './html_component/header.php'; ?>

    <section class="welcome_area">
        <p id="welcome_title">Genres</p>
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

    <section class="genres">
        
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
    <?php require_once './html_component/footer.php'; ?>
</body>


</html>