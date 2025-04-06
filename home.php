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
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php require_once './html_component/header.php'; ?>
    <?php require_once "./logical/database_connect.php";?>
    <section class="welcome_area">
        <div class="welcome_content">
            <p id="welcome_title">Finding a book to read? You are in the right place!</p>
            <p>Fiction, comics, documentaries, horror, fantasy — you name it, we've got it all right here!</p>
            <button id="btn_buy_now">BUY NOW</button>
        </div>
    </section>
    <?php require_once './html_component/benefit.php'; ?>
    <section class="genres">
        <div class="intro">
            <p id="title">Browse The Genres</p>
            <p id="content">Discover new genres or finding new kind of books to read!</p>
        </div>
        
        <div class="genre_list">
            
            <?php 
            $genre_query = 'SELECT DISTINCT Genre FROM Book ORDER BY RAND() LIMIT 4;';
            $genres = $connection->query($genre_query);
            if($genres->num_rows > 0) {
                while($genre = $genres->fetch_assoc()) {
                    echo '<div class="genre_card">';
                        echo '<img id = "genre_img" src="image/books/default.jpg">';
                        echo '<p id="genre_name">' . $genre["Genre"] . '</p>';
                    echo '</div>';
                }
            }
            ?>
        </div>
        <div class="btn_explore_more">
            <button id="explore_more">Explore more</button>
        </div>
        
    </section>

    <section class="newly_arrive">
        <div class="intro">
            <p id="title">Newly Arrive Books</p>            
            <p id="content">Discover our newly arrive books from all around the world!</p>
        </div>
        
        <div class="book_list">
        <?php 
            $n_new_books_query = "SELECT * FROM Book ORDER BY Book_ID DESC LIMIT 5;";
            $n_new_books = $connection->query($n_new_books_query);
            if ($n_new_books->num_rows > 0) {
                while($book = $n_new_books->fetch_assoc()) {
                    $image_src = 'image/books/'. $book["Image_URL"];
                    if(!file_exists($image_src)) {
                        $image_src = 'image/books/default.jpg';
                    }
                    echo '<div class="book_card">';
                        echo '<img id = "book_img" src="'. $image_src .'">';
                        echo '<div class="book_info">';
                            echo '<p id="book_title">' . $book["Title"] . '</p>';
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
            else {
                echo 'No more pages TT';
            }
            $connection->close();
        ?>
        </div>

        <div class="btn_explore_more">
            <button id="explore_more">Explore more</button>
        </div>
    </section>
    
    <?php require_once './html_component/footer.php'; ?>
</body>


</html>