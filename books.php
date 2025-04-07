<?php
    require_once "./logical/database_connect.php";
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION["page_number"])) {
        $_SESSION["page_number"] = 1;
    }
    if(!isset($_SESSION["sort_order"])) {
        $_SESSION["sort_order"] = '_';
    }
    if(!isset($_SESSION["sort_by"])) {
        $_SESSION["sort_by"] = '_';
    }
    $_SESSION["page_number"] = isset($_GET["page_number"]) ? (int)$_GET["page_number"] :  1;
    if($_SESSION["page_number"] <= 0) {
        $_SESSION["page_number"] = 1;
    }
    $books_per_page = 10;
    $num_adjacents_page = 2;
    $_SESSION["books_per_page"] = $books_per_page;
    $_SESSION["num_adjacents_page"] = $num_adjacents_page;
    // Calculate the offset to know which range of books to retrieve
    $offset = ($_SESSION["page_number"] - 1) * $books_per_page;

    // count number of rows/books
    $books_query = "SELECT * FROM Book";
    $books_query_result = $connection->query($books_query);
    $total_books = $books_query_result->num_rows;
    $_SESSION["total_books"] = $total_books;
    $total_pages = ceil($total_books / $books_per_page);
    $_SESSION["total_pages"] = $total_books;
    $current_page_query = "";


    if($_SESSION["sort_by"] != "_" && $_SESSION["sort_order"] != "_") { // Enough sort categories selected
        $current_page_query = 'SELECT * FROM Book ORDER BY ' . $_SESSION["sort_by"] . ' ' . $_SESSION["sort_order"] . ' LIMIT ' . $books_per_page . ' OFFSET ' . $offset;
    }
    else {
        $current_page_query = "SELECT * FROM Book LIMIT $books_per_page OFFSET $offset";
    }

    // Get the result set from the prepared statement
    $current_page_result = $connection->query($current_page_query);
    function pagination($total_pages, $num_adjacents_page) {
        echo '<section class="page_area">';
            if ($_SESSION["page_number"] > 1) {
                echo '<a id="prev_page" href="index.php?page=books&page_number=' . ($_SESSION["page_number"] - 1) . '">Previous</a>';
            }
            $min_display = max(1, $_SESSION["page_number"] - $num_adjacents_page);
            $max_display = min($total_pages, $_SESSION["page_number"] + $num_adjacents_page);
            for ($i = $min_display; $i <= $max_display; $i++) {
                if ($i == $_SESSION["page_number"]) {
                    echo '<a id="main_page" href="index.php?page=books&page_number=' . $i . '">' . $i . '</a> ';
                } else {
                    echo '<a id="page" href="index.php?page=books&page_number=' . $i . '">' . $i . '</a> ';
                }
            }
            if ($_SESSION["page_number"] < $total_pages) {
                echo '<a id="next_page" href="index.php?page=books&page_number=' . ($_SESSION["page_number"] + 1) . '">Next</a>';
            }
        echo '</section>';
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
            <input type="text" id="search_bar" placeholder="Search something..." onkeyup="show_result(this.value, <?php echo $_SESSION['page_number'];?>)">
            <?php 
                if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]) {
                    echo '<button id="add_book_btn">Add book</button>';
                }
            ?>
        </div>

        <form class="sort_form" method="post" action="./logical/sort_form.php">
            <select for="sort_by" id="sort_by" name="sort_by">
                <option value="_" <?php echo ($_SESSION['sort_by'] == '_') ? 'selected' : ''; ?>>Sort by</option>
                <option value="title" <?php echo ($_SESSION['sort_by'] == 'title') ? 'selected' : ''; ?>>Title</option>
                <option value="price" <?php echo ($_SESSION['sort_by'] == 'price') ? 'selected' : ''; ?>>Price</option>
            </select>

            <select for="sort_order" id="sort_order" name="sort_order">
                <option value="_" <?php echo ($_SESSION['sort_order'] == '_') ? 'selected' : ''; ?>>Sort order</option>
                <option value="ASC" <?php echo ($_SESSION['sort_order'] == 'ASC') ? 'selected' : ''; ?>>Ascending</option>
                <option value="DESC" <?php echo ($_SESSION['sort_order'] == 'DESC') ? 'selected' : ''; ?>>Descending</option>
            </select>
            <input id="confirm_sort" type="submit" value="Sort" />
        </form>

        
    </section>
                
    <section class="add_book">
        <form id="add_book_form" method="POST" action="./logical/add_book.php" enctype="multipart/form-data">
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
                <input type="text" id="book_name" name="book_name">
            </div>
            <div class="field">
                <label for="book_price">Price:</label>
                <input type="text" id="book_price" name="book_price">
            </div>
            <div class="field">
                <label for="book_genre">Book Genre:</label>
                <input type="text" id="book_genre" name="book_genre">
            </div>
            <div class="field">
                <label for="book_description">Description:</label>
                <textarea id="book_description" class="input" name="book_description"></textarea>
            </div>
            <button type="submit" id="save_changes">Save Changes</button>
        </form>
    </section>

    <section class="book_list">
        <?php 
            if ($current_page_result->num_rows > 0) {
                while($book = $current_page_result->fetch_assoc()) {
                    $image_src = 'image/books/'. $book["Image_URL"];
                    if(!file_exists($image_src)) {
                        $image_src = 'image/books/default.jpg';
                    }
                    echo '<div class="book_card">';
                        echo '<img id = "book_img" src="'. $image_src .'">';
                        echo '<div class="book_info">';
                            echo '<p id="book_title">';
                                echo '<a href="index.php?page=product&Book_ID=' . $book["Book_ID"] . '">' . $book["Title"] . '</a> <br>';
                                echo '<a>Genre: ' . $book["Genre"] . '</a>';
                            echo '</p>';
                            echo '<div class="star_container">';
                                $stars_query = 'SELECT r.Stars FROM Review r JOIN Order_item oi ON r.Review_ID = oi.Review_ID WHERE oi.Book_ID = ' . $book["Book_ID"];
                                $stars_row = $connection->query($stars_query);
                                if ($stars_row->num_rows > 0) {
                                    $star_sum = 0;
                                    while($star_num = $stars_row->fetch_assoc()) {
                                        $star_sum += $star_num["Stars"];
                                    }
                                    $num_of_star = ceil($star_sum / $stars_row->num_rows);
                                    $num_of_star = $num_of_star > 5 ? 5 : $num_of_star;
                                    for ($i = 0; $i <= num_of_star; $i++) {
                                        echo '<img src="./image/books/star.jpg">';
                                    } 
                                }
                            echo '</div>';
                            echo '<div class="btn_book">';
                                echo '<p id="price">USD ' . $book["Price"] . '</p>';
                                echo '<button id="add_to_cart">Add to cart</button>';
                            echo '</div>'; 
                        echo '</div>'; 
                    echo '</div>'; 
                }
            }
            $connection->close();
        ?>
    </section>

    <?php pagination($total_pages, $num_adjacents_page); ?>

    <?php require_once './html_component/benefit.php'; ?>
    <?php require_once './html_component/footer.php'; ?>
    <script src="./js/add_book.js"></script>
    <script src="./js/live_search.js"></script>
</body>


</html>