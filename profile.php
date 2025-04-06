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
    <title>User profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>

    <?php require_once './html_component/header.php'; ?>

    <section class="user_profile">
        <div class="profile_header">
            <img id="profile_pic" src="image/default_profile.png" alt="Profile Picture">
            <div class="profile_info">
                <?php 
                    echo '<p id="profile_name">' . $_SESSION["User_name"] . '</p>';
                    echo '<p id="profile_email">' . $_SESSION["Email"] . '</p>';
                    echo '<p id="money_spent">Money spent: USD ' . $_SESSION["Money_spent"] . '</p>';
                ?>
            </div>
            <button id="edit_button">Edit Profile</button>
        </div>
    </section>

    <section class="modal">
        <form id="edit_profile_form">
            <div class="form_header">
                <h2>Edit Profile</h2>
                <image id="pop_out_btn" src="./image/x-mark.png"></image>
            </div>
            <div class="field">
                <label for="profile_picture">Change Profile Picture:</label>
                <input type="file" id="profile_picture" name="profile_picture" accept=".png, .jpg, .jpeg">
            </div>
            <div class="field">
                <label for="name">Username:</label>
                <input type="text" id="name" value="Your Name">
            </div>
            <div class="field">
                <label for="email">Email Account:</label>
                <input type="email" id="email" value="yourname@gmail.com">
            </div>
            <div class="field">
                <label for="password">Password:</label>
                <input type="password" id="password">
            </div>
            <div class="field">
                <label for="confirm_password">Confirm password:</label>
                <input type="password" id="confirm_password">
            </div>
            <button type="button" id="save_changes">Save Changes</button>
        </form>
    </section>
    
    <section class="user_past_activity">
        <h2 id="past_order_header">Past order</h2>
        <div class="past_order">
            <div class="buy_heading">
                <p id="order_id">Order</p>
                <p id="name">Name</p>
                <p id="price">Price</p>
                <p id="quantity">Quantity</p>
                <p id="subtotal">Subtotal</p>
                <p id="condition">Condition</p>
                <p id="date">Date</p>
            </div>

            <div class="book_info">
                <img src="image/books/default.jpg">
                <p id="order_id">30</p>
                <p id="name">Lorem concac</p>
                <p id="price">VND 300.000</p>
                <p id="quantity">2</p>
                <p id="subtotal">VND 600.000</p>
                <p id="condition">Used</p>
                <p id="date">04-02-3333</p>
            </div>

            <div class="book_info">
                <img src="image/books/default.jpg">
                <p id="order_id">30</p>
                <p id="name">Lorem concac</p>
                <p id="price">VND 300.000</p>
                <p id="quantity">2</p>
                <p id="subtotal">VND 600.000</p>
                <p id="condition">Used</p>
                <p id="date">04-02-3333</p>
            </div>

            <div class="book_info">
                <img src="image/books/default.jpg">
                <p id="order_id">30</p>
                <p id="name">Lorem concac</p>
                <p id="price">VND 300.000</p>
                <p id="quantity">2</p>
                <p id="subtotal">VND 600.000</p>
                <p id="condition">Used</p>
                <p id="date">04-02-3333</p>
            </div>

            <div class="book_info">
                <img src="image/books/default.jpg">
                <p id="order_id">30</p>
                <p id="name">Lorem concac</p>
                <p id="price">VND 300.000</p>
                <p id="quantity">2</p>
                <p id="subtotal">VND 600.000</p>
                <p id="condition">Used</p>
                <p id="date">04-02-3333</p>
            </div>

            <div class="book_info">
                <img src="image/books/default.jpg">
                <p id="order_id">30</p>
                <p id="name">Lorem concac</p>
                <p id="price">VND 300.000</p>
                <p id="quantity">2</p>
                <p id="subtotal">VND 600.000</p>
                <p id="condition">Used</p>
                <p id="date">04-02-3333</p>
            </div>
            <button id="other_reviews">See 99+ other order</button>
        </div>

        <div class="past_comment">
            <h2 id="past_order_header">Past Comment</h2>
            <section class="customer_review">
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
                        <a href="index.php?page=product">On 1984</a>
                    </div>
                </div>
                <div class="customer">
                    <div class="info_container">
                        <img src="image/bookstore_logo.png" id="customer_pfp">
                        <div class="detail_info">
                            <p id="name">Lorem ipsumae eveniet doloribus a odio? Maiores?</p>
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
                        <p id="comment">Lorem ipsum dolornihil molestiae rerum necessitatibus blanditiis ratione deleniti repellat, quas provident exercitationem praesentium, ducimus error quasi odit.</p>
                        <a href="index.php?page=product">On 1984</a>
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
                        <a href="index.php?page=product">On 1984</a>
                    </div>
                </div>
                <button id="other_reviews">See 99+ other reviews</button>
            </section>
        </div>
    </section>
    
    <?php require_once './html_component/footer.php'; ?>
    <script src="./js/edit_profile.js"></script>
</body>


</html>