-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 06:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `repass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `user`, `email`, `pass`, `repass`) VALUES
(1, 'Nayana', 'admin', ' nayana@gmail.com', 'admin', 'admin'),
(6, 'Danny', 'adminadmin', 'admin@gmail.com', '123', '123'),
(7, 'Kevin', 'kevi', 'kevi@gmail.com', '456', '456'),
(9, 'Jennie', 'yjennnn', '', '', ''),
(10, 'Alina Lama', 'adminali', 'alina@gmail.com', 'ali', 'ali');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `title`, `author`, `price`, `image_name`, `quantity`) VALUES
(38, 'KING OF WRATH', 'by Ana Huang', '950.00', 'Book_Category_69.jfif', 1),
(39, 'SHATTER ME', 'by Tahereh Mafi', '700.00', 'Book_Category_636.jfif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image_name` varchar(100) DEFAULT NULL,
  `featured` varchar(10) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(5, 'Fiction', 'Book_Category_781.jfif', 'No', 'No'),
(6, 'Non-Fiction', 'Book_Category_700.jpg', 'Yes', 'Yes'),
(7, 'Best Sellers', 'Book_Category_969.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `repass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user`, `email`, `pass`, `repass`) VALUES
(1, 'ramskyyy', 'skyram@gmail.com', '123', '123'),
(2, 'sirishm', 'sirim@gmail.com', 'asdf', 'asdf'),
(8, 'krishaaa', 'krisha@gmail.com', 'kmanan', 'kmanan'),
(9, 'amyysky', 'amyyskyy@gmail.com', 'amy', 'amy'),
(10, 'jennjenn', 'jenzz@gmail.com', 'jklop', 'jklop'),
(11, 'Erinaa', 'erina@gmail.com', 'erii7', 'erii7');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `contact`, `email`, `message`) VALUES
('Siri', '9863254120', 'sirim@gmail.com', 'Hello This is BookTown!'),
('Rishika', '9845213620', 'rishika@gmail.com', 'So happy and satisfied with the purchase from The BookTown! Definitely will shop more.'),
('JennJenn', '9863254120', 'jenzz@gmail.com', 'Loved the books and the experience! Thank You The BookTown!'),
('Erina', '9845213620', 'erina@gmail.com', 'Hello, This is BookTown!');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `fullname`, `contact`, `email`, `address`) VALUES
(4, 'Jenny Lama', '9841759640', 'jenzz@gmail.com', 'Thamel'),
(5, 'Amy Shakya', '9845632150', 'amyyskyy@gmail.com', 'Pulchowk'),
(6, 'Sirish Shahi', '9841556688', 'sirim@gmail.com', 'Lainchaur'),
(7, 'Erina', '9845216320', 'erina@gmail.com', 'Thamel');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `featured` varchar(10) DEFAULT NULL,
  `active` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `author`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(31, 'IT ENDS WITH US', 'by Colleen Hoover', '500.00', 'Book_Category_102.jfif', 6, 'Yes', 'Yes'),
(36, 'KING OF WRATH', 'by Ana Huang', '950.00', 'Book_Category_69.jfif', 6, 'Yes', 'Yes'),
(37, 'CIRCE', 'by Madeline Miller', '350.00', 'Book_Category_548.jfif', 6, 'Yes', 'Yes'),
(38, 'A Season in Heaven', 'by David Tomory', '800.00', 'Book_Category_407.jfif', 6, 'Yes', 'Yes'),
(39, 'THE CITY SON', 'by Samrat Upadhyay', '350.00', 'Book_Category_783.jfif', 6, 'Yes', 'Yes'),
(40, 'IKIGAI', 'by Hector Garcia', '750.00', 'Book_Category_607.jpeg', 6, 'Yes', 'Yes'),
(41, 'VERITY', 'by Colleen Hoover', '800.00', 'Book_Category_857.jfif', 6, 'Yes', 'Yes'),
(42, 'HOME BODY', 'by Rupi Kaur', '600.00', 'Book_Category_190.jfif', 6, 'Yes', 'Yes'),
(43, 'LAND WHERE I FLEE', 'by Prajwal Parajuly', '750.00', 'Book_Category_619.jpg', 6, 'Yes', 'Yes'),
(44, 'ATOMIC HABITS', 'by James Clear', '850.00', 'Book_Category_844.jfif', 6, 'Yes', 'Yes'),
(45, 'KARNALI BLUES', 'by Buddhisagar', '450.00', 'Book_Category_897.jfif', 6, 'Yes', 'Yes'),
(47, 'SHATTER ME', 'by Tahereh Mafi', '700.00', 'Book_Category_636.jfif', 6, 'Yes', 'Yes'),
(48, 'ONE LAST STOP', 'by Casey McQuiston', '500.00', 'Book_Category_358.jfif', 6, 'Yes', 'Yes'),
(49, 'The Catcher in the Rye', 'by JD Salinger', '500.00', 'Book_Category_428.jpg', 6, 'Yes', 'Yes'),
(50, 'HARRY POTTER', 'by JK Rowling', '900.00', 'Book_Category_679.jfif', 6, 'Yes', 'Yes'),
(51, 'PRIDE PREJUDICE', 'by Jane Austen', '750.00', 'Book_Category_310.jfif', 6, 'Yes', 'Yes'),
(52, 'TWISTED GAMES ', 'by Ana Huang', '500.00', 'Book_Category_36.jfif', 6, 'Yes', 'Yes'),
(53, 'TWISTED HATE', 'by Ana Huang', '500.00', 'Book_Category_428.jfif', 6, 'Yes', 'Yes'),
(54, 'TWISTED LIES', 'by Ana Huang', '500.00', 'Book_Category_847.jpg', 6, 'Yes', 'Yes'),
(55, 'TWISTED LOVE', 'by Ana Huang', '500.00', 'Book_Category_78.jfif', 6, 'Yes', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
