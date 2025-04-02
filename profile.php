<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>User profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>

    <?php require_once './html_component/header.php'; ?>

    <section class="user_profile">
        <div class="profile_header">
            <img id="profile_pic" src="image/default_profile.png" alt="Profile Picture">
            <div class="profile_info">
                <p id="profile_name">Your Name</p>
                <p id="profile_email">yourname@gmail.com</p>
            </div>
            <button id="edit_button">Edit Profile</button>
        </div>
    </section>

    <section class="modal">
        <form id="edit_profile_form">
            <div class="form_header">
                <h2>Edit Profile</h2>
                <image id="pop_out_btn" src="./image/x-mark.png"></image>
            </div>
            <div class="field">
                <label for="profile_picture">Change Profile Picture:</label>
                <input type="file" id="profile_picture" name="profile_picture" accept=".png, .jpg, .jpeg">
            </div>
            <div class="field">
                <label for="name">Name:</label>
                <input type="text" id="name" value="Your Name">
            </div>
            <div class="field">
                <label for="email">Email Account:</label>
                <input type="email" id="email" value="yourname@gmail.com">
            </div>
            <div class="field">
                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile" placeholder="Add number">
            </div>
            <div class="field">
                <label for="location">Location:</label>
                <input type="text" id="location" value="USA">
            </div>
            <button type="button" id="save_changes">Save Changes</button>
        </form>
    </section>
    
    <section class="user_past_activity">

    </section>
    
    <?php require_once './html_component/footer.php'; ?>
    <script src="./js/edit_profile.js"></script>
</body>


</html>