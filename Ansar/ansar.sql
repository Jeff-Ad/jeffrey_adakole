-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2021 at 05:25 PM
-- Server version: 5.7.31
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ansar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `parentname` varchar(100) NOT NULL,
  `homeadd` text NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `offaddress` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(20) NOT NULL,
  `lga` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `stuname` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `class` varchar(15) NOT NULL,
  `prevschool` text NOT NULL,
  `prevaddress` text NOT NULL,
  `headmaster` varchar(100) NOT NULL,
  `prevclass` varchar(15) NOT NULL,
  `reason` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `parentname`, `homeadd`, `occupation`, `offaddress`, `phone`, `email`, `state`, `lga`, `nationality`, `stuname`, `photo`, `dob`, `gender`, `class`, `prevschool`, `prevaddress`, `headmaster`, `prevclass`, `reason`, `status`) VALUES
(4, 'Adamu Minkail', 'Lokongoma Phase 2', 'Teacher', '200 housing unit lokoja', '08137191617', 'adamuminkail@gmail.com', 'Kogi', 'lokoja', 'Nigerian', 'Abdul', 'img/1635931264DSC_7965[1].jpg', '0000-00-00', 'male', 'JSS 2', 'Royal International School', 'Zango Daji Barracks ', 'Alfaky Bello', 'JSS 2', 'Waec examination', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1 NOT NULL,
  `photo` text CHARACTER SET latin1 NOT NULL,
  `content` longtext CHARACTER SET latin1 NOT NULL,
  `author` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `photo`, `content`, `author`, `date`) VALUES
(8, 'Media Interview Granted by Alhaji Mustapha Goni, Chairman, Governing Board Al-Ansar Academy, Maiduguri', 'gallery/1636376033News.png', 'We consider it a great privilege to have you on this interview Sir and we thank Almighty Allah for His mercies\r\nAlhamdulillah. It\'s a privilege for me too for meeting you. May Allah (SWT) continue to shower HIS blessings on us and our great Foundation, AL-ANSAR.\r\nAl-Ansar Academy Maiduguri (ALAAMA) has been in operation for a while now, what can you say are the challenges of running a school of this magnitude?\r\nAL-ANSAR ACADEMY, is just one year old. It was registered in in Sept, 2018 as AL-ANSAR Community School, to operate Nursery, Primary and JSS. Due to inadequate preparations, it could not commence operation until the following academic year i.e September, 2019. You can there see that we are just one year in the industry and therefore not easy to assess and say these are the challenges. But what I see as a challenge is a matter of confidence building i.e. how do make the school acceptable to public as we are in a competitive environment of more than 200 Private schools here in Maiduguri. Alhamdulillah. We have tremendously succeeded in that going by what we are seeing in the on going admission exercise against next academic year. We started with 3 classes. One Nursery and two primaries with total population of 83. In the current admission exercise going on, already 666 pupils/ students have fully registered and more are on the way Insha Allah. So next academic session, we would have pupils/students population of more than 700. That\'s a great achievement.\r\nSo far so good right? How has the presence of Al-Ansar Academy impacted on the Education of children and youth in Borno State?\r\nAs I said earlier it is not easy to assess the school’s performance and say yes we have impacted but going by what we are witnessing in admission exercise going on, people have noticed the impact we are making otherwise, the turn out won\'t have been so high.\r\nWhat are the objectives of establishing Al-Ansar Academy and how much of it have you and your team achieved so far?\r\nWe intended to participate in the Educational Sector in the state to compliment Government\'s effort by providing affordable education to our children. If you consider the big names in the industry in the state, we could be ranked 5th or 6th in terms of what is being charged as school fees etc by the private schools in the state. Moreso, we have provided a state of art facilities, first of its type in the state if not in the whole of the North. I see this as a beginning and more would unfold as we commence full operation Insha Allah.\r\nWhere do you see Al-Ansar Academy in the next 5 years Insha Allah?\r\nIn the next 5 years to come, I hope to see AL-ANSAR ACADEMY operating all d 3 levels of 6--3--3 National policy on Education in full and would outclass all other schools in terms of academic performance, discipline, sporting activities etc.\r\nHow has the working relationship been between the Governing Board of the ALAAMA which you are the Chairman and the Al-Ansar Foundation as a whole?\r\nVery cordial, brotherly and have confidence with another. Board has been given free hand since inception and this has made our operations easier, smooth and effective.\r\nHow do you feel about the movement of Al-Ansar Academy to its permanent site? How is the movement going to affect parents and pupils?\r\nI would like to answer this geographically. See it as if one is living in high density place and in a rented apartment and now with the help of Allah, you built your own choice house in a low-density area and relocated. I think without being told the difference is very clear. You see we have been using part of the AL-ANSAR Qu\'ranic Memorization School now moving out to the permanent site is historic and great indeed and the feelings as described above.\r\nSir, please tell us more about the school - ALAAMA in terms of structures, infrastructure and administration.\r\nAl-Ansar Academy is a state of the art two story building well-structured and furnished with a spacious and conducive environment suitable for learning experience. It is a magnificent structure consisting of three floors; the first floor, second floor and ground the floor. It composed of multiple structured offices, fitting toilets and spacious classes capable of accommodating hundreds of students and pupils. The school also contains a suitable playground for nursery and primary classes.\r\nThe ground floor contains the following:\r\n*	Nine (09) spacious and furnished class rooms.\r\n*	One befitted reception with two (2) toilets.\r\n*	An equipped quiet hospitable single bed sick bay.\r\n*	A pleasant befitted Exams and record office.\r\n*	A furnished guidance and council office.\r\n*	A pleasing furnished extensive office consisting of:\r\n*	Bursary office.\r\na.	Two assistant Heads Offices.\r\nb.	One in-fitted toilet.\r\nc.	Twelve (12) outfitted toilets.\r\nThe second floor contains the following;\r\n*	A couple of pleasant heads offices.\r\n*	A wide furnished staff room.\r\n*	Nine (9) spacious and furnished classes.\r\n*	Twelve (12) outfitted toilets. \r\nThe first floor contains the following;\r\n*  An ample conference room with two outfitted (2) toilets. \r\n*  Seven (7) spacious and furnished class rooms.\r\n*   A fully equipped computer room.\r\n*   A well-structured library.\r\n* An approved structured science laboratory.\r\n*  Twelve (12) outfitted toilets.\r\nSUMMARY \r\nThe school also contains a colorful playground and a cabin security office by the gate. \r\nAs for the administration, we would in the next academic session put in place a workable structure that will ensure effective coordination and monitoring that would lead to realisation of the Foundation\'s goals. \r\nI want to thank you Alhaji Mustapha Goni, for your time!\r\nWith this I wish to call it a period and convey my unalloyed appreciation to you and be rest assured that we at AL- ANSAR ACADEMY are always ready to avail ourselves whenever you need us. Thank you so much.\r\n', 'Admin', '2021-11-08 12:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Adamu Minkail', 'adamuminkail@gmail.com', 'school fees', 'qweoifwjkfjwjhflcjolxzcojsld;ncoxjznc;nsdhcnzxhcnodhcn;osdcnxzocjnjosdnxciounwdouchsdpiohcnsoxihcnpuidhxscpnisudhcihcdisncxzjncox;zosdjncosdjcs;lcjoxjlkclsxjco;hjzxn;ocjnjxozunocjnxcjnzxlcnzxljncozjklxnczkljncklzxnjklhcnzxkljcnxzuchnxjznczxjjnzxjcnjczxn;cjzxnczxjcnzxjcnzxncjzxnc;zxn;cjzxnc;jzxcn;zxjlnczxklcnzxklncj'),
(2, 'edwac', 'wde@gmail.com', 'wecd', 'cewd');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

DROP TABLE IF EXISTS `facility`;
CREATE TABLE IF NOT EXISTS `facility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subjects` int(11) NOT NULL,
  `labs` int(11) NOT NULL,
  `students` bigint(11) NOT NULL,
  `teachers` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `subjects`, `labs`, `students`, `teachers`) VALUES
(1, 18, 5, 140, 26);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `photo`) VALUES
(7, 'Foundation Logo', 'photo/1636910286foundation.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `recovery`
--

DROP TABLE IF EXISTS `recovery`;
CREATE TABLE IF NOT EXISTS `recovery` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `expDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`) VALUES
(1, 'admin', 'admin@123', 'admin', 'Admin@abc-xyz'),
(6, 'Sufyan', 'sufyan.technology@gmail.com', 'admin', 'f79fd1ca2736dd7d8577cbf715b38a42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
