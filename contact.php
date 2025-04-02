<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php require_once './html_component/header.php'; ?>

    <section class="welcome_area">
        <p id="welcome_title">Contact</p>
    </section>

    <section class="information_form">
        <p id="contact_title">Get In Touch With Us</p>
        <p id="contact_content">For More Information About Our Product & Services. Please Feel Free To Drop Us An Email. Our Staff Always Be There To Help You Out. Do Not Hesitate!</p>
        
        <div class="form_container">
            <div class="shop_container">
                <div class="working_info">
                    <div class="working_info_content">
                        <p id="working_title"><img src="image/contact/location.png"> Address</p>
                        <p id="working_detail">60 Locust Dr Waynesville North Carolina United States</p>
                    </div>
                </div>

                <div class="working_info">
                    <div class="working_info_content">
                        <p id="working_title"><img src="image/contact/phone-call.png"> Phone</p>
                        <p id="working_detail">(828) 456-8420</p>
                    </div>
                </div>

                <div class="working_info">
                    <div class="working_info_content">
                        <p id="working_title"><img src="image/contact/time.png"> Working time</p>
                        <p id="working_detail">Monday-Friday: 9:00 - 22:00</p>
                        <p id="working_detail">Saturday-Sunday: 9:00 - 21:00</p>
                    </div>
                </div>
            </div>

            <form action="" class="contact_form">
                <div class="input_info">
                    <label for="name">Your name</label>
                    <input type="text" id="name" placeholder="Your Name">

                    <label for="email">Email address</label>
                    <input type="email" id="email" placeholder="example@gmail.com">

                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="subject">

                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Type here" class="input"></textarea>
                </div>

                <input type="submit" value="Submit" id="btn_submit">
            </form>
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
</body>


</html>