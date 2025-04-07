<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once "./database_connect.php";
require_once "./function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize the Book_ID from POST
    $book_id = isset($_SESSION["Action_book_id"]) ? (int)$_SESSION["Action_book_id"] : 0;

    if ($book_id <= 0) {
        echo "Invalid Book ID.";
        exit;
    }

    // Fetch the book details to get the cover image path
    $fetch_query = "SELECT Image_URL FROM Book WHERE Book_ID = ?";
    $fetch_stmt = $connection->prepare($fetch_query);
    $fetch_stmt->bind_param("i", $book_id);
    $fetch_stmt->execute();
    $result = $fetch_stmt->get_result();

    if ($result->num_rows == 1) {
        $book = $result->fetch_assoc();
        $cover_path = "../image/books" . $book["Image_URL"];

        // Delete the book record from the database
        $delete_query = "DELETE FROM Book WHERE Book_ID = ?";
        $delete_stmt = $connection->prepare($delete_query);
        $delete_stmt->bind_param("i", $book_id);

        if ($delete_stmt->execute()) {
            // Attempt to delete the book cover image from the server
            if (file_exists($cover_path) && !is_dir($cover_path)) {
                unlink($cover_path); // Deletes the file
            }

            echo "Book successfully deleted.";
            // Redirect back to the book list or another page (optional)
            header("Location: ../index.php?page=books");
            exit;
        } else {
            echo "Error deleting book: " . $connection->error;
        }
    } else {
        echo "Book not found.";
    }

    // Close statements and connection
    header("Location: ../index.php?page=books");
    $fetch_stmt->close();
    $delete_stmt->close();
    $connection->close();
} else {
    echo "Invalid request method.";
    exit;
}
?>
