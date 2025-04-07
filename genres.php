<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once "./logical/database_connect.php";
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
            <input type="text" id="search_bar" placeholder="Search something..." onkeyup="show_result_genre(this.value, <?php echo $_SESSION['page_number'];?>)">
        </div>

        <form class="sort_form" method="post" action="./logical/sort_form.php">
            <select for="sort_by" id="sort_by" name="sort_by">
                <option value="_">Sort by</option>
                <option value="genre" <?php echo ($_SESSION['sort_by'] == 'genre') ? 'selected' : ''; ?>>Genre</option>
            </select>
        
            <select for="sort_order" id="sort_order" name="sort_order">
                <option value="_">Sort order</option>
                <option value="ASC" <?php echo ($_SESSION['sort_order'] == 'ASC') ? 'selected' : ''; ?>>Ascending</option>
                <option value="DESC" <?php echo ($_SESSION['sort_order'] == 'DESC') ? 'selected' : ''; ?>>Descending</option>
            </select>
            <input id ="confirm_sort" type="submit" value="Sort"/>
        </form>
        
    </section>

    <section class="genres">
        
        <div class="genre_list">
            <?php 
                $genre_query = 'SELECT DISTINCT Genre FROM Book ORDER BY RAND();';
                if($_SESSION["sort_by"] != "_" && $_SESSION["sort_order"] != "_") { // Enough sort categories selected
                    $genre_query = 'SELECT DISTINCT Genre FROM Book ORDER BY ' . $_SESSION["sort_by"] . ' ' . $_SESSION["sort_order"];
                }
                $genres = $connection->query($genre_query);
                if($genres->num_rows > 0) {
                    while($genre = $genres->fetch_assoc()) {
                        echo '<div class="genre_card">';
                            echo '<a href="index.php?page=books&genre=' . urlencode($genre["Genre"]) . '">';
                            echo '<img id = "genre_img" src="image/books/default.jpg">';
                            echo '<p id="genre_name">' . $genre["Genre"] . '</p>';
                        echo '</div>';
                    }
                }
            ?>
        </div>        
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
    <script src="./js/live_search_genre.js"></script>
</body>


</html>