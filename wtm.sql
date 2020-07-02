-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 04:59 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtm`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `post` longtext NOT NULL,
  `meetup` varchar(200) NOT NULL,
  `location` text NOT NULL,
  `map` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `image` varchar(100) NOT NULL,
  `hashtag` varchar(200) NOT NULL,
  `hashbook` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `post`, `meetup`, `location`, `map`, `date`, `time`, `image`, `hashtag`, `hashbook`) VALUES
(11, 'I/O 17 Event', 'Google Developer Group And Women Techmakers 6th October City \" GDG And WTM 6th October \" Are Excited To Announce Google I/O For The First Time In A Row.', 'https://www.meetup.com/GDGOctober/events/240754713/', 'Akhpar El Youm Academy , 6th October ,Egypt', 'https://www.google.com.eg/maps/place/%D8%A7%D9%83%D8%A7%D8%AF%D9%8A%D9%85%D9%8A%D8%A9+%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1+%D8%A7%D9%84%D9%8A%D9%88%D9%85%E2%80%AD/@29.9399071,30.8906221,15z/data=!4m5!3m4!1s0x0:0x45b09a3975a60404!8m2!3d29.9399071!4d30.8906221?shorturl=1', '2017-05-28', '09:00:00', 'io17.png', 'IO17', 'https://www.facebook.com/search/top/?q=%23io17'),
(19, 'Cloud Study Jam 2018', 'Learn The Fundamentals Of The Google Cloud Platform, How To Run Containers On It And How To Use The Platform For Data Engineering.', 'https://www.meetup.com/GDGOctober/events/247932663/', 'Hashtags Coworking Space, 6th October/Egypt', 'https://goo.gl/maps/js3XSiEPTKN2', '2018-07-02', '14:00:00', '18.png', '#CloudStudyJam', 'https://twitter.com/search?q=cloudstudyjam'),
(21, 'TensorFlow DevSummit 18', 'The TensorFlow DevSummit Is A Day That Targeting The ML Users To Meet And Discuss The Lastes Updates In Machine Learn', 'https://www.meetup.com/GDGOctober/events/248404827/', ' Excellence Company , 6th October/Egypt', 'https://www.google.com.eg/maps/place/%D9%85%D8%B7%D8%B9%D9%85+%D8%AC%D8%A7%D8%AF%E2%80%AD/@29.9739446,30.9485346,17z/data=!3m1!4b1!4m5!3m4!1s0x145856f9e6bd6d97:0x54dc7b8aa513ce05!8m2!3d29.97394!4d30.9463459', '2018-08-25', '14:00:00', 'tf.png', 'TensorFlow', 'https://www.facebook.com/GDGOctober/photos/rpp.540053092707163/1747158211996639/?type=3&theater'),
(18, 'Mobile Web Study Jam 2018', 'Fairly Quick : Approximately 3-4 Hours Of Study Material , Followed By 90 Minute (Multiple Choise) Exam .', 'https://www.meetup.com/GDGOctober/events/247089028/', 'Hashtags Coworking Space, 6th October/Egypt', 'https://goo.gl/maps/js3XSiEPTKN2', '2018-07-02', '14:00:00', 'Mobile Web Study Jam.png', '#MobileStudyJam', 'https://twitter.com/search?q=mobilestudyjam');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `webTitle` varchar(200) NOT NULL,
  `aboutUs` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `webTitle`, `aboutUs`) VALUES
(1, 'WTM 6 October', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                Women Techmakers Is Googles Global Program And Brand For Women In Technology. Kicked Off In 2012 By Then VP Of Google Megan Smith, Women Techmakers Is Now Led By Women In Technology Advocate Natalie Villalobos And A Global Team Of Googlers Who Are Passionate About Empowering Women In Technology Through Increased Visibility, Community, And Resources. \r\nMission: Support And Empower Women In The Industry.                                                                                                                                                                                                                                                                                                                                                                                                                   ');

-- --------------------------------------------------------

--
-- Table structure for table `sponsers`
--

CREATE TABLE `sponsers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsers`
--

INSERT INTO `sponsers` (`id`, `name`, `image`) VALUES
(2, 'Google', 'logo.png'),
(4, 'Vienna', 'Vienna.jpg'),
(5, 'El Rokna', 'El rokna.png'),
(6, 'Hashtags', 'Hashtags_logo.jpg'),
(7, 'IEEE', 'IEEE Zagazig.png'),
(8, 'akhpar al youm', 'Akhpar al youm academy.png'),
(9, 'Villa307', 'Villa - Logo.png'),
(10, 'monginie', 'monginie.jpg'),
(11, 'ITI', 'ITI_Logo.png'),
(12, 'Nile university', 'Nile University.png'),
(13, 'Ø¨ÙŠØ¯Ø¬ Ø­Ø§Ø³Ø¨Ø§Øª ÙˆÙ…Ø¹Ù„ÙˆÙ…Ø§Øª', 'Ø¨ÙŠØ¯Ø¬ Ø­Ø§Ø³Ø¨Ø§Øª ÙˆÙ…Ø¹Ù„ÙˆÙ…Ø§Øª.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`) VALUES
(1, 'aya@wtm.com', '123456', 'Aya Sayed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsers`
--
ALTER TABLE `sponsers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sponsers`
--
ALTER TABLE `sponsers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
