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
    <title>Books review</title>
    <link rel="stylesheet" href="css/review.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php require_once './html_component/header.php'; ?>

    <section class="filter_area">
        <form class="sort_form">
            <select for="sort_by" id="sort_by" name="sort_by">
                <option value="_">Sort by</option>
                <option value="helpful">Helpful</option>
                <option value="date">Date</option>
            </select>
        
            <select for="sort_order" id="sort_order" name="sort_order">
                <option value="_">Sort order</option>
                <option value="ASC">Ascending</option>
                <option value="DESC">Descending</option>
            </select>
            <input id ="confirm_sort" type="submit" value="Sort"/>
        </form>
    </section>

    <section class="customer_review">
        <p id="reiview_title">Customer review</p>
        <hr id="horizontal">
        <div class="customer">
            <div class="info_container">
                <img src="image/bookstore_logo.png" id="customer_pfp">
                <div class="detail_info">
                    <p id="name">Lorem, ipsum.</p>
                    <p id="total_spent">Total spent: 200.000 VND</p>
                    <p id="total_review">Total review: 29</p>
                </div>
            </div>
            <div class="review_detail">
                <div class="star_container">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/half-star.jpg">
                </div>
                <p id="date">29-02-2022</p>
                <p id="comment">lorem1000</p>
                <div class="btn_container">
                    <div class="helpful_btn_container">
                        <button id="helpful_btn"><img src="image/books/like.jpg"></button>
                        <p id="like_sum">230</p>
                    </div>
                    <div class="not_helpful_btn_container">
                        <button id="not_helpful_btn"><img src="image/books/dislike.jpg"></button>
                        <p id="dislike_sum">20</p>
                    </div>
                </div>
            </div>
        </div>
        <hr id="horizontal">
        <div class="customer">
            <div class="info_container">
                <img src="image/bookstore_logo.png" id="customer_pfp">
                <div class="detail_info">
                    <p id="name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quae eveniet doloribus facere et, maxime, corporis amet error reiciendis rem, ea quaerat dolorem aperiam quas. Nam modi dicta odio? Maiores?</p>
                    <p id="total_spent">Total spent: 200.000 VND</p>
                    <p id="total_review">Total review: 29</p>
                </div>
            </div>
            <div class="review_detail">
                <div class="star_container">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/half-star.jpg">
                </div>
                <p id="date">29-02-2022</p>
                <p id="comment">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium vitae eius, est deserunt sunt nihil molestiae rerum necessitatibus blanditiis ratione deleniti repellat, quas provident exercitationem praesentium, ducimus error quasi odit.</p>
                <div class="btn_container">
                    <div class="helpful_btn_container">
                        <button id="helpful_btn"><img src="image/books/like.jpg"></button>
                        <p id="like_sum">230</p>
                    </div>
                    <div class="not_helpful_btn_container">
                        <button id="not_helpful_btn"><img src="image/books/dislike.jpg"></button>
                        <p id="dislike_sum">20</p>
                    </div>
                </div>
            </div>
        </div>
        <hr id="horizontal">
        <div class="customer">
            <div class="info_container">
                <img src="image/bookstore_logo.png" id="customer_pfp">
                <div class="detail_info">
                    <p id="name">Lorem, ipsum.</p>
                    <p id="total_spent">Total spent: 200.000 VND</p>
                    <p id="total_review">Total review: 29</p>
                </div>
            </div>
            <div class="review_detail">
                <div class="star_container">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/star.jpg">
                    <img src="./image/books/half-star.jpg">
                </div>
                <p id="date">29-02-2022</p>
                <p id="comment">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia alias asperiores nostrum unde cupiditate, atque perferendis delectus sit necessitatibus commodi repudiandae nemo, doloremque qui laudantium rem perspiciatis inventore similique optio.</p>
                <div class="btn_container">
                    <div class="helpful_btn_container">
                        <button id="helpful_btn"><img src="image/books/like.jpg"></button>
                        <p id="like_sum">230</p>
                    </div>
                    <div class="not_helpful_btn_container">
                        <button id="not_helpful_btn"><img src="image/books/dislike.jpg"></button>
                        <p id="dislike_sum">20</p>
                    </div>
                </div>
            </div>
        </div>
        <button id="other_reviews">See 99+ other reviews</button>
    </section>

    <?php require_once './html_component/footer.php'; ?>
    <script src="./js/like_dislike_review.js"></script>
</body>


</html>