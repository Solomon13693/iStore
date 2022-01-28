-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 06:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `istore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(6, 'admin@istore.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(206) NOT NULL,
  `fullname` varchar(206) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(206) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `email`, `password`) VALUES
(5, 'Adeoye Solomon', 'adeoyesolomon2693@gmail.com', 'eec6bb9c23b621a69217507eeb3fd1c0'),
(6, 'Oluwatobiloba', 'adeoyesolomon13693@gmail.com', '362b0e8c02baef86d88ff0c16b44bf26');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(206) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `total_amout` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `firstname`, `lastname`, `state`, `city`, `customer_id`, `address`, `phone`, `total_amout`) VALUES
(27, 'Adeoye', 'Solomon', 'Lagos', 'adeoyesolomon2693@gmail.com', 5, 'Lagos Nigeria', '+2347066625389', 2244000),
(28, 'Adeoye', 'Solomon', 'Lagos', 'adeoyesolomon2693@gmail.com', 5, 'Lagos Nigeria', '+2347066625389', 2244000);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(206) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(206) NOT NULL,
  `image` varchar(30) NOT NULL,
  `category` varchar(32) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`, `category`, `created_at`) VALUES
(30, '13-inch-macbook-air-512gb', 869000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum magni quam vero minus tempore, enim repellendus, libero reprehenderit dicta natus quis unde dolorum in iusto voluptatem beatae ullam numquam a', 'mac3.png', 'mac', '2022-01-05 20:01:17'),
(31, 'iPhone 12 Pro Max 256GB', 835000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum magni quam vero minus tempore, enim repellendus, libero reprehenderit dicta natus quis unde dolorum in iusto voluptatem beatae ullam numquam a', 'iphone12_pro_max.png', 'iphone', '2022-01-05 20:01:11'),
(32, 'iPhone 13 mini 512GB', 950000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum magni quam vero minus tempore, enim repellendus, libero reprehenderit dicta natus quis unde dolorum in iusto voluptatem beatae ullam numquam a', 'phone3.png', 'iphone', '2022-01-05 20:01:08'),
(33, 'iPhone SE 256GB', 270000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum magni quam vero minus tempore, enim repellendus, libero reprehenderit dicta natus quis unde dolorum in iusto voluptatem beatae ullam numquam a', 'iphoneSE.png', 'iphone', '2022-01-05 20:01:03'),
(34, '10.2-inch iPad Wi-Fi + Cellular 128GB', 285000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum magni quam vero minus tempore, enim repellendus, libero reprehenderit dicta natus quis unde dolorum in iusto voluptatem beatae ullam numquam a', 'ipad1.png', 'ipad', '2022-01-05 20:00:55'),
(35, 'iPad Pro Wi-Fi 128GB | Apple M1 Chip', 569000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum magni quam vero minus tempore, enim repellendus, libero reprehenderit dicta natus quis unde dolorum in iusto voluptatem beatae ullam numquam a', 'ipad.png', 'ipad', '2022-01-05 20:00:53'),
(36, 'iPad mini 6th Gen Wi-Fi 256GB', 475000, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum magni quam vero minus tempore, enim repellendus, libero reprehenderit dicta natus quis unde dolorum in iusto voluptatem beatae ullam numquam a', 'ipadpro.png', 'ipad', '2022-01-05 20:00:50'),
(37, 'AirPods with Wireless Charging (3rd Generation)', 140000, 'Introducing the all-new AirPods. Featuring spatial audio that places sound all around you, Adaptive EQ that tunes music to your ears, and longer battery life. It’s all sweat and water resistant and delivers', 'airpod.png', 'airpod', '2022-01-05 20:00:47'),
(38, 'AirPods Max', 43000, 'AirPods Max reimagine over-ear headphones. An Apple-designed dynamic driver provides immersive high-fidelity audio. Every detail, from canopy to cushions, has been designed for an exceptional fit. Industry-', 'airpodmax.jpg', 'airpod', '2022-01-05 20:00:42'),
(39, 'AirPods with Charging Case', 100000, 'The new AirPods combine intelligent design with breakthrough technology and crystal-clear sound. Powered by the new Apple H1 headphone chip, AirPods now feature hands-free access to Siri using just your voi', 'airpod_with_charging.png', 'airpod', '2022-01-05 20:00:38'),
(40, 'Hera Braided Solo Loop Strap Compatible With Apple Watch Band 44mm', 15000, '        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam porro nihil, amet quas adipisci aperiam ex unde eveniet fuga, eligendi quia maiores rem nemo tenetur ut explicabo illo. Suscipit, vel! E', 'apple_watch4.png', 'apple_watch', '2022-01-05 20:00:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(206) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
