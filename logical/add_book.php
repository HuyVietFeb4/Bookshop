<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once "./database_connect.php";
require_once "./function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form inputs
    $book_name = sanitize_input($_POST["book_name"]);
    $book_price = sanitize_input($_POST["book_price"]);
    $book_genre = sanitize_input($_POST["book_genre"]);
    $book_description = sanitize_input($_POST["book_description"]);
    $book_cover = $_FILES["book_cover"]["name"];

    // Validate input fields
    if (!$book_name || !$book_price || !$book_genre || !$book_description || !$book_cover) {
        echo "All fields are required.";
        exit;
    }

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

    // Define the upload path
    $filename = $_FILES["book_cover"]["name"];
    $upload_path = "../image/books/" . $filename;

    // Upload the file
    if (!move_uploaded_file($_FILES["book_cover"]["tmp_name"], $upload_path)) {
        echo "Error uploading file.";
        exit;
    }

    // Insert book details into the database
    $insert_query = "INSERT INTO Book (Title, Price, Genre, Descriptions, Image_URL) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($insert_query);
    $stmt->bind_param("sdsss", $book_name, $book_price, $book_genre, $book_description, $filename);

    if ($stmt->execute()) {
        echo "Book added successfully!";
    } else {
        echo "Error adding book: " . $connection->error;
    }

    // Close the database connection
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    $stmt->close();
    $connection->close();
}
