-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 09:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dipu`
--

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `id` int(11) NOT NULL,
  `choseday` varchar(50) NOT NULL,
  `stdid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id`, `choseday`, `stdid`) VALUES
(1, 'saturday', 1),
(2, 'friday', 2),
(3, 'friday', 3),
(4, 'both', 4),
(5, 'both', 5),
(6, 'both', 6),
(7, 'saturday', 7),
(8, 'saturday', 8),
(9, 'friday', 9);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `board` varchar(100) NOT NULL,
  `yop` int(11) NOT NULL,
  `cgpa` float NOT NULL,
  `stdid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree`, `subject`, `board`, `yop`, `cgpa`, `stdid`) VALUES
(1, 'ssc', 'Science', 'Dinajpur', 2009, 5, 1),
(2, 'hsc', 'Science', 'Dinajpur', 2011, 4.3, 1),
(3, 'Graduation', 'Software Engineering', 'Daffodil International University', 2017, 3.38, 1),
(4, 'Graduation', 'Philosophy', 'National University', 2013, 2, 2),
(5, 'Graduation', 'Software Engineering', 'Daffodil International University', 2017, 3.6, 3),
(6, 'Graduation', 'Pali', 'University of Dhaka', 2017, 3.25, 4),
(7, 'Graduation', 'Software Engineering', 'Daffodil International University', 2017, 3, 5),
(8, 'Graduation', 'CSE', 'Daffodil International University', 2017, 3.4, 6),
(9, 'Graduation', 'CSE', 'UODA', 2018, 2.88, 7),
(10, 'ssc', 'Science', 'Dinajpur', 2009, 5, 8),
(11, 'hsc', 'Science', 'Dinajpur', 2011, 4.5, 8),
(12, 'Graduation', 'Software Engineering', 'Daffodil International University', 2017, 3.38, 8),
(13, 'ssc', 'fsdfsd', 'fsdfsdfds', 2015, 3.6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `stdid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `photo`, `stdid`) VALUES
(1, 'uploads/3f1fb2110b.jpg', 1),
(2, 'uploads/3b1b353018.png', 2),
(3, 'uploads/5464ab4bf7.jpg', 3),
(4, 'uploads/e0dff9234b.jpg', 4),
(5, 'uploads/6da2d8a973.png', 5),
(6, 'uploads/5cb6b25625.png', 6),
(7, 'uploads/0dbb8f4aff.jpg', 7),
(8, 'uploads/7a82929f7e.png', 8),
(9, 'uploads/74190e46c0.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mstatus` varchar(50) NOT NULL,
  `bgroup` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `nid` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `peraddress` varchar(150) NOT NULL,
  `preaddress` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fname`, `mname`, `gender`, `mstatus`, `bgroup`, `nationality`, `nid`, `phone`, `email`, `peraddress`, `preaddress`) VALUES
(1, 'Md. Shahjahan Dipu', 'Md. Nur Alam', 'Most. Suraiya Begum', 'male', 'unmarried', 'o+', 'Bangladeshi', 2147483647, '01789525053', 'shahjahan.dipu@gmail.com', 'Panchagarh', 'Dhaka'),
(2, 'NAZIRA PARVIN', 'Md. Nur Alam', 'Most. Suraiya Begum', 'female', 'married', 'b+', 'Bangladeshi', 2147483647, '01786357248', 'nparvin@gmail.com', 'Panchagarh', 'Rangpur'),
(3, 'Md. Rabius Sani', 'Md. A ali', 'Most. B Begum', 'male', 'unmarried', 'b+', 'Bangladeshi', 1545451, '01737892403', 'rsani@gmail.com', '12/B', 'mohammadpur'),
(4, 'Ovi', 'Md. B ali', 'Most. C Begum', 'male', 'married', 'a+', 'Bangladeshi', 66666, '01994461631', 'abhi2547@yahoo.com', '12/B', 'asdf'),
(5, 'Soman Khan', 'asd', 'dsa', 'male', 'unmarried', 'a+', 'Bangladeshi', 1545451, '01675283209', 'soman@gmail.com', '12/B', 'sdas'),
(6, 'Smd Dipu', 'lkjh', 'jkl;', 'male', 'unmarried', 'ab+', 'Bangladeshi', 125456415, '01234567890', 'sdipu4444@outlook.com', '39/6, Bosundhara', '39/6, Bosundhara'),
(7, 'Sanjida Shema', 'Lutfor', 'Romina', 'female', 'unmarried', 'o+', 'Bangladeshi', 2147483647, '01307106606', 'sshima2017@gmail.com', 'Barisal', 'Bosila'),
(8, 'Md. Shahjahan Dipu', 'Md. Nur Alam', 'Most. Suraiya Begum', 'male', 'unmarried', 'o+', 'Bangladeshi', 2147483647, '01557720047', 'sdipu4444@gmail.com', 'Panchagarh', '39/6, Bosundhara, Dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
