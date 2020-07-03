-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 04:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `nim`, `email`) VALUES
(5, 'Muhammad Firdaus Zulkarnain', '1808561011', 'Zulkarnain03@gmail.com'),
(9, 'Hairul Lana', '1808561007', 'HairulLana@gmail.com'),
(19, 'I Made Ari Widiarsana', '1808561010', 'Ari@gmail.com'),
(20, 'Farin', '1808561008', 'farin@gmail.com'),
(21, 'Safira', '1808561001', 'safira@gmail.com'),
(22, 'marissa audina', '1808561020', 'marissa@gmail.com'),
(23, 'Dewi Ambalika', '1808561002', 'dewi@gmail.com'),
(24, 'Nadya', '1808561004', 'nadya@gmail.com'),
(25, 'Devan', '1808561021', 'Devan@gmail.com'),
(26, 'Derwi', '1808561013', 'derwi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'firdaus', '$2y$10$Zps0vUmC6kfOBbnXavTQKei6k9OtTdQBYj/4eOxs54kxWObD74Vga'),
(3, 'zul', '$2y$10$75U/BzZE6BW41ang/yD9ietBSEQv9sYRJnfkDByepY05cZfsVfafy'),
(5, 'kar', '$2y$10$dfCc3lHTLbcSttQPPnI8xOuesjvnqhJ6wH8/Cv.Ixy2N48WhrU/4K'),
(6, 'in', '$2y$10$0yLfeaNupKbnZCkhlP86TekSH4rwexqIhZj4UGyOAJVjmbNEEkUjG'),
(7, 'virdo', '$2y$10$zMX51.w2N5EwFAbCuPnveOPzIIIkpy9GZSl7/WAAFM4ewqU/PnTNa'),
(8, 'firdo', '$2y$10$l1MBOZktmfg1KrrB8XFoCO7fYOTqRx4qoomGp6pZR5Ec0wKZFEHsG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
