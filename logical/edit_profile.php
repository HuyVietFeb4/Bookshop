<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once "./database_connect.php";
require_once "./function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize_input($_POST["email"]);
    $name = sanitize_input($_POST["name"]);
    $password = sanitize_input($_POST["password"]);
    $confirm_password = sanitize_input($_POST["confirm_password"]);
    $profile_picture = $_FILES["profile_picture"]['name'];

    $ext = ''; 
    switch($_FILES["profile_picture"]['type'])
    {
        case 'image/jpeg': $ext = 'jpg'; break;
        case 'image/jpg': $ext = 'jpg'; break;
        case 'image/gif': $ext = 'gif'; break;
        case 'image/png': $ext = 'png'; break;
        default: $ext = ''; break;
    }

    if($ext && $email && $name && $password && $confirm_password && $confirm_password == $password) {
        $filename = $_SESSION['is_admin']
            ? "pfp_" . $_SESSION['Admins_ID'] . "_admin" . ".$ext"
            : "pfp_" . $_SESSION['Users_ID'] . "_user" . ".$ext";
        $upload_path = "../image/" . $filename;
        move_uploaded_file($_FILES['profile_picture']['tmp_name'], $upload_path);
        $salt1 = "%$32*^";
        $salt2 = "fwfbgh#$()";
        $hashed_password = hash('ripemd128', "$salt1$password$salt2");
        if($_SESSION['is_admin']) {
            $check_admin_query = "SELECT * FROM Admins WHERE Email = ?";
            $check_admin_statement = $connection->prepare($check_admin_query);
            $check_admin_statement->bind_param('s', $email);
            $check_admin_statement->execute();
            $check_admin_result = $check_admin_statement->get_result();
            if($check_admin_result->num_rows == 1) {
                $update_admin_query = "UPDATE Admins SET Email = ?, Admin_name = ?, Passwords = ?, PFP_URL = ? WHERE Admins_ID = ?";
                $update_admin_statement = $connection->prepare($update_admin_query);
                $update_admin_statement->bind_param(
                    "ssssi",
                    $email,
                    $name,
                    $hashed_password,
                    $filename,
                    $_SESSION['Admins_ID']
                );
                if ($update_admin_statement->execute()) {
                    $_SESSION["Email"] = $email;
                    $_SESSION["Admin_name"] = $name;
                    $_SESSION["PFP_URL"] = $filename;
                    echo "Profile updated successfully for admin.";
                } else {
                    echo "Error updating admin profile: " . $connection->error;
                }
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            else {
                echo "Invalid input, try again!";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        } else {
            $check_user_query = "SELECT * FROM Users WHERE Email = ?";
            $check_user_statement = $connection->prepare($check_user_query);
            $check_user_statement->bind_param('s', $email);
            $check_user_statement->execute();
            $check_user_result = $check_user_statement->get_result();
            if($check_user_result->num_rows == 1) { 
                $update_user_query = "UPDATE Users SET Email = ?, User_name = ?, Passwords = ?, PFP_URL = ? WHERE Users_ID = ?";
                $update_user_stmt = $connection->prepare($update_user_query);
                $update_user_stmt->bind_param(
                    "ssssi",
                    $email,
                    $name,
                    $hashed_password,
                    $filename,
                    $_SESSION['Users_ID']
                );

                if ($update_user_stmt->execute()) {
                    $_SESSION["Email"] = $email;
                    $_SESSION["User_name"] = $name;
                    $_SESSION["PFP_URL"] = $filename;
                    echo "Profile updated successfully for user.";
                } else {
                    echo "Error updating user profile: " . $connection->error;
                }
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            else {
                echo "Invalid input, try again!";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }
    }
    else {
        echo "Invalid input, try again!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}