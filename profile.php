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
                <p id="profile_name">Your Name</p>
                <p id="profile_email">yourname@gmail.com</p>
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
    
    <section class="user_past_activity">
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
        </div>
        <div class="past_comment">
            
        </div>
    </section>
    
    <?php require_once './html_component/footer.php'; ?>
    <script src="./js/edit_profile.js"></script>
</body>


</html>