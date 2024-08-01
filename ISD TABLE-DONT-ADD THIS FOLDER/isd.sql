-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 07:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isd`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Id`, `title`, `content`, `image`, `date`, `UserId`) VALUES
(4, 'jeita', 'Lebanon\'s spectacular Jeita Grotto makes an exciting day trip from Beirut. Once considered as a finalist for the Seven Natural Wonders of the World, this dramatic cave is divided into two levels: a lower grotto and an upper grotto, which contains the White Chamber, home to the world\'s largest stalactit', 'jeita.png', '2024-07-13', 0),
(31, 'Qadisha', 'The Qadisha valley is one of the most important early Christian monastic settlements in the world. Its monasteries, many of which are of a great age, stand in dramatic positions in a rugged landscape. Nearby are the remains of the great forest of cedars of Lebanon', 'qadisha.png', '2024-07-31', 0),
(32, 'sa', 'aad', 'qadisha.png', '2024-07-31', 0),
(33, '1', '2', 'beirut.png', '2024-07-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `recipient_id`, `message`, `created_at`) VALUES
(112, 36, 37, 'hii', '2024-07-31 07:41:05'),
(114, 37, 36, 'byy', '2024-07-31 07:47:36'),
(115, 37, 29, 'ehfi', '2024-07-31 07:55:13'),
(116, 37, 36, 'hii', '2024-07-31 07:57:06'),
(117, 36, 37, 'byy', '2024-07-31 07:57:15'),
(118, 37, 36, '3efr', '2024-07-31 07:59:07'),
(119, 36, 37, 'oju', '2024-07-31 08:03:33'),
(120, 29, 37, 'hii', '2024-07-31 08:16:01'),
(121, 29, 37, 'hii', '2024-07-31 08:16:59'),
(122, 29, 37, 'hii', '2024-07-31 08:25:02'),
(123, 29, 37, 'hii', '2024-07-31 08:27:22'),
(124, 37, 36, 'hii', '2024-07-31 08:29:22'),
(125, 37, 36, 'ligo', '2024-07-31 08:30:52'),
(126, 37, 36, 'hii', '2024-07-31 08:36:26'),
(127, 37, 36, 'huu', '2024-07-31 16:41:30'),
(128, 37, 29, 'lki', '2024-07-31 16:41:42'),
(129, 37, 36, 'd', '2024-07-31 16:42:43'),
(130, 37, 36, 'hii', '2024-07-31 16:53:01'),
(131, 37, 36, 'hii', '2024-07-31 16:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ReservationNb` int(11) NOT NULL,
  `TourId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `OrderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ReservationNb`, `TourId`, `UserId`, `OrderDate`) VALUES
(1, 1, 29, '2024-07-29'),
(2, 2, 29, '2024-07-29'),
(3, 2, 29, '2024-07-29'),
(4, 11, 29, '2024-07-30'),
(5, 11, 36, '2024-07-31'),
(6, 1, 36, '2024-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `trail`
--

CREATE TABLE `trail` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `CatId` int(11) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `PageUrl` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Sport` varchar(50) NOT NULL,
  `Difficulty` int(11) NOT NULL,
  `Discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `trail`
--

INSERT INTO `trail` (`ID`, `Name`, `Price`, `CatId`, `Image`, `PageUrl`, `Location`, `Sport`, `Difficulty`, `Discription`) VALUES
(1, 'jbeil', 50, 1, 'jbeil.png', 'trailinfo.php', 'kesrwan', 'Hikiing', 3, 'Abundant in natural beauty and scenic landscapes, the district of Jbeil is a dream come true for outdoor adventure seekers. The region boasts wonderful trails through verdant forests, offering visitors a chance to admire the wonders of nature'),
(2, 'Sawfar', 60, 1, 'sawfar.png', 'trailinfo.php', 'Mount lebanon', 'Biking', 3, 'In 1890, the Sawfar Municipality was founded, led by the well-known Beirutian families of Daouk, Beyham, Salam, Sabargh, Trad, Sursock, and Nakkache. The French Embassy in Lebanon has its summer headquarters in this hamlet. Nestled in the verdant northern Sawfar,'),
(3, 'Sunnine Mount', 80, 1, 'sunnine.png', 'trailinfo.php', 'Mount lebanon', 'Hiking', 5, 'Mount Sannine, which is naturally formed with a limestone base, is the wellspring of numerous mountain springs. According to visitors and explorers, it takes approximately 3 hours to reach the top of the mountain in the summer. Hikers begin their journey from the spring ...'),
(5, 'Qadisha', 50, 1, 'qadisha.png', 'trailinfo.php', 'North lebanon', 'Hiking', 4, 'he beautiful and peaceful Qadisha Valley and its surroundings are best visited in summer (May through September) and winter (December through April). In summer, you can easily enjoy yourself there for a few days, exploring the valley, the quiet mountain village of Bcharre and the nearby old cedar forest.'),
(11, 'Bcharre - Qadisha Valley & Cedars Forest ', 100, 2, 'cedars.png', 'trailinfo.php', 'lebanon', 'running biking hiking', 4, 'Escape the bustle of the capital and explore some of Lebanon’s most scenic landscapes during this full-day, small-group excursion from Beirut. Hike through a cedar forest, learn about the poet Khalil Gibran at his namesake museum, and visit the stunning monastery of Deir Mar Antonio. Admission tickets and door-to-door hotel transfers in an air-conditioned vehicle are included.');

-- --------------------------------------------------------

--
-- Table structure for table `trialcategory`
--

CREATE TABLE `trialcategory` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `trialcategory`
--

INSERT INTO `trialcategory` (`ID`, `Name`) VALUES
(1, 'public'),
(2, 'tourism');

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `Id` int(11) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`Id`, `Role`) VALUES
(1, 'Administrator'),
(2, 'Public User'),
(3, 'Advisor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `Salt` varchar(3) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `VerificationToken` varchar(64) NOT NULL,
  `Verified` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`, `Salt`, `Image`, `RoleId`, `VerificationToken`, `Verified`) VALUES
(29, 'ali zaiter', 'alizaiterr777@gmail.com', 'b9ea03218d417603a94031219476d6091a0b5e57d31caeed69e6b7f89884db1b', '6c3', 'uploads/sunnine.png', 1, '776854f9c4404bb4956ff46e4fb57038dc04e961a5a585b3da1c09f15cd7270c', 1),
(36, 'ff', 'alizaiterr777@gmail.com', '24bc2c01caea6815a008b0b7b1158f3e39491f02423d94463bfbd561b5bc05a2', '12c', 'uploads/jeita.png', 2, 'faf8dcd138a177219d62517a01ca47c46f9b31d31b5cfe6a6e99daac7d962ca1', 1),
(37, 'nour', 'alizaiterr777@gmail.com', '011ffb6b1099a9f3c20bf2d78a570ae6e489c76a7d25a3b234e237762632f8dd', 'fd5', '', 3, 'e06a5f2786edfc6f8de188adf98673304c8799b911d373dca0a548aaddb6cf70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `user-id` (`UserId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `recipient_id` (`recipient_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationNb`),
  ADD KEY `TrailId` (`TourId`,`UserId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `trail`
--
ALTER TABLE `trail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CatId` (`CatId`);

--
-- Indexes for table `trialcategory`
--
ALTER TABLE `trialcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `RoleId` (`RoleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationNb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trail`
--
ALTER TABLE `trail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `trialcategory`
--
ALTER TABLE `trialcategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`Id`) ON DELETE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`TourId`) REFERENCES `trail` (`id`);

--
-- Constraints for table `trail`
--
ALTER TABLE `trail`
  ADD CONSTRAINT `trail_ibfk_1` FOREIGN KEY (`CatId`) REFERENCES `trialcategory` (`ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`RoleId`) REFERENCES `userrole` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
