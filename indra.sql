-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2020 at 10:08 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indra`
--
CREATE DATABASE IF NOT EXISTS `indra` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `indra`;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(3) DEFAULT NULL,
  `city_name` varchar(19) DEFAULT NULL,
  `state_code` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `state_code`) VALUES
(1, 'Delhi', 'DL'),
(2, 'Kolkata', 'WB'),
(3, 'Mumbai', 'MH'),
(4, 'Hyderabad', 'TG'),
(5, 'Bengaluru', 'KA'),
(6, 'Chennai', 'TN'),
(7, 'Ahmedabad', 'GJ'),
(8, 'Surat', 'GJ'),
(9, 'Pune', 'MH'),
(10, 'Jaipur', 'RJ'),
(11, 'Kanpur', 'UP'),
(12, 'Lucknow', 'UP'),
(13, 'Nagpur', 'MH'),
(14, 'Ghaziabad', 'UP'),
(15, 'Indore', 'MP'),
(16, 'Coimbatore', 'TN'),
(17, 'Patna', 'BR'),
(18, 'Visakhapatnam', 'AP'),
(19, 'Bhopal', 'MP'),
(20, 'Nashik', 'MH'),
(21, 'Pimpri-Chinchwad', 'MH'),
(22, 'Agra', 'UP'),
(23, 'Vadodara', 'GJ'),
(24, 'Ludhiana', 'PB'),
(25, 'Madurai', 'TN'),
(26, 'Varanasi', 'UP'),
(27, 'Meerut', 'UP'),
(28, 'Faridabad', 'HR'),
(29, 'Jamshedpur', 'JH'),
(30, 'Rajkot', 'GJ'),
(31, 'Jabalpur', 'MP'),
(32, 'Asansol', 'WB'),
(33, 'Allahabad', 'UP'),
(34, 'Dhanbad', 'JH'),
(35, 'Srinagar', 'JK'),
(36, 'Aurangabad', 'MH'),
(37, 'Jodhpur', 'RJ'),
(38, 'Amritsar', 'PB'),
(39, 'Ranchi', 'JH'),
(40, 'Gwalior', 'MP'),
(41, 'Chandigarh', 'CH'),
(42, 'Vijayawada', 'AP'),
(43, 'Tiruchirappalli', 'TN'),
(44, 'Raipur', 'CT'),
(45, 'Kota', 'RJ'),
(46, 'Bareilly', 'UP'),
(47, 'Guwahati', 'AS'),
(48, 'Tirupur', 'TN'),
(49, 'Thiruvananthapuram', 'KL'),
(50, 'Solapur', 'MH'),
(51, 'Hubli', 'KA'),
(52, 'Salem', 'TN'),
(53, 'Aligarh', 'UP'),
(54, 'Gurgaon', 'HR'),
(55, 'Durg', 'CT'),
(56, 'Moradabad', 'UP'),
(57, 'Mysore', 'KA'),
(58, 'Bhubaneswar', 'OR'),
(59, 'Jalandhar', 'PB'),
(60, 'Warangal', 'TG'),
(61, 'Guntur', 'AP'),
(62, 'Dehradun', 'UT'),
(63, 'Bhiwandi', 'MH'),
(64, 'Saharanpur', 'UP'),
(65, 'Siliguri', 'WB'),
(66, 'Gorakhpur', 'UP'),
(67, 'Cuttack', 'OR'),
(68, 'Pondicherry', 'PY'),
(69, 'Amravati', 'MH'),
(70, 'Bikaner', 'RJ'),
(71, 'Faizabad', 'UP'),
(72, 'Kochi', 'KL'),
(73, 'Firozabad', 'UP'),
(74, 'Bhavnagar', 'GJ'),
(75, 'Durgapur', 'WB'),
(76, 'Bokaro Steel City', 'JH'),
(77, 'Naya Raipur', 'CT'),
(78, 'Rourkela', 'OR'),
(79, 'Ajmer', 'RJ'),
(80, 'Nanded', 'MH'),
(81, 'Kolhapur', 'MH'),
(82, 'Jhansi', 'UP'),
(83, 'Gulbarga', 'KA'),
(84, 'Agartala', 'TR'),
(85, 'Erode', 'TN'),
(86, 'Ujjain', 'MP'),
(87, 'Sangli-Miraj-Kupwad', 'MH'),
(88, 'Jammu', 'JK'),
(89, 'Nellore', 'AP'),
(90, 'Mangalore', 'KA'),
(91, 'Tirunelveli', 'TN'),
(92, 'Muzaffarnagar', 'UP'),
(93, 'Belgaum', 'KA'),
(94, 'Vellore', 'TN'),
(95, 'Jamnagar', 'GJ'),
(96, 'Udaipur', 'RJ'),
(97, 'Gaya', 'BR'),
(98, 'Jalgaon', 'MH'),
(99, 'Mathura', 'UP'),
(100, 'Patiala', 'PB'),
(101, 'Panipat', 'HR'),
(102, 'Davangere', 'KA'),
(103, 'Calicut', 'KL'),
(104, 'Akola', 'MH'),
(105, 'Kurnool', 'AP'),
(106, 'Rajamahendravaram', 'AP'),
(107, 'Latur', 'MH'),
(108, 'Tuticorin', 'TN'),
(109, 'Bhagalpur', 'BR'),
(110, 'Malegaon', 'MH'),
(111, 'Bellary', 'KA'),
(112, 'Ambala', 'HR'),
(113, 'Muzaffarpur', 'BR'),
(114, 'Yamunanagar', 'HR'),
(115, 'Dhule', 'MH'),
(116, 'Dimapur', 'NL'),
(117, 'Tirupati', 'AP'),
(118, 'Rohtak', 'HR'),
(119, 'Sagar', 'MP'),
(120, 'Budaun', 'UP'),
(121, 'Korba', 'CT'),
(122, 'Bhilwara', 'RJ'),
(123, 'Rampur', 'UP'),
(124, 'Shahjahanpur', 'UP'),
(125, 'Berhampur', 'OR'),
(126, 'Ahmednagar', 'MH'),
(127, 'Kollam', 'KL'),
(128, 'Bardhaman', 'WB'),
(129, 'Kadapa', 'AP'),
(130, 'Alwar', 'RJ'),
(131, 'Bilaspur', 'CT'),
(132, 'Nandurbar', 'MH'),
(133, 'Bijapur', 'KA'),
(134, 'Ichalkaranji', 'MH'),
(135, 'Thrissur', 'KL'),
(136, 'Chandrapur', 'MH'),
(137, 'Malda', 'WB'),
(138, 'Shimoga', 'KA'),
(139, 'Junagadh', 'GJ'),
(140, 'Farrukhabad', 'UP'),
(141, 'Kakinada', 'AP'),
(142, 'Nizamabad', 'TG'),
(143, 'Purnia', 'BR'),
(144, 'Haridwar', 'UT'),
(145, 'Hisar', 'HR'),
(146, 'Darbhanga', 'BR'),
(147, 'Tumkur', 'KA'),
(148, 'Baharampur', 'WB'),
(149, 'Habra', 'WB'),
(150, 'Jalpaiguri', 'WB'),
(151, 'Karnal', 'HR'),
(152, 'Ozhukarai', 'PY'),
(153, 'Bihar Sharif', 'BR'),
(154, 'Kharagpur', 'WB'),
(155, 'Aizawl', 'MZ'),
(156, 'Sonipat', 'HR'),
(157, 'Gudiyatham', 'TN'),
(158, 'Dewas', 'MP'),
(159, 'Shantipur', 'WB'),
(160, 'Bathinda', 'PB'),
(161, 'Jalna', 'MH'),
(162, 'Satna', 'MP'),
(163, 'Mau', 'UP'),
(164, 'Roorkee', 'UT'),
(165, 'Ratlam', 'MP'),
(166, 'Parbhani', 'MH'),
(167, 'Sambalpur', 'OR'),
(168, 'Anantapur', 'AP'),
(169, 'Imphal', 'MN'),
(170, 'Rajnandgaon', 'CT'),
(171, 'Hapur', 'UP'),
(172, 'Karimnagar', 'TG'),
(173, 'Arrah', 'BR'),
(174, 'Noida', 'UP'),
(175, 'Etawah', 'UP'),
(176, 'Haldwani', 'UT'),
(177, 'Bharatpur', 'RJ'),
(178, 'Begusarai', 'BR'),
(179, 'Sri Ganganagar', 'RJ'),
(180, 'Dankuni', 'WB'),
(181, 'Gandhidham', 'GJ'),
(182, 'Mirzapur', 'UP'),
(183, 'Sikar', 'RJ'),
(184, 'Katihar', 'BR'),
(185, 'Dhulian', 'WB'),
(186, 'Ranaghat', 'WB'),
(187, 'Rewa', 'MP'),
(188, 'Bulandshahr', 'UP'),
(189, 'Kannur', 'KL'),
(190, 'Raichur', 'KA'),
(191, 'Pali', 'RJ'),
(192, 'Ramagundam', 'TG'),
(193, 'Silchar', 'AS'),
(194, 'Vizianagaram', 'AP'),
(195, 'Nagercoil', 'TN'),
(196, 'Thanjavur', 'TN'),
(197, 'Katni', 'MP'),
(198, 'Sambhal', 'UP'),
(199, 'Singrauli', 'MP'),
(200, 'Nadiad', 'GJ'),
(201, 'Eluru', 'AP'),
(202, 'Bidar', 'KA'),
(203, 'Munger', 'BR'),
(204, 'Chhapra', 'BR'),
(205, 'Burhanpur', 'MP'),
(206, 'Panchkula', 'HR'),
(207, 'Dindigul', 'TN'),
(208, 'Gandhinagar', 'GJ'),
(209, 'Hospet', 'KA'),
(210, 'Bhusawal', 'MH'),
(211, 'Deoghar', 'JH'),
(212, 'Ongole', 'AP'),
(213, 'Puri', 'OR'),
(214, 'Haldia', 'WB'),
(215, 'Nandyal', 'AP'),
(216, 'Khandwa', 'MP'),
(217, 'Morena', 'MP'),
(218, 'Raiganj', 'WB'),
(219, 'Anand', 'GJ'),
(220, 'Bhiwani', 'HR'),
(221, 'Bhind', 'MP'),
(222, 'Amroha', 'UP'),
(223, 'Hardoi', 'UP'),
(224, 'Vaniyambadi', 'TN'),
(225, 'Morbi', 'GJ'),
(226, 'Fatehpur', 'UP'),
(227, 'Kasaragod', 'KL'),
(228, 'Raebareli', 'UP'),
(229, 'Daman', 'DD'),
(230, 'Orai', 'UP'),
(231, 'Chhindwara', 'MP'),
(232, 'Barmer', 'RJ'),
(233, 'Sitapur', 'UP'),
(234, 'Bahraich', 'UP'),
(235, 'Phusro', 'JH'),
(236, 'Khammam', 'TG'),
(237, 'Khambhat', 'GJ'),
(238, 'Sirsa', 'HR'),
(239, 'Modinagar', 'UP'),
(240, 'Krishnanagar', 'WB'),
(241, 'Guna', 'MP'),
(242, 'Shivpuri', 'MP'),
(243, 'Unnao', 'UP'),
(244, 'Surendranagar', 'GJ'),
(245, 'Balasore', 'OR'),
(246, 'Nabadwip', 'WB'),
(247, 'Bongaigaon', 'AS'),
(248, 'Alappuzha', 'KL'),
(249, 'Alappuzha', 'KL'),
(250, 'Cuddalore', 'TN'),
(251, 'Hassan', 'KA'),
(252, 'Gadag', 'KA'),
(253, 'Shimla', 'HP'),
(254, 'Komarapalayam', 'TN'),
(255, 'Bahadurgarh', 'HR'),
(256, 'Machilipatnam', 'AP'),
(257, 'Midnapore', 'WB'),
(258, 'Bharuch', 'GJ'),
(259, 'Hoshiarpur', 'PB'),
(260, 'Jaunpur', 'UP'),
(261, 'Adoni', 'AP'),
(262, 'Jind', 'HR'),
(263, 'Udupi', 'KA'),
(264, 'Tonk', 'RJ'),
(265, 'Tenali', 'AP'),
(266, 'Lakhimpur', 'UP'),
(267, 'Balurghat', 'WB'),
(268, 'Kanchipuram', 'TN'),
(269, 'Vapi', 'GJ'),
(270, 'Proddatur', 'AP'),
(271, 'Ambur', 'TN'),
(272, 'Robertsonpet', 'KA'),
(273, 'Hathras', 'UP'),
(274, 'Navsari', 'GJ'),
(275, 'Banda', 'UP'),
(276, 'Pilibhit', 'UP'),
(277, 'Mahbubnagar', 'TG'),
(278, 'Bettiah', 'BR'),
(279, 'Vidisha', 'MP'),
(280, 'Saharsa', 'BR'),
(281, 'Kishangarh', 'RJ'),
(282, 'Thanesar', 'HR'),
(283, 'Barabanki', 'UP'),
(284, 'Mughalsarai', 'UP'),
(285, 'Veraval', 'GJ'),
(286, 'Rudrapur', 'UT'),
(287, 'Chittorgarh', 'RJ'),
(288, 'Dibrugarh', 'AS'),
(289, 'Chittoor', 'AP'),
(290, 'Hazaribagh', 'JH'),
(291, 'Jorhat', 'AS'),
(292, 'Hindupur', 'AP'),
(293, 'Porbandar', 'GJ'),
(294, 'Batala', 'PB'),
(295, 'Beawar', 'RJ'),
(296, 'Bhadravati', 'KA'),
(297, 'Hanumangarh', 'RJ'),
(298, 'Satara', 'MH'),
(299, 'Chhatarpur', 'MP'),
(300, 'Hajipur', 'BR'),
(301, 'Damoh', 'MP'),
(302, 'Sasaram', 'BR'),
(303, 'Nagaon', 'AS'),
(304, 'Beed', 'MH'),
(305, 'Mohali', 'PB'),
(306, 'Chitradurga', 'KA'),
(307, 'Tiruvannamalai', 'TN'),
(308, 'Abohar', 'PB'),
(309, 'Harihar', 'KA'),
(310, 'Basirhat', 'WB'),
(311, 'Kaithal', 'HR'),
(312, 'Pudukkottai', 'TN'),
(313, 'Godhra', 'GJ'),
(314, 'Giridih', 'JH'),
(315, 'Pathankot', 'PB'),
(316, 'Shillong', 'ML'),
(317, 'Bhuj', 'GJ'),
(318, 'Khurja', 'UP'),
(319, 'Bhimavaram', 'AP'),
(320, 'Pakhanjore', 'CT'),
(321, 'Mandsaur', 'MP'),
(322, 'Moga', 'PB'),
(323, 'Rewari', 'HR'),
(324, 'Ankleshwar', 'GJ'),
(325, 'Kumbakonam', 'TN'),
(326, 'Pandharpur', 'MH'),
(327, 'Gonda', 'UP'),
(328, 'Kolar', 'KA'),
(329, 'Yavatmal', 'MH'),
(330, 'Bankura', 'WB'),
(331, 'Mandya', 'KA'),
(332, 'Dehri', 'BR'),
(333, 'Kamptee', 'MH'),
(334, 'Nalgonda', 'TG'),
(335, 'Madanapalle', 'AP'),
(336, 'Malerkotla', 'PB'),
(337, 'Siwan', 'BR'),
(338, 'Khargone', 'MP'),
(339, 'Mainpuri', 'UP'),
(340, 'Dholpur', 'RJ'),
(341, 'Lalitpur', 'UP'),
(342, 'Chakdaha', 'WB'),
(343, 'Gondia', 'MH'),
(344, 'Ramgarh', 'JH'),
(345, 'Darjeeling', 'WB'),
(346, 'Palwal', 'HR'),
(347, 'Etah', 'UP'),
(348, 'Palakkad', 'KL'),
(349, 'Rajapalayam', 'TN'),
(350, 'Botad', 'GJ'),
(351, 'Gangapur', 'RJ'),
(352, 'Kottayam', 'KL'),
(353, 'Deoria', 'UP'),
(354, 'Bhadrak', 'OR'),
(355, 'Neemuch', 'MP'),
(356, 'Khanna', 'PB'),
(357, 'Alipurduar', 'WB'),
(358, 'Purulia', 'WB'),
(359, 'Guntakal', 'AP'),
(360, 'Pithampur', 'MP'),
(361, 'Ujhani', 'UP'),
(362, 'Srikakulam', 'AP'),
(363, 'Tinsukia', 'AS'),
(364, 'Patan', 'GJ'),
(365, 'Jagdalpur', 'CT'),
(366, 'Motihari', 'BR'),
(367, 'Jangipur', 'WB'),
(368, 'Palanpur', 'GJ'),
(369, 'Dharmavaram', 'AP'),
(370, 'Kashipur', 'UT'),
(371, 'Ghazipur', 'UP'),
(372, 'Sawai Madhopur', 'RJ'),
(373, 'Churu', 'RJ'),
(374, 'Medininagar', 'JH'),
(375, 'Dahod', 'GJ'),
(376, 'Chirkunda', 'JH'),
(377, 'Nawada', 'BR'),
(378, 'Chikkamagallooru', 'KA'),
(379, 'Chikmagalur', 'KA'),
(380, 'Jetpur', 'GJ'),
(381, 'Gudivada', 'AP'),
(382, 'Baran', 'RJ'),
(383, 'Hoshangabad', 'MP'),
(384, 'Adilabad', 'TG'),
(385, 'Muktasar', 'PB'),
(386, 'Baripada', 'OR'),
(387, 'Hosur', 'TN'),
(388, 'Barnala', 'PB'),
(389, 'Makrana', 'RJ'),
(390, 'Narasaraopet', 'AP'),
(391, 'Sultanpur', 'UP'),
(392, 'Azamgarh', 'UP'),
(393, 'Bijnor', 'UP'),
(394, 'Sahaswan', 'UP'),
(395, 'Basti', 'UP'),
(396, 'Gangawati', 'KA'),
(397, 'Kothamangalam', 'KL'),
(398, 'Valsad', 'GJ'),
(399, 'Ambikapur', 'CT'),
(400, 'Itarsi', 'MP'),
(401, 'Panaji', 'GA'),
(402, 'Chandausi', 'UP'),
(403, 'Siddipet', 'TG'),
(404, 'Kalol', 'GJ'),
(405, 'Bagaha', 'BR'),
(406, 'Achalpur', 'MH'),
(407, 'Gondal', 'GJ'),
(408, 'Osmanabad', 'MH'),
(409, 'Akbarpur', 'UP'),
(410, 'Ballia', 'UP'),
(411, 'Deesa', 'GJ'),
(412, 'Nagaur', 'RJ'),
(413, 'Bangaon', 'WB'),
(414, 'Buxar', 'BR'),
(415, 'Firozpur', 'PB'),
(416, 'Hindaun', 'RJ'),
(417, 'Mubarakpur', 'UP'),
(418, 'Tanda', 'UP'),
(419, 'Dhubri', 'AS'),
(420, 'Sehore', 'MP'),
(421, 'Anantnag', 'JK'),
(422, 'Tadipatri', 'AP'),
(423, 'Port Blair', 'AN'),
(424, 'Greater Noida', 'UP'),
(425, 'Shikohabad', 'UP'),
(426, 'Shamli', 'UP'),
(427, 'Kishanganj', 'BR'),
(428, 'Hinganghat', 'MH'),
(429, 'Cooch Behar', 'WB'),
(430, 'Karaikudi', 'TN'),
(431, 'Wardha', 'MH'),
(432, 'Ranebennuru', 'KA'),
(433, 'Sitamarhi', 'BR'),
(434, 'Neyveli', 'TN'),
(435, 'Amreli', 'GJ'),
(436, 'Amreli', 'GJ'),
(437, 'Suryapet', 'TG'),
(438, 'Jamalpur', 'BR'),
(439, 'Bhiwadi', 'RJ'),
(440, 'Barshi', 'MH'),
(441, 'Bundi', 'RJ'),
(442, 'Tadepalligudem', 'AP'),
(443, 'Miryalaguda', 'TG'),
(444, 'Chirmiri', 'CT'),
(445, 'Betul', 'MP'),
(446, 'Amaravati', 'AP'),
(447, 'Nagapattinam', 'TN'),
(448, 'Baraut', 'UP'),
(449, 'Jehanabad', 'BR'),
(450, 'Seoni', 'MP'),
(451, 'Rishikesh', 'UT'),
(452, 'Khair', 'UP'),
(453, 'Dhamtari', 'CT'),
(454, 'Kapurthala', 'PB'),
(455, 'Sujangarh', 'RJ'),
(456, 'Aurangabad', 'BR'),
(457, 'Chilakaluripet', 'AP'),
(458, 'Malappuram', 'KL'),
(459, 'Kasganj', 'UP'),
(460, 'Vasco', 'GA'),
(461, 'Tezpur', 'AS'),
(462, 'Jhunjhunu', 'RJ'),
(463, 'Datia', 'MP'),
(464, 'Banswara', 'RJ'),
(465, 'Raigarh', 'CT'),
(466, 'Nagda', 'MP'),
(467, 'Lakhisarai', 'BR'),
(468, 'Auraiya', 'UP'),
(469, 'Kohima', 'NL'),
(470, 'Gangtok', 'SK'),
(471, 'Mahuva', 'GJ'),
(472, 'Silvassa', 'DN'),
(473, 'Balangir', 'OR'),
(474, 'Phagwara', 'PB'),
(475, 'Jharsuguda', 'OR'),
(476, 'Chalisgaon', 'MH'),
(477, 'Khatauli', 'UP'),
(478, 'Manjeri', 'KL'),
(479, 'Mormugao', 'GA'),
(480, 'Deoband', 'UP'),
(481, 'Mahasamund', 'CT'),
(482, 'Jagtial', 'TG'),
(483, 'Viluppuram', 'TN'),
(484, 'Amalner', 'MH'),
(485, 'Sardarshahar', 'RJ'),
(486, 'Paramakudi', 'TN'),
(487, 'Zirakpur', 'PB'),
(488, 'Tiruchengode', 'TN'),
(489, 'Nagina', 'UP'),
(490, 'Mahoba', 'UP'),
(491, 'Muradnagar', 'UP'),
(492, 'Ramanagara', 'KA'),
(493, 'Kovilpatti', 'TN'),
(494, 'Dhanpuri', 'MP'),
(495, 'Bhadohi', 'UP'),
(496, 'Theni-Allinagaram', 'TN'),
(497, 'Khamgaon', 'MH'),
(498, 'Dhar', 'MP'),
(499, 'Balaghat', 'MP'),
(500, 'Akot', 'MH'),
(501, 'Fatehpur', 'RJ'),
(502, 'Thalassery', 'KL'),
(503, 'Bolpur', 'WB'),
(504, 'Kanthi', 'WB'),
(505, 'Rajpura', 'PB'),
(506, 'Udgir', 'MH'),
(507, 'Bhandara', 'MH'),
(508, 'Dadri', 'UP'),
(509, 'Ponnani', 'KL'),
(510, 'Kadayanallur', 'TN'),
(511, 'Pratapgarh', 'UP'),
(512, 'Pollachi', 'TN'),
(513, 'Najibabad', 'UP'),
(514, 'Parli', 'MH'),
(515, 'Ooty', 'TN'),
(516, 'Jhumri Telaiya', 'JH'),
(517, 'Margao', 'GA'),
(518, 'Mancherial', 'TG'),
(519, 'Karaikal', 'PY'),
(520, 'Dausa', 'RJ'),
(521, 'Jeypore', 'OR'),
(522, 'Mehsana', 'GJ'),
(523, 'Karauli', 'RJ'),
(524, 'Sahibganj', 'JH'),
(525, 'Kothagudem', 'TG'),
(526, 'Itanagar', 'AR'),
(527, 'Bagalkot', 'KA'),
(528, 'Kavaratti', 'LD');

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
(1, 'gasfsf', 'ASDASDASDSA', 'dfdsfasfsa', '/img/events/1585992718we.jpg', 'dfasds', '2020-04-04 08:41:33', 'fdsfaffs'),
(3, 'dada3esda', 'sdfsadfsdfsaf', 'fadsfsdafdsfdsfdsfas', '/img/events/1586000567158566854767310081_116760392748965_6191890174311101886_n.jpg', 'sfasfdsfadsfds', '2020-04-04 09:51:57', 'ssfsdfsadfdfas');

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
(3, '/img/gallery/1586000486158566848965996476_225118185126761_4230629823754738850_n.jpg', '/img/gallery/1586000486158566854766826183_381434999240719_4488187743027055156_n.jpg,/img/gallery/1586000486158566854767310081_116760392748965_6191890174311101886_n.jpg,/img/gallery/1586000486158566854767663132_211510696497449_2670908205881149308_n.jpg', '2020-04-04 11:31:12'),
(4, '/img/gallery/1586000412158566869666849744_120951325870598_1325872664865865557_n.jpg', '/img/gallery/1586000424158566864467561460_970470896632402_8580372413905623591_n.jpg,/img/gallery/1586000424158566864468925491_2823303271017683_8475920220443858393_n.jpg,/img/gallery/1586000424158566864469370532_292210201619799_562255468935726024_n.jpg,/img/gallery/1586000424158566869666332742_171911283848221_4813691813979316272_n.jpg', '2020-04-04 11:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `auth` int(10) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '/img/news/1585994716apj.jpeg', 'asfdfas', 'safsdfsa', 'fsfasfsfdsfsfdfa', '1', '2020-04-04 10:05:16'),
(4, '/img/news/1586000550158566864467561460_970470896632402_8580372413905623591_n.jpg', 'fsas', 'fds', 'fsfafds', '1', '2020-04-04 11:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(2) NOT NULL,
  `state_code` varchar(2) DEFAULT NULL,
  `state_name` varchar(27) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_code`, `state_name`) VALUES
(1, 'AP', 'Andhra Pradesh'),
(2, 'AR', 'Arunachal Pradesh'),
(3, 'AS', 'Assam'),
(4, 'BR', 'Bihar'),
(5, 'CT', 'Chhattisgarh'),
(6, 'GA', 'Goa'),
(7, 'GJ', 'Gujarat'),
(8, 'HR', 'Haryana'),
(9, 'HP', 'Himachal Pradesh'),
(10, 'JK', 'Jammu and Kashmir'),
(11, 'JH', 'Jharkhand'),
(12, 'KA', 'Karnataka'),
(13, 'KL', 'Kerala'),
(14, 'MP', 'Madhya Pradesh'),
(15, 'MH', 'Maharashtra'),
(16, 'MN', 'Manipur'),
(17, 'ML', 'Meghalaya'),
(18, 'MZ', 'Mizoram'),
(19, 'NL', 'Nagaland'),
(20, 'OR', 'Odisha'),
(21, 'PB', 'Punjab'),
(22, 'RJ', 'Rajasthan'),
(23, 'SK', 'Sikkim'),
(24, 'TN', 'Tamil Nadu'),
(25, 'TG', 'Telangana'),
(26, 'TR', 'Tripura'),
(27, 'UP', 'Uttar Pradesh'),
(28, 'UT', 'Uttarakhand'),
(29, 'WB', 'West Bengal'),
(30, 'AN', 'Andaman and Nicobar Islands'),
(31, 'CH', 'Chandigarh'),
(32, 'DN', 'Dadra and Nagar Haveli'),
(33, 'DD', 'Daman and Diu'),
(34, 'LD', 'Lakshadweep'),
(35, 'DL', 'Delhi'),
(36, 'PY', 'Puducherry');

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
(7, 'Arun', 'd', 'arundanielkennedy@gmail.com', 0, '098789890', 'msc', 'O +ve', 'sad', '1000', '$2y$10$tCNFopZ9piRfNb7umT5H0..BqrvoUcNnZpvObyhql8S23wDuEyONy', '593ba04723579c0087251901f2275c88c2d7ae2112df322b7bd5b6a56e919158d01eb142b2ce7898425d06313c8a038affa4', '/img/profile/1584187775DSC_8564 2.JPG', 30);

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `slno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
