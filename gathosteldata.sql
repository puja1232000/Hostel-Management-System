-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 04:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gathosteldata`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`id`, `name`, `mobile`, `email`, `password`, `cpassword`) VALUES
(1, 'puja', '98075656', 'test@123', '1234', '234'),
(2, 'puja', '980676467', 'random@123', '1234', '1234'),
(3, 'jojo', '9080702234', 'jojo@2234', '7890', '7890'),
(4, 'pratiksha', '8908755478', 'pattu@123', '12345', '12345'),
(5, 'kim', '897658908', 'kim@123', '2345', '2345'),
(6, 'hina', '907768986', 'hina@123', '$2y$10$1Sr9470/Sd2EKBhAc4sL2OmMtuWIiiguuAM0JJX1TOPKobichH4y.', '$2y$10$khLGgBsYPOfMfP46B3s7Re5xPMSVmvGrnVQG69OszXnbBqNhI2Qq6'),
(25, 'piya', '9078667689', 'test@12345', '123456', '123456'),
(26, 'sakshi', '565654545', 'sakshi@gmail.com', '$2y$10$5cbSfWxDy/maZ4ft8G1oIuFZOsnKCYAmPSfyypv4zOL.Q9p6dh3we', '$2y$10$ngh8Ye2ThpZdQFsy46a/UeZ.K5Q1ytj4suQyxPADGIAdBD/kOzKfy'),
(27, 'Prati', '9890756467', 'prati@123', '$2y$10$fQcSrwe987fBpx61afcKfemuX/6WnvGSSJDZg20Jd5IlaVjqJrZYC', '$2y$10$/SmlHF6Xy4gpLR1Sx3D4XeuQYshNjbZOZNyz3qbX9GDm/w8bY.hCu'),
(28, 'jimmy', '9657535898', 'jim@1234', '$2y$10$6EpwueFaMiHSrB4e.KH7FuEdqft0ztD2mDBYm/EPkSz7Yirs6Zp3K', '$2y$10$vywGDx3Z0D32QLlsP8IGSukFTGdO91QI.4Hptw2r8wLPcV9QCinEO'),
(29, 'ghjgk', '758697089', 'gim@13567', '$2y$10$yngdhTbtKaMyDRtzTo6qjuBbTLqLEJzVe3r5J5dTX5s1dyzRYc/Ii', '$2y$10$j3KX5dB46vxw2yyKhpN6iO4kzzYe6fsq.JApaTkLgYEHQwhMYdOeu'),
(30, 'fhjkk', 'dffghfj', 'tryujg#2345', '$2y$10$PTMj5PCDe7poGXABzTW5hONGAsw9xODTf/yyHcJsQomGvJ7YBf64m', '$2y$10$XyNfrDY4xiio9Vtm8Q9PAOyxvhpVu8ULABALrZyZeLa9QTZfD7Bcm');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `against` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `Name`, `mobile`, `report`, `against`, `date`) VALUES
(1, '', 'fnhjbgmk', '', 'dfghnjm', 'rfdgybfu'),
(2, 'jkm l.', 'hjk', 'ngjhk', 'ghjk', 'hnyju'),
(3, 'heena', '987658390', 'hkjkij', 'bgnhjuki', 'gkihi'),
(113, 'pattu', '90787564', 'food is not good', 'cook', '18/12/2020');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `completeaddress` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `joiningdate` varchar(255) NOT NULL,
  `workingas` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fullname`, `completeaddress`, `mobile`, `joiningdate`, `workingas`, `salary`) VALUES
(1, 'puja', 'Mahatma Gandhi road', '7257813236', '4', 'fgf', '424'),
(2, 'puja', 'Sai baba temple', '7257813236', '4', 'fgf', '424'),
(11, 'simran', 'fhvn,jjjkb', '907648957', '20/3/2015', 'cook', '8000'),
(14, 'naina', 'jammu', '3435667890', '20/3/2000', 'guard', '10000'),
(16, 'bitu', 'jlkmn fbvds', '7257813236', '20/3/2000', 'fgf', '7000'),
(17, 'kim', 'bhopal', '9877654532', '19/4/2005', 'head', '50000'),
(19, 'jojo', 'mumbai', '9081345678', '20/3/2000', 'ghbjmk', '10000'),
(20, 'roni', 'rrnagar', '908134590', '20/12/2020', 'guard', '7000'),
(21, 'bunny', 'Gandhi Nagar', '9087535786', '17/10/2020', 'guard', '7000'),
(22, 'golo', 'jam nagar', '90716764532', '22/8/2018', 'bodyguard', '7500'),
(23, 'seema', 'Near metro station', '968553789', '15/1/2021', 'worker', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `roomdetail`
--

CREATE TABLE `roomdetail` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `branchname` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `block` int(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `roomno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomdetail`
--

INSERT INTO `roomdetail` (`id`, `firstname`, `lastname`, `branchname`, `batch`, `block`, `floor`, `roomtype`, `roomno`) VALUES
(4, 'bnm', 'sha', 'cs', '2018', 0, '2', '3seater', '4'),
(9, 'bnm', 'jp', 'cs', '2018', 0, '2', '3seater', '6'),
(12, 'jo', 'sha', 'cs', '2018', 0, '2', '3seater', '6'),
(14, 'bnm', 'sha', 'cs', '2018', 0, '2', '3seater', '6'),
(18, 'bnm', 'jp', 'cs', '2018', 0, '2', '3seater', '4'),
(19, 'gcvb', 'gh', 'yhj', 'nbmj,', 0, 'yujhk', '3seater', '6');

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`id`, `fullname`, `email`, `msg`) VALUES
(1, 'anjk', 'kim@gmail.com', 'fyguhjkl'),
(2, 'anjk', 'kim@gmail.com', 'fyguhjkl'),
(3, 'anjk', 'test@gmail.com', 'good'),
(4, '', '', ''),
(5, '', '', ''),
(6, 'fgb', 'test@gmail.com', 'very bad'),
(7, 'fgb', 'test@gmail.com', 'very bad'),
(8, 'fgb', 'test@gmail.com', 'very bad'),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `reg_no` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `block` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `GuardianName` varchar(255) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `Number` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Fee` varchar(255) NOT NULL,
  `Paid` varchar(255) NOT NULL,
  `Due` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `reg_no`, `Email`, `block`, `gender`, `DOB`, `GuardianName`, `Occupation`, `Number`, `Address`, `Fee`, `Paid`, `Due`) VALUES
(1, 'veena', 22, 'sen@134', 1, 'female', '12/4/2001', 'vkil', 'tender', '9087645899', 'dftgoyhum,kl', '80000', '67890', '34567'),
(4, 'yuhi', 21, 'fyhi@123', 2, 'female', '', 'uijkm', 'business', '90987657890', 'ftyjuhkn gyuioak', '78900', '58000', '34000'),
(5, 'lolo', 12, 'ertgfhjkj', 2, 'female', '', 'iupoi', 'ghgyhjk', '908765788', 'ethfgjk..', '80000', '45000', '40000'),
(6, 'july', 86, 'ghuk', 1, 'female', '28/9/2000', 'gyjh jo', 'khnj,k,', '9790859090', 'tyujh', '57890', '24568', '12345'),
(113, 'pratiksha', 234, 'pratiksham@gmail.com', 1, 'female', '18/4/2000', 'sha ', 'business', '8987789890', 'aftbm, gjhk', '90000', '80000', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomdetail`
--
ALTER TABLE `roomdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminsignup`
--
ALTER TABLE `adminsignup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roomdetail`
--
ALTER TABLE `roomdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `send`
--
ALTER TABLE `send`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
