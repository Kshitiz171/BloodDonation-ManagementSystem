-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 07:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloodmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddonor`
--

CREATE TABLE IF NOT EXISTS `adddonor` (
`id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bloodtype` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adddonor`
--

INSERT INTO `adddonor` (`id`, `name`, `bloodtype`, `phone`, `location`, `lat`, `lng`) VALUES
(1, 'saroj', 'B+', '9876556', 'ktm', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `addpatient`
--

CREATE TABLE IF NOT EXISTS `addpatient` (
`id` int(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bloodtype` varchar(20) NOT NULL,
  `hospitalname` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpatient`
--

INSERT INTO `addpatient` (`id`, `image`, `name`, `bloodtype`, `hospitalname`, `location`, `phone`) VALUES
(1, '28279537_16478938619', 'kshitizportfolio', 'A-', 'manmohan', 'pokhara', '2134354');

-- --------------------------------------------------------

--
-- Table structure for table `addpatientdetail`
--

CREATE TABLE IF NOT EXISTS `addpatientdetail` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bloodtype` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `hospitalname` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addpatientdetail`
--

INSERT INTO `addpatientdetail` (`id`, `name`, `bloodtype`, `age`, `phone`, `hospitalname`, `location`, `status`) VALUES
(3, 'shyam', 'A-', '21', '56436473', 'KMC', 'Kathmandu', '1'),
(4, 'makkar', 'AB+', '22', '23525252', 'Ganga Lal', 'ktm', '1'),
(5, 'kale', 'B+', '55', '129756353', 'Man Mohan', 'Pokhara', '1'),
(6, 'mane', 'AB-', '30', '456787382', 'Teaching Hospital', 'Bhaktapur', ''),
(8, 'Manoj', 'O+', '22', '123456666', 'KMC', 'Ktm', ''),
(9, 'Sita ', 'O-', '22', '453729715', 'Dwarika Hospital', 'lalitpur', ''),
(10, 'Ramila', 'O-', '60', '9573524182', 'Dwarika Hospital', 'lalitpur', '1'),
(11, 'hari Prasad', 'AB-', '19', '8653468886', 'Peoples Care', 'lalitpur', ''),
(12, 'Ishwor thapa', 'A+', '55', '648635821', 'Child care Hospital', 'Lalitpur', ''),
(13, 'Ramesh kakrki', 'A+', '66', '5377293736', 'KMC', 'Kathandu', ''),
(14, 'Sita Kumari', 'O+', '22', '63811636181', 'Teaching Hospital', 'KTM', ''),
(15, 'Devi Maya', 'O+', '33', '6389373178', 'Child care', 'Lalitpur', '');

-- --------------------------------------------------------

--
-- Table structure for table `makedonation`
--

CREATE TABLE IF NOT EXISTS `makedonation` (
`id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makedonation`
--

INSERT INTO `makedonation` (`id`, `name`, `email`, `location`) VALUES
(1, 'mahesh', '3456784567', 'balaju'),
(2, 'rame', '345678998765', 'balaju');

-- --------------------------------------------------------

--
-- Table structure for table `makereservation`
--

CREATE TABLE IF NOT EXISTS `makereservation` (
`id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makereservation`
--

INSERT INTO `makereservation` (`id`, `name`, `phone`, `location`) VALUES
(7, 'saroj', '9849955377', 'ktm'),
(8, 'SampleMoqup', '9849955377', 'ktm'),
(9, 'kkkaka', 'jsjsjsj', 'hhhh'),
(10, 'fghj', '2345678', 'dfghjk'),
(11, 'erfhg', '123456', 'sdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
`id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bloodtype` varchar(20) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `bloodtype`, `lat`, `lng`, `phone`) VALUES
(1, 'Kshitiz', '987343722', 27.7027, 85.3207, 'O+'),
(10, 'Ram', '7483792282', 27.7022, 85.3213, 'AB+'),
(11, 'Karan', '9832822333', 27.7013, 85.3195, 'A+'),
(12, 'Mahesh', '9832187322', 27.702, 85.3202, 'A+'),
(13, 'Bijaya', '1234567892', 27.704, 85.3202, 'AB+'),
(14, 'Rabin', '3313732382', 27.7021, 85.3208, 'B+'),
(15, 'Shyam', '3317328991', 27.7023, 85.3195, 'A+'),
(16, 'Manish', '3245677011', 27.703, 85.32, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `event` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `date1`, `event`, `location`, `status`, `date`) VALUES
(1, 'Change or blood', '2018-05-11', 'Change for blood', 'balaju', 'read', '2018-05-02'),
(2, 'Childs care', '2018-05-05', 'Mr. President as chi', 'Teku', 'read', '2018-05-02'),
(6, 'Donation Importance.', '2018-05-25', 'all is invited', 'Hattisar', 'read', '2018-05-11'),
(7, 'British Blood Camp', '2018-05-23', 'Everyone Invited', 'Bhaktapur', 'unread', '2018-05-18'),
(8, 'TMC Blood camp', '2018-05-31', 'Hello Everyone', 'Patan', 'unread', '2018-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `requestblood`
--

CREATE TABLE IF NOT EXISTS `requestblood` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `bloodtype` varchar(20) NOT NULL,
  `hospitalname` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestblood`
--

INSERT INTO `requestblood` (`id`, `name`, `image`, `bloodtype`, `hospitalname`, `location`) VALUES
(1, 'saroj', '', 'O+', 'manmohan', 'ktm'),
(2, 'saroj', 'Untitled.png', 'O-', 'manmohan', 'KTM'),
(3, 'mano', 'Untitled.png', 'B+', 'Om hospital', 'Chabahil');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `gender`, `email`, `password`, `dob`, `role`) VALUES
(19, 'sita', 'female', 'sita@gmail.com', 'ssssssss', '2018-05-15', '1'),
(31, 'saroj', 'male', 'saroj@gmail.com', 'ssssssss', '2018-05-14', '1'),
(32, 'saroj', 'male', 'saroj@gmail.com', 'qqqqqqqq', '2018-05-14', '1'),
(33, 'Ram', 'male', 'ram@gmail.com', 'rrrrrrrr', '2018-05-16', '1'),
(34, 'Ram', 'male', 'ram@gmail.com', 'rrrrrrrr', '2018-05-16', '1'),
(35, 'admin', 'male', 'admin@gmail.com', 'admin', '2018-05-15', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddonor`
--
ALTER TABLE `adddonor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addpatient`
--
ALTER TABLE `addpatient`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addpatientdetail`
--
ALTER TABLE `addpatientdetail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makedonation`
--
ALTER TABLE `makedonation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makereservation`
--
ALTER TABLE `makereservation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestblood`
--
ALTER TABLE `requestblood`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddonor`
--
ALTER TABLE `adddonor`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `addpatient`
--
ALTER TABLE `addpatient`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `addpatientdetail`
--
ALTER TABLE `addpatientdetail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `makedonation`
--
ALTER TABLE `makedonation`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `makereservation`
--
ALTER TABLE `makereservation`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `requestblood`
--
ALTER TABLE `requestblood`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
