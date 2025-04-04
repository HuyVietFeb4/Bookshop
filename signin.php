<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/signin.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <?php require_once './html_component/header.php'; ?>
    <div class="big_container">
        <div class="container">
            <h2>Sign In With</h2>
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
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    <a href="#" class="forgot">Forgot?</a>
                </div>
                <button type="submit" class="sign-in">Sign In</button>
            </form>
            <p class="signup">Not a member? <a href="index.php?page=signup">Sign up now</a></p>
        </div>
    </div>

    <?php require_once './html_component/footer.php'; ?>
</body>
</html>
