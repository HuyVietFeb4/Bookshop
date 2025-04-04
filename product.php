<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Book detail</title>
    <link rel="stylesheet" href="css/product.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php require_once './html_component/header.php'; ?>

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
                    <button id="chosen" class="new_btn">New</button>
                    <button class="used_btn">Used</button>
                    <button class="digital_btn">Digital</button>
                </div>
            </div>

            <div class="order_detail">
                <input type="number" id="quantity_change" min="1" max="100" oninput="this.value = this.value < 1 ? '' : this.value.replace(/\D/g, '');">
                <button id="add_to_cart_btn">Add to cart</button>
                <button id="edit_book_button">Edit Book</button>
                <button id="delete_book_button">Delete Book</button>
            </div>
        </div>
    </section>
    
    <section class="admin_action">
        <form id="edit_book_form">
            <div class="form_header">
                <h2>Edit Book Detail</h2>
                <image id="pop_out_btn" src="./image/x-mark.png"></image>
            </div>
            <div class="field">
                <label for="book_cover">Change Book Cover:</label>
                <input type="file" id="book_cover" name="book_cover" accept=".png, .jpg, .jpeg">
            </div>
            <div class="field">
                <label for="book_name">Book Name:</label>
                <input type="text" id="book_name" value="Lorem ipsum dolor sit amet.">
            </div>
            <div class="field">
                <label for="book_price">Price:</label>
                <input type="email" id="book_price" value="300.000">
            </div>
            <div class="field">
                <label for="book_genre">Book Genre:</label>
                <input type="text" id="book_genre" placeholder="Lorem, ipsum">
            </div>
            <div class="field">
                <label for="book_description">Description:</label>
                <textarea id="book_description" class="input">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, illo repellendus! Dicta fugit labore incidunt nam sed assumenda, alias quae.</textarea>
            </div>
            <button type="button" id="save_changes">Save Changes</button>
        </form>
    </section>
    <section class="user_comment">
        <form action="" class="user_comment_input">
            <div class="info_container">
                <img src="image/bookstore_logo.png" id="customer_pfp">
                <div class="detail_info">
                    <p id="name">Lorem, ipsum.</p>
                </div>
            </div>
            <div class="comment_area">
                <div class="star_rating">
                    <span id="star_input" data-value="1"><img src="./image/books/grey_star.png"></span>
                    <span id="star_input" data-value="2"><img src="./image/books/grey_star.png"></span>
                    <span id="star_input" data-value="3"><img src="./image/books/grey_star.png"></span>
                    <span id="star_input" data-value="4"><img src="./image/books/grey_star.png"></span>
                    <span id="star_input" data-value="5"><img src="./image/books/grey_star.png"></span>
                </div>
                <textarea id="comment_input" placeholder="Type here" class="input"></textarea>
                <input type="submit" value="Submit" id="btn_submit">
            </div>
           
        </form>
    </section>

    <section class="related_products">
        <p id="related_title">Related Products</p>
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
        </div>
    </section>

    <section class="customer_review">
        <p id="reiview_title">Customer review</p>
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
    <script src="./js/star_rating.js"></script>
    <script src="./js/product_detail.js"></script>
    <script src="./js/like_dislike_review.js"></script>
    <script src="./js/admin_edit.js"></script>
</body>


</html>