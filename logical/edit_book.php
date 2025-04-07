<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once "./database_connect.php";
require_once "./function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["Action_book_id"])) {
    // Retrieve and sanitize inputs
    $book_id = sanitize_input($_SESSION["Action_book_id"]);
    $book_name = sanitize_input($_POST["book_name"]);
    $book_price = sanitize_input($_POST["book_price"]);
    $book_genre = sanitize_input($_POST["book_genre"]);
    $book_description = sanitize_input($_POST["book_description"]);
    $book_cover = isset($_FILES["book_cover"]["name"]) ? $_FILES["book_cover"]["name"] : "";

    // Validate required inputs
    if (!$book_id || !$book_name || !$book_price || !$book_genre || !$book_description) {
        echo "All fields are required!";
        exit;
    }

    // Process file upload if a new book cover is provided
    $cover_update_query = "";
    $cover_path = "";
    if (!empty($book_cover)) {
        // Validate file type and set file extension
        $ext = "";
        switch ($_FILES["book_cover"]["type"]) {
            case 'image/jpeg': $ext = '.jpg'; break;
            case 'image/jpg': $ext = '.jpg'; break;
            case 'image/png': $ext = '.png'; break;
            default: $ext = ""; break;
        }

        if (!$ext) {
            echo "Invalid file type. Only .jpg and .png are allowed.";
            exit;
        }

        $filename = $_FILES["book_cover"]["name"] . $ext;
        $cover_path = "../image/books/" . $filename;


        if (!move_uploaded_file($_FILES["book_cover"]["tmp_name"], $cover_path)) {
            echo "Error uploading file.";
            exit;
        }

        $cover_update_query = ", Image_URL = ?";
    }

    $update_query = "UPDATE Book SET Title = ?, Price = ?, Genre = ?, Descriptions = ? $cover_update_query WHERE Book_ID = ?";
    $stmt = $connection->prepare($update_query);

    if (!empty($cover_update_query)) {
        $stmt->bind_param("sdsssi", $book_name, $book_price, $book_genre, $book_description, $filename, $book_id);
    } else {
        $stmt->bind_param("sdssi", $book_name, $book_price, $book_genre, $book_description, $book_id);
    }

    if ($stmt->execute()) {
        echo "Book updated successfully!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "Error updating book: " . $connection->error;
    }

    // Close the statement and connection
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    $stmt->close();
    $connection->close();
}
