SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `home_setup` (
  `id` int(11) NOT NULL,
  `shortdesc` text NOT NULL,
  `heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `home_setup` (`id`, `shortdesc`, `heading`) VALUES
(1, 'Start your musical adventure now by downloading the Chillin app and experience the joy of music at your fingertips.', 'Chillin');


CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_access` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin_users` (`id`, `username`, `user_id`, `user_pass`, `user_access`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin123', 1);


CREATE TABLE `basic_setup` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `basic_setup` (`id`, `title`, `icon`) VALUES
(1, 'Chillin', 'logo.png');


CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cemail` varchar(250) NOT NULL,
  `csubject` text NOT NULL,
  `cmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `contact` (`id`, `cname`, `cemail`, `csubject`, `cmessage`) VALUES
(1, 'Anjas', 'fedo@gmail.com', 'Partnership', 'i want to work with you, please contact me on my personal contact 080000000000'),
(2, 'Jerrian', 'Jerri@gmail.com', 'Complaint', 'I am highly disappointed with the poor connectivity and non-intuitive user interface of the Chillin music application.');


CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `logo_pic` varchar(250) NOT NULL,
  `app_name` varchar(250) NOT NULL,
  `app_pic` varchar(200) NOT NULL,
  `preview_pic1` varchar(200) NOT NULL,
  `preview_pic2` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `information` (`id`, `logo_pic`, `app_name`, `app_pic`, `preview_pic1`, `preview_pic2`, `location`, `mobile`, `emailid`) VALUES
(1, 'logo.png', 'Chillin','f11.png','f4.png','f9.png', 'Bengkulu', '088888888888', 'chillin@gmail.com');


CREATE TABLE `preview_setup` (
  `id` int(11) NOT NULL,
  `view_name` varchar(250) NOT NULL,
  `view_pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `preview_setup` (`id`, `view_name`, `view_pic`) VALUES
(1, 'Login', 'f0.png'),
(2, 'Sign In', 'f1.png'),
(3, 'Sign Up', 'f2.png'),
(4, 'Get Start', 'f3.png'),
(5, 'Interests', 'f4.png'),
(6, 'Home', 'f5.png'),
(7, 'Search', 'f7.png'),
(8, 'Play Music', 'f11.png'),
(9, 'playlists', 'f12.png'),
(10, 'Profile & Setting', 'f13.png'),
(11, 'Upgarde To Premium', 'f14.png'),
(12, 'Settings', 'f15.png');



CREATE TABLE `feature_setup` (
  `id` int(11) NOT NULL,
  `feature` varchar(250) NOT NULL,
  `feature_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `feature_setup` (`id`, `feature`, `feature_desc`) VALUES
(1, 'Music Streaming Playback', 'This feature allows users to play and listen to a wide range of songs and albums from various music genres. Users can browse and select their favorite songs, create personalized playlists, and enjoy music directly through the application.'),
(2, 'Music Recommendations Based on User Preferences', 'This feature utilizes algorithms to analyze users music preferences based on the songs they listen to and provides recommendations for new songs they might like. These recommendations can help users discover new and high-quality music based on their preferences.'),
(3, 'Song Download Functionality', 'This feature enables users to download their favorite songs to their devices, allowing them to enjoy music offline. With this feature, users can have their preferred music accessible even without an internet connection.');


CREATE TABLE `premium_option` (
  `id` int(11) NOT NULL,
  `types` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `profit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `premium_option` (`id`, `types`, `price`, `profit`) VALUES
(1, 'Individual Premium Package', '9.99', 'This package is designed for individual users who want to enjoy all the premium features of the music application. At an affordable price, users will have unlimited access to the entire music catalog, ad-free music playback, offline downloads, higher audio quality, and personalized music recommendations tailored to their preferences.'),
(2, 'Family Premium Package', '14.99', 'This package is ideal for families who want to share the premium benefits of the music application. With this package, multiple family members can have their own individual accounts, each with access to the full range of premium features. This includes ad-free music streaming, offline downloads, enhanced audio quality, personalized recommendations, and the ability to create and share playlists within the family.'),
(3, 'Student Premium Package', '4.99', 'This package is specifically designed for students, offering a discounted price for accessing the premium features of the music application. Students can enjoy uninterrupted music streaming without ads, offline downloads, improved audio quality, and tailored music recommendations. Valid student identification is usually required to qualify for this package, making it an affordable option for students to enjoy their favorite music while studying or relaxing.');


ALTER TABLE `home_setup`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `basic_setup`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `preview_setup`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `feature_setup`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `premium_option`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `home_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `basic_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `preview_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `feature_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `premium_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;