-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 10:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtual_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `fees` int(255) NOT NULL,
  `Ltype` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Laddress` varchar(100) NOT NULL,
  `Glocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `image`, `author`, `keyword`, `fees`, `Ltype`, `Lname`, `Laddress`, `Glocation`) VALUES
(1, 'Feluda Shomogro 1', 'felu.jpg', 'Satyajit Ray', 'Mystery,Stories', 20, 'Personal', 'Hobby', 'Road 14 ব্লক # সি, Dhaka 1216', 'https://goo.gl/maps/3cmgkg7C82nY22xN9'),
(2, 'Life of Pi', 'pi.jpg', 'Yann Martel', 'Fiction,Fantasy,Adventure,Magical', 5, 'Personal', 'Hobby', 'Q9P3+HR8, Darus Salam Rd, Dhaka', 'https://www.google.com/maps/place/Darus+Salam+Rd,+'),
(3, 'Lalshalu', 'lal.jpg', 'Syed Waliullah', 'Fiction,Classics,Bangladesh', 5, 'Personal', 'Hobby', '1216 Darus Salam Rd, Dhaka', 'https://www.google.com.bd/maps/@23.8264822,90.3601'),
(4, 'চোখের বালি', 'bali.jpg', 'Rabindranath Tagore,Radha Chakravarty', 'Fiction,Indian,Romance', 5, 'Public', 'Central Library', '12 - C, Line no. 6, Mirpur Road, Pallabi, Dhaka 1216', 'https://www.google.com/maps/place/Mirpur,+Pallabi'),
(5, 'হারিয়ে যাওয়া মুক্তো', 'হারিয়ে যাওয়া মুক্তো.jpg', 'শিহাব আহমেদ তুহিন', 'ISLAMIC', 6, 'Public', 'Central Library', '200 E Monipur Rd, Dhaka 1216', 'https://www.google.com/maps/place/200+E+Monipur+Rd'),
(6, 'মুছত্বলাহুল হাদীছ', 'মুছত্বলাহুল হাদীছ.jpg', 'আব্দুল্লাহ বিন আব্দুর রাযযাক', 'ISLAMIC', 6, 'Personal', 'Hobby', 'Mirpur 10 Roundabout, Dhaka 1216', 'https://www.google.com/maps/place/Mirpur+10+Rounda'),
(7, 'Steve Jobs', 'Steve Jobs.jpg', 'Walter Isaacson', 'biographies', 4, 'Public', 'Central Library', '৪৯১, ২য় তলা, Dhaka, 1215', 'https://www.google.com/maps/place/Martyred+Intelle'),
(8, 'And There Was Light', 'Jon Meacham.jpg', 'Jon Meacham', 'biographies', 4, 'Public', 'Central Library', 'House-215, Banasree, 17 Road-6, Dhaka 1219', 'https://www.google.com/maps/place/Banasree+Public+'),
(10, 'Digital Logic Design', 'Digital Logic Design.jpg', 'Dr. Neelam Sharma', 'educational', 4, 'Public', 'Central Library\n', 'R9Q6+868, Mirpur Cantonment,, Dhaka 1216', ''),
(11, 'Words Can Change Your Brain', 'word.jpg', 'Andrew Newberg, Mark Robert Waldman', 'Psychologycal,Fantasy', 50, 'Public', 'National Library', 'National Library & Stationary, মিরপুর সড়ক, Dhaka', 'https://www.google.com/maps/place/National+Library'),
(12, 'Six Centuries of Great Poetry', 'six_centuries.jpg', 'Robert Penn Warren, Albert Erskine', 'Historical,Adventure,Romantics', 75, 'Public', 'National Library', 'National library, Setara convention hall, Dhaka', 'https://www.google.com/maps/place/Bangladesh+Natio'),
(13, 'The Famous Adventures of Jack', 'advanture.jpg', 'Berlie Doherty', 'Historical,Adventure,Romantics', 50, 'Public', 'National Library', 'Bangladesh National Library', 'https://www.google.com/maps/place/Bangladesh+Natio'),
(15, 'The Poison Tree', 'poison_tree.jpg', 'Bankim Chandra Chattopadhyay', 'Historical,Adventure', 20, 'Public', 'National Library', 'National Library Near Setara Convention Hall, Begum Rokeya Avenue, Dhaka', 'https://www.google.com/maps/place/GUB+Library');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `Ltype` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `returnN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `username`, `book_name`, `Ltype`, `Lname`, `status`, `returnN`) VALUES
(1, 'walid_71', 'মুছত্বলাহুল হাদীছ', 'Personal', 'Hobby', 'accepted', 'accepted'),
(2, 'walid_71', 'Steve Jobs', 'Public', 'Central Library', 'accepted', 'accepted'),
(3, 'toni_63', 'Feluda Shomogro 1', 'Public', 'Central Library', 'accepted', 'accepted'),
(4, 'toni_63', 'Sheikh Mujib', 'Personal', 'Hobby', 'accepted', 'accepted'),
(5, 'mehedi_64', 'Bomkesh', 'Personal', 'Hobby', 'accepted', ''),
(6, 'shahinur_57', 'Digital Logic Design', 'Public', 'Central Library', 'accepted', ''),
(8, 'walid_71', 'Lalshalu', 'Personal', 'Hobby', 'accepted', 'accepted'),
(15, 'toni_63', 'চোখের বালি', 'Public', 'Central Library', 'accepted', 'accepted'),
(16, 'walid_71', 'And There Was Light', 'Public', 'Central Library', 'accepted', 'accepted'),
(17, 'walid_71', 'Digital Logic Design', 'Public', 'Central Library\n', 'pending', 'accepted'),
(18, 'walid_71', 'হারিয়ে যাওয়া মুক্তো', 'Public', 'Central Library', 'accepted', ''),
(19, 'walid_71', 'Lalshalu', 'Personal', 'Hobby', 'accepted', ''),
(20, 'walid_71', 'মুছত্বলাহুল হাদীছ', 'Personal', 'Hobby', 'accepted', ''),
(21, 'toni_63', 'And There Was Light', 'Public', 'Central Library', 'accepted', 'accepted'),
(22, 'toni_63', 'মুছত্বলাহুল হাদীছ', 'Personal', 'Hobby', 'accepted', 'accepted'),
(23, 'toni_63', 'And There Was Light', 'Public', 'Central Library', 'pending', ''),
(24, 'toni_63', 'মুছত্বলাহুল হাদীছ', 'Personal', 'Hobby', 'pending', ''),
(25, 'walid_71gg', 'Steve Jobs', 'Public', 'Central Library', 'accepted', 'accepted'),
(26, 'walid_71', 'Life of Pi', 'Personal', 'Hobby', 'accepted', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(8) UNSIGNED NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `p_number` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` enum('m','f','o') DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `username`, `email`, `p_number`, `address`, `password`, `gender`, `image`) VALUES
(17, 'Walid Al Hassan', 'walid_71', 'walidmunsi@gmail.com', 1792103884, 'Dhaka', '1234', 'm', 'walid.jpg'),
(18, 'Tonima Islam', 'toni_63', 'tonimaislam214@gmail.com', 1576399544, 'Dhaka', '1234', 'f', 'tonima.jpg'),
(19, 'Shahinur Hossain', 'shahinur_57', 'shahinur3257@gmail.com', 1876457933, 'Dhaka', '1234', 'm', 'shahinur.jpg'),
(20, 'Mehedi', 'mehedi_64', 'mehedi64@gmail.com', 1776394518, 'Dhaka', '1234', 'm', 'mehedi.jpg'),
(26, 'Walid Al Hassan', 'walid_71gg', 'walidmunsi@gmail.com', 1792103884, 'Dhaka', '1234', 'm', 'CLASS_ROUTINE.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `registrationadmin`
--

CREATE TABLE `registrationadmin` (
  `id` int(8) UNSIGNED NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `p_number` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `Ltype` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` enum('m','f','o') DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrationadmin`
--

INSERT INTO `registrationadmin` (`id`, `fullname`, `username`, `email`, `p_number`, `address`, `Ltype`, `Lname`, `password`, `gender`, `image`) VALUES
(6, 'Tonima Islam', 'toni_63a', 'tonimaislam214@gmail.com', 1792103654, 'Dhaka', 'Personal', 'Hobby', '1234', 'f', 'tonima.jpg'),
(9, 'Walid Al Hassan', 'walid_71a', 'walidmunsi@gmail.com', 1792103884, 'Dhaka', 'Public', 'Central Library', '1234', 'm', 'IMG_20190608_011934-01.jpeg'),
(10, 'Shahinur Hossain', 'shahinur_57a', 'shahinur02042017@gmail.com', 1858755116, 'Dhaka', 'Public', 'National Library', '1234', 'm', 'IMG_20210911_130445.jpg'),
(11, 'Jannatul Mim', 'mim_53a', 'jannatulmim761@gmail.com', 1799975825, 'Dhaka', 'Personal', 'Passionate', '1234', 'f', 'mim.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationadmin`
--
ALTER TABLE `registrationadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registrationadmin`
--
ALTER TABLE `registrationadmin`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
