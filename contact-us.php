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
        <section class="contact">
            <div class="section__container contact__container">
                <h2 class="header__title">Contact Us</h2>
                <p class="header__subtitle">Got a question? We'd love to hear from you. Send us
                    a message and we'll respond as soon as possible.</p>
                <form
                    action="include/message.php"
                    method="post"
                    role="form"
                    class="php-email-form">
                    <div class="form__group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required="required">
                    </div>
                    <div class="form__group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required="required">
                    </div>
                    <div class="form__group">
                        <label for="subject">subject</label>
                        <input type="text" id="subject" name="subject" required="required">
                    </div>
                    <div class="form__group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required="required"></textarea>
                    </div>
                    <?php if (isset($_GET['success']) && $_GET['success'] === 'true') : ?>
                    <div class="header__title">
                        Your message has been sent. Thank you!
                    </div>
                    <?php endif; ?>
                    <button type="submit" class="btn">Send Message</button>
                </form>
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