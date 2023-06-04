<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,information,home_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
            rel="stylesheet"/>
        <link rel="stylesheet" href="assets/css/styles.css"/>
        <script src="script.js"></script>
        <title>Chillin</title>
    </head>
    <body>
    <div id="progress">
      <span id="progress-value">&#x1F815;</span>
    </div>
    <div id="preloader"></div>
        <nav>
            <div class="nav__logo">
                <img src="assets/img/<?=$data['logo_pic']?>" alt="Logo Kelompok 4">
                <?=$data['app_name']?>
            </div>
            <ul class="nav__links">
                <li class="link">
                    <a href="index.php#menu_section">Home</a>
                </li>
                <li class="link">
                    <a href="index.php#feature">Feature</a>
                </li>
                <li class="link">
                    <a href="index.php#premium">Premium</a>
                </li>
                <li class="link">
                    <a href="index.php#preview">Preview</a>
                </li>
                <li class="link">
                    <a href="about-us.php">About</a>
                    <ul class="js-sub-menu sub-menu">
                        <li>
                            <a href="about-us.php">About Us</a>
                        </li>
                        <li>
                            <a href="faq.php">FAQ</a>
                        </li>
                        <li>
                            <a href="terms.php">Terms Of Service</a>
                        </li>
                        <li>
                            <a href="admin/index.php" target="_blank">Admin Login</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <a href="contact-us.php">
                <button class="btn">Contact Us</button>
            </a>
        </nav>
        <section class="terms">
            <div class="section__container">
                <h2 class="header__title">Welcome to the "Terms and Conditions" page of the Chillin music app!</h2>
                <p class="header__subtitle">Please note that by using the Chillin app, you agree to be subject to the terms and conditions described below. Please read them carefully before using this app.</p>
                    <div class="faq__group">
                    <h3 class="faq__title">Use of the App:</h3>
                    <p class="faq__subtitle">a. The Chillin app is provided for personal and non-commercial use. You may not use this app for commercial purposes without the express written permission of Chillin.</p>
                    <p class="faq__subtitle">b. You agree not to violate any laws or intellectual property rights in using this app.</p>
                    <p class="faq__subtitle">c. You are solely responsible for all activities associated with your account and maintaining the confidentiality of your login information.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">Intellectual Property Rights:</h3>
                    <p class="faq__subtitle">a. If you choose to use Chillin's premium subscriptions, you agree to pay the applicable subscription fees. More information about fees and payment can be found within the app.</p>
                    <p class="faq__subtitle">b. Subscription fees may be subject to change from time to time. Price changes will be informed to you adequately before they take effect.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">User Responsibility:</h3>
                    <p class="faq__subtitle">a. You are responsible for the content that you upload, share or display through the Chillin app. You warrant that the content you provide does not infringe any third party's intellectual property rights or violate any applicable laws.</p>
                    <p class="faq__subtitle">b. You agree not to use the Chillin app for purposes that are unlawful, defamatory, or invasive of the privacy rights of others.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">Chillin's Responsible Persons:</h3>
                    <p class="faq__subtitle">a. While we endeavour to provide a flawless music experience, Chillin cannot guarantee that the app will run uninterrupted or error-free.</p>
                    <p class="faq__subtitle">b. Chillin is not liable for any loss or damage arising from the use of this app, including loss of data or financial loss.</p>
                </div>
                <p class="header__subtitle">Changes in Terms and Conditions:
Chillin reserves the right to change these terms and conditions from time to time. Such changes will be informed to you through updates in the app or relevant communications. In this case, your continued use of the Chillin app following such changes will constitute your agreement to the updated terms and conditions.
</p>
                <p class="header__subtitle">Please note that these terms and conditions are binding when using the Chillin app. If you do not agree with these terms and conditions, please discontinue using this app. If you have any further questions, please feel free to contact our customer support team.</p>
                <p class="header__subtitle">Thank you for using the Chillin music app!</p>
            </div>
        </section>
        <footer class="footer">
            <div class="section__container footer__container">
                <div class="footer__col">
                    <h3><?=$data['heading']?></h3>
                    <p><?=$data['shortdesc']?></p>
                </div>
                <div class="footer__col">
                    <h4>Support</h4>
                    <p>
                        <a href="contact-us.php">Contact Us</a>
                    </p>
                    <p>
                        <a href="about-us.php">About Us</a>
                    </p>
                    <p>
                        <a href="faq.php">FAQ</a>
                    </p>
                    <p>
                        <a href="terms.php">Terms Of Service</a>
                    </p>
                </div>
                <div class="footer__col">
                    <h4>Address</h4>
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p><?=$data['location']?></p>
                            </div>
                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>
                                    <a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a>
                                </p>
                            </div>
                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p><?=$data['mobile']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bar">
                Copyright © 2023 . All rights reserved.
            </div>
        </footer>
    </body>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</html>