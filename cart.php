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
    <title>Cart</title>
    <link rel="stylesheet" href="css/cart.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php require_once './html_component/header.php'; ?>
    <section class="welcome_area">
        <p id="welcome_title">Cart</p>
    </section>
    
    <section class="shopping_cart">
        <div class="buy_item">
            <div class="buy_heading">
                <p id="name">Name</p>
                <p id="price">Price</p>
                <p id="quantity">Quantity</p>
                <p id="subtotal">Subtotal</p>
                <p id="condition">Condition</p>
            </div>

            <div class="book_info">
                <img src="image/books/default.jpg">
                <p id="name">Lorem concac</p>
                <p id="price">VND 300.000</p>
                <p id="quantity">2</p>
                <p id="subtotal">VND 600.000</p>
                <p id="condition">Used</p>
                <img src="./image/bin.png" alt="" id="discard_btn">
            </div>

            <div class="book_info">
                <img src="image/books/default.jpg">
                <p id="name">Lorem concac</p>
                <p id="price">VND 300.000</p>
                <p id="quantity">2</p>
                <p id="subtotal">VND 600.000</p>
                <p id="condition">Used</p>
                <img src="./image/bin.png" alt="" id="discard_btn">
            </div>

            <div class="book_info">
                <img src="image/books/default.jpg">
                <p id="name">Lorem concac</p>
                <p id="price">VND 300.000</p>
                <p id="quantity">2</p>
                <p id="subtotal">VND 600.000</p>
                <p id="condition">Used</p>
                <img src="./image/bin.png" alt="" id="discard_btn">
            </div>

            <div class="book_info">
                <img src="image/books/default.jpg">
                <p id="name">Lorem concac</p>
                <p id="price">VND 300.000</p>
                <p id="quantity">2</p>
                <p id="subtotal">VND 600.000</p>
                <p id="condition">Used</p>
                <img src="./image/bin.png" alt="" id="discard_btn">
            </div>
        </div>

        <div class="cart_info">
            <h2>Cart Totals</h2>
            <div class="field">
                <p>Total:</p>
                <p>VND 100.000.000</p>
            </div>
            <div class="field">
                <p>Item count:</p>
                <p>2</p>
            </div>
            <div class="button_container">
                <button id='checkout_btn'>Check Out</button>
            </div>
        </div>
    </section>
    <?php require_once './html_component/benefit.php'; ?>
    <?php require_once './html_component/footer.php'; ?>
</body>


</html>