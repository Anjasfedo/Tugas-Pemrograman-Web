<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup, information, home_setup";
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
        <section class="faq">
            <div class="section__container">
                <h2 class="header__title">FAQ</h2>
                <div class="faq__group">
                    <h3 class="faq__title">What is the Chillin app?</h3>
                    <p class="faq__subtitle">Chillin is a music app that provides access to millions of songs from various music genres. You can listen to your favourite music, discover new songs, and create playlists according to your preferences.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">How can I get the Chillin app?</h3>
                    <p class="faq__subtitle">You can download the Chillin app from authorised app stores such as the App Store (for iOS users) or Google Play Store (for Android users). Search for "Chillin" in the app store, download, and install the app on your device.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">Is Chillin free?</h3>
                    <p class="faq__subtitle">Chillin provides a free version with some limited features. However, we also offer a premium subscription with additional features such as ad-free access, offline mode, and higher audio quality. You can choose the option that suits your needs and preferences.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">Can I listen to music offline?</h3>
                    <p class="faq__subtitle">Yes, with a premium subscription, you can download your favourite songs and listen to them offline without an internet connection. Make sure to download the songs when you are connected to the internet to be able to access them later.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">How to create a playlist on Chillin?</h3>
                    <p class="faq__subtitle">To create a playlist on Chillin, you can search for the song or artist you want to add to the playlist. After finding the desired song, simply tap or click the plus sign (+) next to the song. Select an existing playlist or create a new playlist to add the song.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">Does Chillin support integration with other devices?</h3>
                    <p class="faq__subtitle">Yes, Chillin supports integration with other devices such as smart speakers and other audio devices compatible with music streaming technology. You can connect with these devices through the "Connect" or "Pair" option in the Chillin app.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">How can I share songs with my friends?</h3>
                    <p class="faq__subtitle">On Chillin, you can share songs with your friends through various social media platforms such as Facebook, Twitter, or WhatsApp. Select the song you want to share, then select the "Share" option and choose the desired platform.</p>
                </div>
                <div class="faq__group">
                    <h3 class="faq__title">How can I contact Chillin's customer support team?</h3>
                    <p class="faq__subtitle">If you have any questions or experience any issues with the Chillin app, you can contact our customer support team through the "Contact Us" options available in the app. We will be happy to assist you with any questions or concerns.</p>
                </div>
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