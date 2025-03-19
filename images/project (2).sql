-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2025 at 10:21 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `User_image` varchar(400) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmPassword` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `User_image`, `username`, `email`, `password`, `confirmPassword`, `phone`, `reset_token`, `reset_token_expires_at`) VALUES
(1, 'images/Screenshot (3).png', 'Anjali', 'a@gmail.com', '$2y$10$dXbBAdnTW0ahnYF3Wtd44O3rq/QSSJ9M9oIzmza.Gxm.WY6FyNNOq', '$2y$10$dcDw/D0RDa72WnpnCLXF0eIWiAJnhBHudaDdQLi5lxj', '7575062903', NULL, NULL),
(2, 'images/Screenshot (3).png', 'Yash', 'y@mail.com', '$2y$10$TAW9.fDhQ8QGbk9eDrK1h.0d.9IRFBhpi4YzzmcG0BMPLOueSli2e', '$2y$10$wZtV43jIpzG1iHbJVq1F0u7DgXsYwnm4CkhkCJWJZAD', '9874563210', NULL, NULL),
(3, 'images/Screenshot (2).png', 'KALP', 'abc@mail.com', '$2y$10$ESov3AakgrZo7.awc6LIL.PRwSsjdJSsfL39o.kW.tYuZ/6ScLTbe', '$2y$10$/pnOl7SN3sFMfWN.GDQy7upL4Ng0ny7FDjQdXe/ru.Y', '8523164790', NULL, NULL),
(4, 'images/Screenshot (3).png', 'ss', 'ss@mail.com', '$2y$10$4EOr1S0hk/kw937709Hw7./wPpzu9n7v9jxs5S.T7abbbQgdhNT3S', '$2y$10$AT33ST4S.LagYabr2fVumeC/d4aFp8n8ArExzTIiX4U', '8521346790', NULL, NULL),
(5, 'images/Screenshot (8).png', 'Kalp', 'ff@mail.com', '$2y$10$xYwqTAUyHrlZh2AHPsTysOmwygD1VM2R1k95AwR9OqJyF1TqGdeN.', '$2y$10$alPKCS.Rvu8CsXfhzktvQui0zGdFGWRRajRLxcT1Q0D', '987456321', NULL, NULL),
(6, 'images/Screenshot (10).png', 'Kalp', 'k@mail.com', '$2y$10$40/VGjcEB4LHCdYe.z4bi.er2sGMrXg0LQlUYFfakcvR5QoKP405i', '$2y$10$9PY9KCyUzVonGyVVxV0owuHxJq4pLD729b91U6oylQ6', '852134679', NULL, NULL),
(7, 'images/Screenshot (7).png', 'uuu', 'u@mail.com', '$2y$10$HBHlanUB6bb3eptO9i.2du3ZpEzIus00.xxkEBz9LvxlxejXH7gqG', '$2y$10$llIzm30UbK6PsKNy55TyfuRaxRD5EcYlCDfNYN2HCP8', '9632587410', NULL, NULL),
(8, 'images/Screenshot (47).png', 'Yash shah', 'ya@mail.com', '$2y$10$is47ddOIbkfypUh3lxg23OLzkILhAyJJw2X21UiKHbqra2ih6m6FO', '$2y$10$ZmdI4KuE1gMoGdNhixGgA.Wz7za.ab5bc3NgqobXTAp', '8511749256', NULL, NULL),
(9, 'images/Screenshot (3).png', 'qqqq', 'qqq@mail.com', '$2y$10$CboXivbK0gvIaamhYG5QO.Nt.rryd1VVB4cXjO.bPb2nT4fb2mW3q', '$2y$10$/DEc2h./ZZKhEezEU2O31eIW0ykGu0zWLEeRM/9XPg.', '9874563210', NULL, NULL),
(10, 'images/Screenshot (8).png', 'vvv', 'vvvv@mail.com', '$2y$10$MioOGwP6OlkfGox2jVDWDeFRuAL2bi55716aqveg4lvKZobY0nrFm', '$2y$10$9yP3sRsD8shE4i98QvUI6OwhFHtDB3G3TTDVa/khUYw', '7575062903', NULL, NULL),
(11, 'images/Screenshot (10).png', 'test', 'test@mail.com', '$2y$10$k2rvD1hhnTxOAxpxTpPbjedif.4qYs7QX87PFHlRkc5eY595aY/nu', '$2y$10$/eOENe9YsTnFAvU5FM5qlunNnofy2KDuqP.OZdor6nr', '9874563210', NULL, NULL),
(12, 'images/Screenshot (2).png', 'test4', 'test4@mail.com', '$2y$10$Ld5v/Oba8ehkBHjtEcidFuzr1lPX/HKmAXLJgigSc8d7nWDTteorO', '$2y$10$ITuN1JTAbstILd1vlkPore2ZgM5eQ5N3Iq35v1p83bs', '7896541230', NULL, NULL),
(13, 'images/Screenshot (8).png', 'test5', 'test5@mail.com', '$2y$10$Gr7w80BoZ2AEj.J.Fsv4guIMEnJAWhLhtV7Ug5VGRpwmDwMD0ZSBC', '$2y$10$/AIXejd9i.rgl1AuzhegC.ZvPUChb4XZ9.0AmH4.jLh', '8511749256', NULL, NULL),
(14, 'images/windows-11-dark-mode-blue-stock-official-1920x1080-5630.jpg', 'YASH SHAH', 'tradingyash7575@gmail.com', '$2y$10$ydtvs6AdwRVNVqlb7JtKu.Ue2o0kqUMr0AHAJuWMTdkdeDqhrqiRu', '$2y$10$6GwuqyTY1E6IxQMHO9W6OuvY8FzOw3HP9PMQvLgXPqw', '9874563210', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
