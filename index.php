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
        
        <title><?=$data['title']?></title>
        <link href="assets/img/<?=$data['icon']?>" rel="icon">
        <link href="assets/img/<?=$data['icon']?>" rel="apple-touch-icon">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link
            href="assets/vendor/owl.carousel/assets/owl.carousel.min.css"
            rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">

        
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
                    <a href="#menu_section">Home</a>
                </li>
                <li class="link">
                    <a href="#feature">Feature</a>
                </li>
                <li class="link">
                    <a href="#premium">Premium</a>
                </li>
                <li class="link">
                    <a href="#preview">Preview</a>
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
        <header id="menu_section">
            <div class="section__container header__container">
                <div class="header__image">
                    <img src="assets/img/<?=$data['app_pic']?>" alt="header"/>
                    <img src="assets/img/<?=$data['logo_pic']?>" alt="header"/>
                </div>
                <div class="header__content">
                    <div>
                        <h1><?=$data['heading']?></h1>
                        <p class="header__subtitle">
                            <?=$data['shortdesc']?>
                        </p>
                        <div class="action__btns">
                            <a href="#premium">
                                <button class="btn">Premium</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="feature" id="feature">
            <div class="section__container feature__container">
                <div class="image__feature">
                    <div class="feature__col">
                        <img src="assets/img/<?=$data['preview_pic1']?>" alt="feature"/>
                    </div>
                    <div class="feature__col">
                        <img src="assets/img/<?=$data['preview_pic2']?>" alt="feature"/>
                    </div>
                </div>
                <div class="feature__content">
                    <h2 class="header__title">Feature</h2>
                    <p class="header__subtitle">Chillin is a music app that provides a variety of exciting features to enrich your music experience. With a combination of advanced technology and attention to detail, we provide features that ensure you can enjoy music in a better way. Here are some of the excellent features we offer:</p>
                    <?php
             $query4 = "SELECT * FROM feature_setup";
             $runquery4= mysqli_query($db,$query4);
            while($data4=mysqli_fetch_array($runquery4)){
    ?>

                    <div class="">
                        <h2 class="section__title">
                            <?=$data4['feature']?>
                        </h2>
                        <p class="section__subtitle">
                            <?=$data4['feature_desc']?>
                        </p>
                        <?php
}
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="premium" id="premium">
            <div class="section__container premium__container">
                <h2 class="header__title">Premium</h2>
                <p class="header__subtitle">
                By subscribing to Chillin Premium, you can experience unlimited music and gain access to exclusive features. Here are some of the benefits you will get by becoming a Premium user:
                </p>
                <div class="premium__grid">
                    <?php
        $query2 = "SELECT * FROM premium_option";
             $runquery2= mysqli_query($db,$query2);
            while($data2=mysqli_fetch_array($runquery2)){
    ?>

                    <div class="premium__card">
                        <div class="premium__details">
                            <p><?=$data2['types']?></p>
                            <div class="price">
                                <p><?=$data2['price']?>/month</p></div>
                            <p ><?=$data2['profit']?></p>
                            <button class="book__now">Start</button>
                        </div>
                    </div>
                    <?php
}
                    ?>
                </div>
            </div>
        </section>
        <section class="section__container preview__container" id="preview">
            <div class="section__header">
                <div>
                    <h2 class="header__title">Preview</h2>
                    <p class="header__subtitle">
                    Here's a preview of some of the exciting features offered by the Chillin music app. Enjoy the thrill of listening to your favourite music and explore the various content available within the app. Here are some of the things you can preview:
                    </p>
                </div>
            </div>
            <div class="preview__grid">
                <?php
                    $query5 = "SELECT * FROM preview_setup";
$runquery5= mysqli_query($db,$query5);
while($data5=mysqli_fetch_array($runquery5)){
    ?>

                <div class="preview__card">
                    <img src="assets/img/<?=$data5['view_pic']?>" alt="preview"/>
                    <div class="preview__details">
                        <p class="preview__title"><?=$data5['view_name']?></p>
                    </div>
                </div>
                <?php
}
                    ?>
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
                                    <p><?=$data['emailid']?></p>
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