-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2016 at 11:06 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itv_blazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs_committee`
--

CREATE TABLE IF NOT EXISTS `clubs_committee` (
  `club_comm_id` varchar(2) NOT NULL,
  `club_comm_name` varchar(20) NOT NULL,
  PRIMARY KEY (`club_comm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs_committee`
--

INSERT INTO `clubs_committee` (`club_comm_id`, `club_comm_name`) VALUES
('C1', 'DANCE_CLUB'),
('C2', 'MUSIC_CLUB'),
('C3', 'DRAMA_CLUB'),
('C4', 'LITRETURE_CLUB'),
('C5', 'ART_CLUB'),
('C6', 'DESIGN_CLUB'),
('C8', 'CULTURAL_COM'),
('C9', 'MESS_COMM'),
('CA', 'CULTURAL_COMM'),
('CB', 'MESS_COMMITTEE'),
('CC', 'BUS_COMMITTEE'),
('CD', 'SPORTS_COMMITTEE');

-- --------------------------------------------------------

--
-- Table structure for table `club_comm_details`
--

CREATE TABLE IF NOT EXISTS `club_comm_details` (
  `student_id` varchar(10) NOT NULL,
  `club_comm_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_comm_details`
--

INSERT INTO `club_comm_details` (`student_id`, `club_comm_id`) VALUES
('201652049', 'C3'),
('201652017', 'C2'),
('201652017', 'C3'),
('201652049', 'C2'),
('201552076', 'C3'),
('201552076', 'C2'),
('201552051', 'C3'),
('201552051', 'C1'),
('201551098', 'C3'),
('201551098', 'C2'),
('201552067', 'C2'),
('201552067', 'C3'),
('201552076', 'CA'),
('201551064', 'CA'),
('201351006', 'CB'),
('201351029', 'CB'),
('201351027', 'CB'),
('201352012', 'CB'),
('201352004', 'CB'),
('201452030', 'CB'),
('201452058', 'CB'),
('201451042', 'CB'),
('201451029', 'CB'),
('201552074', 'CB'),
('201552047', 'CB'),
('201551060', 'CB'),
('201551008', 'CB'),
('201551063', 'CB');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `name1` varchar(9) NOT NULL,
  `comments` text NOT NULL,
  `date_publish` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clubs_comm_id` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `name1`, `comments`, `date_publish`, `clubs_comm_id`) VALUES
(43, 'Shashi Bhushan', '646464', 'hello', '2016-11-03 10:36:06', 'C2'),
(44, 'Vaibhav', '201552077', 'helooo..this project is awesome i know we can do much more thing but its the starting so we have to look forward..', '2016-11-03 11:28:06', 'C2'),
(48, 'Monika', '201552063', 'hellooooooooooooooooooooooooo', '2016-11-07 16:48:13', 'C2'),
(49, 'rahul', '201554205', 'i am fine', '2016-11-14 15:25:34', 'CC'),
(51, 'Shashi Bhushan', '201552076', 'okay...mess is shit', '2016-11-14 05:13:35', 'C2'),
(53, 'Radheyshyam', '201652006', 'mess kb thik hoga', '2016-11-14 20:09:22', 'C9');

-- --------------------------------------------------------

--
-- Table structure for table `qcp_table`
--

CREATE TABLE IF NOT EXISTS `qcp_table` (
  `student_id` varchar(9) NOT NULL,
  `query_box` varchar(50) NOT NULL,
  `club_comm_name` varchar(20) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `posts` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `Sno` varchar(3) NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `branch` varchar(2) NOT NULL,
  `year` varchar(4) NOT NULL,
  `CR_id` varchar(11) NOT NULL,
  `s_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`Sno`, `student_id`, `name`, `phone_no`, `email_id`, `branch`, `year`, `CR_id`, `s_id`) VALUES
('1', '201651049', 'SUNNY PRAKASH', '9429023796', '201552003iiitvadodara.ac.in', 'IT', '2016', '', ''),
('2', '201651018', 'HEET SANKESARA', '9427134631', '201552012iiitvadodara.ac.in', 'IT', '2016', '', ''),
('3', '201651051', 'VAAIBHAVI SINGH', '9580729771', '201552026iiitvadodara.ac.in', 'IT', '2016', '', ''),
('4', '201652017', 'PRATITI JAIN', '9428677692', '201552028iiitvadodara.ac.in', 'IT', '2016', '', ''),
('5', '201652005', 'AVTANS KUMAR', '9479889239', '201552042iiitvadodara.ac.in', 'IT', '2016', '', ''),
('6', '201651030', 'MOHAK KHARE', '9873087896', '201552046iiitvadodara.ac.in', 'IT', '2016', '', ''),
('7', '201652010', 'KUMAR HIMANSHU', '8853783317', '201552047iiitvadodara.ac.in', 'IT', '2016', '', ''),
('8', '201552051', 'SAURABH DWIVEDI', '7203842728', '201552051@iiitvadodara.ac.in', 'IT', '2015', 'cr', ''),
('9', '201551098', 'AYUSH DAS', '7897028547', '201551098@iiitvadodara.ac.in', 'IT', '2015', 'cr', ''),
('10', '201552053', 'K.RIYA SAMUEL', '7573099239', '201552053iiitvadodara.ac.in', 'IT', '2015', '', ''),
('11', '201552076', 'SHASHI BHUSHAN', '7567775854', '201552076@iiitvadodara.ac.in', 'IT', '2016', 'cr', ''),
('12', '201551064', 'VIKAS RAJPUT', '8826679830', '201551064@iiitvadodara.ac.in', 'CS', '2016', '', 'ccs'),
('13', '201551057', 'KAMLESH KUMAR', '7285832105', '201552026@iiitvadodara.ac.in', 'CS', '2015', '', ''),
('14', '201552060', 'NIRANJAN CHOUDARY', '9452567467', '201552060@iiitvadodara.ac.in', 'IT', '2015', '', ''),
('15', '201551085', 'UJAWAL  TEWARI', '9455555683', '201551085@iiitvadodara.ac.in', 'CS', '2015', '', ''),
('16', '201552059', 'AVIRAL AVASTHI', '9428659140', '201552059@iiitvadodara.ac.in', 'IT', '2015', '', ''),
('17', '201552077', 'VAIBHAV', '8141923379', '201552077@iiitvadodara.ac.in', 'IT', '2015', '', ''),
('18', '201451045', 'PRIYANKA SINGHAL', '8469305520', '201451045@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('19', '201451068', 'SHRESTHI PRIYA', '7048353471', '201451068@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('20', '201452050', 'SHREYA SINGH', '8765838765', '201452050@iiitvadodara.ac.in', 'IT', '2014', '', ''),
('21', '201451050', 'SWETA TIWARI', '8469353029', '201451050@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('22', '201451039', 'RAHUL CHAURASIA', '7045187259', '201451039@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('23', '201451001', 'HARRY RI', '9798804548', '201451001@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('24', '201451060', 'SACHIN', '8460653451', '201451001@iiitvadodara.acin', 'CS', '2014', '', ''),
('25', '201451057', 'AAYUSH PANDEY', '9429453110', '201451057@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('26', '201452051', 'VIPIN SAHU', '7376300430', '201452051@iiitvadodara.ac.in', 'IT', '2014', '', ''),
('27', '201451012', 'VIKRAM', '9676396705', '201451012@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('28', '201452015', 'PRATIK PALIWAL', '9429453250', '201452015@iiitvadodara.ac.in', 'IT', '2014', '', ''),
('29', '201451047', 'PRASANTH MAURYA', '7068120225', '201451047@iiitvadodara.acin', 'CS', '2014', '', 'jc3'),
('30', '201451016', 'NAVNEET NANDAN', '9624349511', '201451016@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('31', '201552067', 'Monika Singh', '7698692119', '201552067@iiitvadodara.ac.in', 'IT', '2015', '', ''),
('32', '201452030', 'SHARAD PATEL', '8128268037', '201452030@iiitvadodara.ac.in', 'IT', '2014', '', ''),
('33', '201452058', 'DEEPAK KUUMAR GOYAL', '7575053163', '201452058@iiitvadodara.ac.in', 'IT', '2014', '', ''),
('34', '201552074', 'AKRITI BHADORIYA', '7285832105', '201552074@iiitvadodara.ac.in', 'IT', '2015', '', 'mc'),
('35', '201451042', 'MAYANK PADSHALA', '7043408740', '201451042@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('36', '201451029', 'SAI TEJA', '9601806866', '201451029@iiitvadodara.ac.in', 'CS', '2014', '', ''),
('37', '201551060', 'ALIZEY JALIL', '9687567161', '201551060@iiitvadodara.ac.in', 'CS', '2015', '', ''),
('38', '201551008', 'SAI PHANI', '8374060626', '201551008@iiitvadodara.ac.in', 'CS', '2015', '', ''),
('38', '201551063', 'MANEESH KUMAR', '9506042589', '201551063@iiitvadodara.ac.in', 'CS', '2015', '', ''),
('39', '201552047', 'RAJAT SONI', '9898977343', '201552047@iiitvadodara.ac.in', 'IT', '2015', '', ''),
('40', '20131006', 'YASH CHOUBEY', '9460064512', '201351006@iiitvadodara.ac.in', 'CS', '2013', '', ''),
('41', '201351029', 'GAURAV YADAV', '9537089841', '201351029@iiitvadodara.ac.in', 'CS', '2013', '', ''),
('42', '201351027', 'HARISH KRUPO', '9724983102', '201351027@iiitvadodara.ac.in', 'CS', '2013', '', ''),
('43', '201352012', 'SUDHANSHU JAISWAL', '9998795085', '201352012@iiitvadodara.ac.in', 'IT', '2013', '', ''),
('44', '201352004', 'SHUBHAM SHUBHANKAR SHARMA', '7359735368', '201352004@iiitvadodara.ac.in', 'IT', '2013', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE IF NOT EXISTS `tbl_uploads` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`) VALUES
(1, '70455-(r)11d.jpg', 'image/jpeg', 19),
(2, '77190-3d-glass-green-effect.jpg', 'image/jpeg', 249),
(3, '38209-main.png', 'image/png', 116),
(4, '98858-bus1.pdf', 'application/pdf', 15),
(5, '25303-1467725013226_rap-god-(eminem)---320-kbps---(bossmp3.in).mp3', 'audio/mp3', 35),
(6, '85589-abstract_header_colorful_wave_vector_design_6819557.jpg', 'image/jpeg', 69),
(7, '41113-drop_box.png', 'image/png', 6),
(8, '25073-industrial-mech.jpg', 'image/jpeg', 83),
(9, '20357-600x364.jpg', 'image/jpeg', 50),
(10, '13656-nw-checkerboard-website1-1024x601.jpg', 'image/jpeg', 127),
(11, '47177-600x364.jpg', 'image/jpeg', 50),
(12, '38022-2.jpg', 'image/jpeg', 770),
(13, '98315-1.jpg', 'image/jpeg', 166),
(14, '90613-5.jpg', 'image/jpeg', 215),
(15, '98517-47277-bigthumbnail.jpg', 'image/jpeg', 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(20) NOT NULL,
  `userProfession` varchar(50) NOT NULL,
  `userPic` varchar(200) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userName`, `userProfession`, `userPic`) VALUES
(42, 'dwayne johnson', 'actor, wrestler', '380289.jpg'),
(43, 'justin bieber', 'singer', '995062.jpg'),
(44, 'chris hemsworth', 'actor', '171544.jpg'),
(41, 'john cena', 'wrestler', '549279.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(10) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `student_id`, `phone_no`) VALUES
(1, '201552076@', '7567775854'),
(2, '201552074', '9661424569');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Shashi Bhushan', '201552076@iiitvadodara.ac.in', 'king'),
(2, 'Vaibhav Bhadauaria', '201552077@iiitvadodara.ac.in', 'king2'),
(3, 'shashi', 'shashibhushan0911@gmail.com', 'f30aa7a662c728b7407c54ae6bfd27d1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
