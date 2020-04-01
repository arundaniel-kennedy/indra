-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2020 at 01:52 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indratrust`
--
CREATE DATABASE IF NOT EXISTS `indratrust` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `indratrust`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `slno` int(255) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `city` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`slno`, `title`, `date`, `content`, `image`, `city`, `created_at`, `location`) VALUES
(12, 'Tree Plantation Awareness', '4th August 2019', 'Team INDRA from Delhi went on to spread awareness among kids on the importance of tree plantation. They distributed food items and motivated children On the importance of cleanliness and hygiene and of trees in our life And they also came up with various ideas to plant trees in home and surroundings by using seeds and roots of fruits and vegetables..And also the harmful effects of plastic bags were made aware..in there a pledge was taken by the team and children for not using plastic bags.', '/img/events/158566671165996476_225118185126761_4230629823754738850_n.jpg', 'Delhi', '2020-03-31 14:58:31', ''),
(13, 'Swachh Uyyakondan canal', '4th August 2019', 'The team INDRA TRICHY cleaning a small portion of the uyyakondan canal this morning.', '/img/events/15856669112.jpg', 'Trichy', '2020-03-31 15:01:51', ''),
(14, 'Swachh Perur Lake', '10th August 2019', 'Team INDRA from Coimbatore Cleaning the Dry Perur lake.\r\n', '/img/events/158566704666823909_1456769961140293_8714562254690228448_n.jpg', 'Coimbatore', '2020-03-31 15:04:06', ''),
(15, 'Making Seed Balls', '11th August 2019', 'Team INDRA from Coimbatore organized an event to make seed balls and craft Independence day message chits which will be distributed to the schools and public.... Almost 2300 Seed Balls were made.', '/img/events/158566731767369247_712838755833618_822821187376416521_n.jpg', 'Coimbatore', '2020-03-31 15:06:35', ''),
(16, 'Kerala Flood Relief Camp', '11th August 2019', 'Team INDRA from Kerala had volunteered to help our brothers and sisters of flood affected areas . Our members registered themselves in the official site of the Kerala state (www.keralarescue.in) and got deployed in various flood affected areas and relief camps. We also managed to collect some fund for buying food , sanitary pads, dresses and with the help of the NCC cadets of St Thomas college,Palai we distributed the materials to various relief camps.', '/img/events/158566749466826183_381434999240719_4488187743027055156_n.jpg', 'Kerala', '2020-03-31 15:11:34', ''),
(17, 'Swachh Campus', '12th August 2019', 'Team INDRA from Kerala from St Thomas college, Palai , Kerala. With 16 volunteers decided to start the change from their college and cleaned their campus. For Changes happen when Hearts come together.', '/img/events/158566763466849744_120951325870598_1325872664865865557_n.jpg', 'Kerala', '2020-03-31 15:13:54', ''),
(18, 'Tree Plantation and Awareness Rally', '12th August 2019', 'INDRA TRUST Madurai Organized a massive tree plantation awarness program. It covered in and around Madurai including different panchayats and government schools. More than 1000 trees and plant sappings were Proudly planted between the month of April and May... On addition to this the tress and plants have been safeguarded with fence and is being monitored twice a week.', '/img/events/158566772468726135_639981093154690_8428756048056414593_n.jpg', 'Madurai', '2020-03-31 15:15:24', ''),
(19, 'Swachh Velachery Lake', '12th August 2019', 'Team INDRA from Chennai Organized the Velachery Lake clean up drive on 14/07/2019. The event started at 6:20AM by distributing the gloves for safety of volunteers... Seeing the Youngsters​ work, Even the Local volunteers joined hands with them and gave them their support.\r\nThey set an example on how small hands put together can bring up a mighty change .', '/img/events/158566788267105885_2282486278537817_3784170098479519334_n.jpg', 'Chennai ', '2020-03-31 15:18:02', ''),
(20, 'Blood Donation Camp', '12th August 2019', 'Team Kerala participated in a blood donation camp hosted by Blood Donors Kerala group (BDK). The programme was conducted in Pala town hall . The volunteers then registered for the stem cell donation and received a Donor ID. In the afternoon the members of INDRA had volunteered to help them with their administrative duties.', '/img/events/158566798667983636_2409067742515377_4256674427799893827_n.jpg', 'Kerala ', '2020-03-31 15:19:46', ''),
(21, 'career guidance in Defence forces', '12th August 2019', 'On the Occasion of Kargil Vijay Divas, Team INDRA from Kerala was alloted 20 mins for a Presentation at the St. Thomas College. The presentation was about INDRA TRUST and also related to the career guidance in Defence forces', '/img/events/158566829867233069_158227962015307_3179714071360065565_n.jpg', 'Kerala', '2020-03-31 15:24:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `slno` int(255) NOT NULL,
  `topimg` text NOT NULL,
  `img` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`slno`, `topimg`, `img`, `created_at`) VALUES
(16, '/img/gallery/158566848965996476_225118185126761_4230629823754738850_n.jpg', '/img/gallery/158566848965996476_225118185126761_4230629823754738850_n.jpg', '2020-03-31 15:28:09'),
(17, '/img/gallery/158566854766826183_381434999240719_4488187743027055156_n.jpg', '/img/gallery/158566854766826183_381434999240719_4488187743027055156_n.jpg,/img/gallery/158566854767310081_116760392748965_6191890174311101886_n.jpg,/img/gallery/158566854767663132_211510696497449_2670908205881149308_n.jpg', '2020-03-31 15:29:07'),
(18, '/img/gallery/158566859766823909_1456769961140293_8714562254690228448_n.jpg', '/img/gallery/158566859766823909_136703974215953_1072193156026037371_n.jpg,/img/gallery/158566859767090634_2955232751215185_1953369875832837873_n.jpg,/img/gallery/158566859767187690_876343186069189_5667471797033601526_n.jpg', '2020-03-31 15:29:57'),
(19, '/img/gallery/158566864469370532_292210201619799_562255468935726024_n.jpg', '/img/gallery/158566864467139553_185856632439995_1066131971182679653_n.jpg,/img/gallery/158566864467369247_712838755833618_822821187376416521_n.jpg,/img/gallery/158566864467561460_970470896632402_8580372413905623591_n.jpg,/img/gallery/158566864468925491_2823303271017683_8475920220443858393_n.jpg', '2020-03-31 15:30:44'),
(21, '/img/gallery/158566869666849744_120951325870598_1325872664865865557_n.jpg', '/img/gallery/158566869666332742_171911283848221_4813691813979316272_n.jpg,/img/gallery/158566869667264614_133561294559315_5862569185490538468_n.jpg,/img/gallery/158566869667482572_907115472982629_6030515021846643238_n.jpg', '2020-03-31 15:31:36'),
(22, '/img/gallery/158566874567448648_2384914635058344_1675917295068802831_n.jpg', '/img/gallery/158566874566824934_348436752709226_2753566915483336647_n.jpg,/img/gallery/158566874567437018_550352255733514_3051781715075720091_n.jpg,/img/gallery/158566874568726135_639981093154690_8428756048056414593_n.jpg', '2020-03-31 15:32:25'),
(23, '/img/gallery/158566876866296725_139549080627196_5926809399059177133_n.jpg', '/img/gallery/158566876866396304_174556880258429_3360988157997642892_n.jpg,/img/gallery/158566876867730855_153045352443416_4091268354518275729_n.jpg', '2020-03-31 15:32:48'),
(24, '/img/gallery/158566882066645269_468377350429522_5986367283590264457_n.jpg', '/img/gallery/158566882067105885_2282486278537817_3784170098479519334_n.jpg,/img/gallery/158566882067594460_2324638250938470_6186945425069013901_n.jpg,/img/gallery/158566882068701429_326141951434315_8765699707471045536_n.jpg,/img/gallery/158566882068836603_2501221836874058_1754996979574567564_n.jpg', '2020-03-31 15:33:40'),
(25, '/img/gallery/158566884066835540_145792903189472_4767384267197191340_n.jpg', '/img/gallery/158566884066344565_250570855917970_6182342186551215259_n.jpg,/img/gallery/158566884067919938_334915567395214_4238351145795801951_n.jpg', '2020-03-31 15:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `slno` int(255) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(1000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `location` text NOT NULL,
  `visi` varchar(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`slno`, `image`, `title`, `date`, `location`, `visi`, `created_at`) VALUES
(7, '/img/news/15856859455_1.png', 'Stay Home Stay Safe', '2020-04-01', 'India', '1', '2020-03-31 20:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ln` varchar(100) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `admin` int(10) NOT NULL DEFAULT '0',
  `mobile` varchar(100) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `bloodgroup` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `wings` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` text,
  `profileimg` text NOT NULL,
  `age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `ln`, `email`, `admin`, `mobile`, `education`, `bloodgroup`, `address`, `wings`, `password`, `token`, `profileimg`, `age`) VALUES
(1, 'Arun Daniel', 'k', 'ad@g.com', 1, '9952056265', 'be', 'b', '46, 3rd main road, Moorthinagar\r\nChettiaragaram', '1001', '$2y$10$1HUDTWPZDQREBatw53o9KuBiJ4RlwM1P4978Wsve41siZKhBWUkpu', 'f917ff57a3089ce72c4059afbca1bb38665d64f9810188ec7300f33dc809f6b201ebbfa3b51ed2a6c44aff3d8ef29e1cc48b', '/img/profile/1.jpg', 21),
(2, 'Akash', 'sa', 'sa@g.com', 0, '986578900', 'B.E', 'jhb', 'jhb', '1100', '$2y$12$iT7EoGT2m9lBWgdlVjUzRuVOzXgLwFZspToOWoCsp724Boa4k1EZO', '1e098f8278f2d24940108b75a08bdb581993766dfa0e56e7f220c310f594429640bce86bfd4c76fa5efc3b9ba25fc7dba8ce', '/img/profile/2.jpg', 23),
(6, 'kumar', 'k', 'k@g.com', 0, '868965678', 'bsc', 'O +ve', 'mk', '1100', '$2y$12$ogBkUCf0mMhM6WKIMwwO6uOVA4lyRayHDfzz8QqVAdJL6Q.MQMPxa', NULL, '/img/profile/1584187657IMG_4509.JPG', 19),
(7, 'Arun', 'd', 'arundanielkennedy@gmail.com', 0, '098789890', 'msc', 'O +ve', 'sad', '1000', '$2y$10$XgBMgqcVXVqIZ2x3RBvy8OhxQLw0PeG2968tDJpaZRXJ80U/HcgOm', '77fadc915493326b5c5f39c6d8d9deabb2a9e614c02bc046df8c5cd2aa7fedbe63d3f25b0be9d9c833cc6418778f4b5edddc', '/img/profile/1584187775DSC_8564 2.JPG', 30),
(8, 'Akash', 'D', 'smartakash851@gmail.com', 0, 'smartakash851@gmail.com', 'BE', 'O +ve', '820, Chennai', '0001', '$2y$10$YHcIRAnCtiy.4kzqt5cZ7eXC/if9M1jRIvs8rDbghYCwwpcYWlK22', '04d4aed9d8e04adf76198378e7bd9dfd023340fc0530258565d50041aa91e6a3c01b659014649b3154c4f114d629a74b7349', '/img/profile/15856819061.jpg', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
