-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 03:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chalets_booking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `item_type` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `date`, `item_id`, `item_type`, `state`) VALUES
(5, 0, '2024-03-09', 1, 0, 1),
(6, 0, '2024-03-09', 1, 0, 1),
(7, 0, '2024-03-09', 1, 0, 1),
(8, 0, '2024-03-09', 2, 0, 1),
(9, 0, '2024-03-09', 2, 0, 1),
(10, 0, '2024-03-09', 1, 0, 1),
(11, 0, '2024-03-09', 2, 0, 1),
(12, 0, '2024-03-09', 2, 0, 1),
(13, 0, '2024-03-09', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chalets`
--

CREATE TABLE `chalets` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `unit_area` varchar(50) DEFAULT NULL,
  `accommodation_type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chalets`
--

INSERT INTO `chalets` (`id`, `image_url`, `title`, `description`, `price`, `location`, `unit_area`, `accommodation_type`, `created_at`) VALUES
(1, 'images/uploads/ch3.webp', 'شاليه بهز عباس', 'لا يوجد وصف إضافي', 20000.00, 'ذمار', '4*4', '1', '2024-03-02 15:03:33'),
(2, 'images/uploads/ch2.webp', 'شاليه بهز عباس 2', ' يوجد وصف إضافي', 100.00, 'ذمار', '4*4', '1', '2024-03-02 15:11:23'),
(3, 'images/uploads/ch3.jpeg', 'شاليه مشتاق', ' يوجد وصف إضافي', 500.00, 'عتمة', '5*5', 'عائلي', '2024-03-02 18:18:37'),
(4, 'images/uploads/bg3.jpg', 'شاليه 1', 'شاليه رقم 1', 200.00, 'ذمار', '5*5', 'عائلي', '2024-03-02 20:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `features` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`id`, `title`, `description`, `image_url`, `location`, `area`, `features`, `created_at`) VALUES
(1, 'مزرعة', 'نمقىؤبضنتصثبىؤ', 'images/uploads/farm2.jpg', 'عتمة', '30*30', 'مضثنتىي\r\nيضنيتؤلاتن', '2024-03-02 18:33:45'),
(2, 'اسطبل', 'مزرعة بجلسة خارجية واسطبل خيل ', 'images/uploads/logo.png', 'عتمة', '30*30', 'الوجهة المثالية لعشاق التجارب الجديدة , اسطبل وجلسات مميزة للأستمتاع بالطبيعة وشغف المغامرة \r\nمنتجع واسطبل بالعمارية شمال الرياض وبمساحة 3500متر بجلسات خارجية على مرتفع باطلالات جميلة على مسطحات خضراء ومشاهدة الخيل وكما يمكنك الاستمتاع بركوب الخيل, وباقي الجلسات الخارجية متعددة غرفتين نوم طاولة طعام 12 شخص مطبخين اربع دورات مياه مجلسيين رسمية مدخل خاص للسيارات تنوية ركوب الخيل برسوم خاص.\r\n', '2024-03-02 18:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `method_id` int(11) NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `account_number` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`method_id`, `method_name`, `account_number`) VALUES
(1, 'بنك الراججي', '1234-5678-9012-3456'),
(2, 'البنك الأهلي ', '4321-5678-9012-3456'),
(3, ' بنك الأنماء', '234-987-5689');

-- --------------------------------------------------------

--
-- Table structure for table `resorts`
--

CREATE TABLE `resorts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resorts`
--

INSERT INTO `resorts` (`id`, `title`, `location`, `description`, `image_url`, `date_added`, `created_at`) VALUES
(1, 'منتجعات درة نجد', 'الرياض المملكة العربية السعودية', 'يعتبر Dorat Najd Resort منتجع فندقي فاخر يتكون من 88 فيلا مفروشة ومجهزة بوسائل راحة عصرية ومواقف خاصة مظللة للسيارات، كما يتميز بمطعم عالمي عصري ومقهى خارجي تحيط به المناظر الطبيعية الخضراء، فيما تم تزيين المناطق المائية بالنوافير، وتوجد مساحة خارجية كبيرة تضم أشجار نخيل وأشجار أخرى، مما يوفر واحة حقيقية في قلب الصحراء.\r\n\r\n', 'images/uploads/blog-1.jpg', NULL, '2024-03-02 19:14:04'),
(2, 'منتجعات ارجان بارك', 'الرياض المملكة العربية السعودية', 'تشمل جميع الوحدات في المنتجع آلة تحضير القهوة، كما يتوفر حمّام خاص مزود بدش ولوازم استحمام مجاناً، فيما توفر أيضاً بعض الوحدات في \"Arjan Park Resorts\" إطلالة على المسبح للضيوف، بينما تحتوي جميع غرف الضيوف المتوفرة في مكان الإقامة على تلفزيون بشاشة مسطحة ونعال.', 'images/uploads/blog-2.jpg', '0000-00-00', '2024-03-02 19:20:43'),
(3, 'منتجعات قوت', 'شارع الصحابة , المؤنسية, 11541 الرياض', 'تقع منتجعات قوت في الرياض، وتتميز بأماكن إقامة فريدة فاخرة. كما تتميز جميع الوحدات بمسبح خاص وخدمة الواي فاي مجانًا في جميع مناطق مكان الإقامة. ويقع مركز غرناطة التجاري على بعد 15 دقائق بالسيارة. تتوفر خدمة نقل إلى المطار عند الطلب.', 'images/uploads/blog-3.jpg', '0000-00-00', '2024-03-02 19:22:25'),
(4, 'منتجع الميثالي', 'الرياض المملكة العربية السعودية', 'منتجع استحمام حصري', 'images/uploads/blog-1.jpg', '2024-03-09', '2024-03-09 01:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_path` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `usertype` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_path`, `phone`, `usertype`) VALUES
(0, 'Bahz Abbas', 'bahz@gmail.com', '$2y$10$2Sb6PZan5taPPsfdwBft3.rwYITS/YEUgalXRGulrDgpypk00.Q86', NULL, '017162150', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chalets`
--
ALTER TABLE `chalets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resorts`
--
ALTER TABLE `resorts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chalets`
--
ALTER TABLE `chalets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resorts`
--
ALTER TABLE `resorts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
