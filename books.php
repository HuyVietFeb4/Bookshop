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
    <title>Books</title>
    <link rel="stylesheet" href="css/books.css">
    <!-- <link rel="stylesheet" href="css/component/filter.css"> -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php require_once './html_component/header.php'; ?>

    <section class="welcome_area">
        <p id="welcome_title">Books</p>
    </section>

    <section class="filter_area">
        <div class="search_area">
            <input type="text" id="search_bar" placeholder="Search something...">
            <button id="search_button"><img src="image/search.png"></button>
            <button id="add_book_btn">Add book</button>
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

    <section class="add_book">
        <form id="add_book_form">
            <div class="form_header">
                <h2>Add Book Detail</h2>
                <image id="pop_out_btn" src="./image/x-mark.png"></image>
            </div>
            <div class="field">
                <label for="book_cover">Book Cover:</label>
                <input type="file" id="book_cover" name="book_cover" accept=".png, .jpg, .jpeg">
            </div>
            <div class="field">
                <label for="book_name">Book Name:</label>
                <input type="text" id="book_name">
            </div>
            <div class="field">
                <label for="book_price">Price:</label>
                <input type="email" id="book_price">
            </div>
            <div class="field">
                <label for="book_genre">Book Genre:</label>
                <input type="text" id="book_genre">
            </div>
            <div class="field">
                <label for="book_description">Description:</label>
                <textarea id="book_description" class="input"></textarea>
            </div>
            <button type="button" id="save_changes">Save Changes</button>
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

    <?php require_once './html_component/benefit.php'; ?>
    <?php require_once './html_component/footer.php'; ?>
    <script src="./js/add_book.js"></script>
</body>


</html>