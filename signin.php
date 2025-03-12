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
    <div class="container">
        <h2>Sign In With</h2>
        <div class="social-login">
            <button class="facebook"><img src="image/social_media/facebook.svg"/>Facebook</button>
            <button class="google">Google</button>
        </div>
        <form>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <a href="#" class="forgot">Forgot?</a>
            </div>
            <button type="submit" class="sign-in">Sign In</button>
        </form>
        <p class="signup">Not a member? <a href="#">Sign up now</a></p>
    </div>
</body>
</html>
