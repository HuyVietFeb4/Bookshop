<?php 
require_once "./database_connect.php";
require_once "./function.php";
if(isset($_GET["book_search"])) {
    $book_search = sanitize_input($_GET["book_search"]);
    if(!isset($_SESSION["sort_order"])) {
        $_SESSION["sort_order"] = '_';
    }
    if(!isset($_SESSION["sort_by"])) {
        $_SESSION["sort_by"] = '_';
    }
    $book_stmt = "";
    $book_search_param = '%' . $book_search . '%';
    if($_SESSION["sort_by"] != "_" && $_SESSION["sort_order"] != "_") { // Enough sort categories selected
        $book_stmt = $connection->prepare("SELECT * FROM Book WHERE Title LIKE ? OR Genre LIKE ? ORDER BY ? ?");
        $book_stmt->bind_param("ssss", $book_search_param, $book_search_param, $_SESSION["sort_by"], $_SESSION["sort_order"]);
    }
    else {
        $book_stmt = $connection->prepare("SELECT * FROM Book WHERE Title LIKE ? OR Genre LIKE ?");
        $book_stmt->bind_param("ss", $book_search_param, $book_search_param);
    }
    $book_stmt->execute();
    $book_result = $book_stmt->get_result();
    if ($book_result->num_rows > 0) {  
        while ($book = $book_result->fetch_assoc()) {
            $image_src = '../image/books/'. $book["Image_URL"];
            if (!file_exists($image_src)) {
                $image_src = 'image/books/default.jpg';
            }
            if(str_contains($image_src, '..')) {
                $image_src = 'image/books/'. $book["Image_URL"];
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
    } else {
        echo 'No results found';
    }

    $book_stmt->close();
    $connection->close();
}
else {
    echo 'No results found';
}
