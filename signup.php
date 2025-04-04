<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signin.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <?php require_once './html_component/header.php'; ?>
    <div class="big_container">
        <div class="container">
            <h2>Sign Up With</h2>
            <div class="social-login">
                <button class="facebook"><img id="fb_icon" src="image/social_media/facebook.svg"/>Facebook</button>
                <button class="google"><img id="gg_icon" src="image/social_media/google.svg"/>Google</button>
            </div>
            <form>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="input-group">
                    <label for="confirm_password">Confirm password</label>
                    <input type="password" id="confirm_password" name="confirm_password">
                </div>
                <button type="submit" class="sign-in">Sign Up</button>
            </form>
            <p class="signup">Already have an account? <a href="index.php?page=signin">Sign in now</a></p>
        </div>
    </div>
    <?php require_once './html_component/footer.php'; ?>
</body>
</html>
