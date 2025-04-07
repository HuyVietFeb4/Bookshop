<?php 
require_once "./database_connect.php";
require_once "./function.php";
if(isset($_GET["genre_search"])) {
    $genre_search = sanitize_input($_GET["genre_search"]);
    if(!isset($_SESSION["sort_order"])) {
        $_SESSION["sort_order"] = '_';
    }
    if(!isset($_SESSION["sort_by"])) {
        $_SESSION["sort_by"] = '_';
    }
    $genre_stmt = "";
    $genre_search_param = '%' . $genre_search . '%';
    if($_SESSION["sort_by"] != "_" && $_SESSION["sort_order"] != "_") { // Enough sort categories selected
        $genre_stmt = $connection->prepare("SELECT DISTINCT Genre FROM Book WHERE Genre LIKE ? ORDER BY ? ?");
        $genre_stmt->bind_param("sss", $genre_search_param, $_SESSION["sort_by"], $_SESSION["sort_order"]);
    }
    else {
        $genre_stmt = $connection->prepare("SELECT DISTINCT Genre FROM Book WHERE Genre LIKE ? ORDER BY RAND();");
        $genre_stmt->bind_param("s", $genre_search_param);
    }
    $genre_stmt->execute();
    $genre_result = $genre_stmt->get_result();
    if ($genre_result->num_rows > 0) {  
        if($genre_result->num_rows > 0) {
            while($genre = $genre_result->fetch_assoc()) {
                echo '<div class="genre_card">';
                    echo '<a href="index.php?page=books&genre=' . urlencode($genre["Genre"]) . '">';
                    echo '<img id = "genre_img" src="image/books/default.jpg">';
                    echo '<p id="genre_name">' . $genre["Genre"] . '</p>';
                echo '</div>';
            }
        }
    } else {
        echo 'No results found';
    }

    $genre_stmt->close();
    $connection->close();
}
else {
    echo 'No results found';
}
