-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 28, 2018 at 03:58 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Tatemoto_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipee_table`
--

CREATE TABLE `recipee_table` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `food` text COLLATE utf8_unicode_ci NOT NULL,
  `mail` text COLLATE utf8_unicode_ci NOT NULL,
  `point` text COLLATE utf8_unicode_ci NOT NULL,
  `upfile` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recipee_table`
--

INSERT INTO `recipee_table` (`id`, `name`, `food`, `mail`, `point`, `upfile`, `comment`, `indate`) VALUES
(1, 'タテモトサトコ', '', 'stkttmt@gmail.com', '2', 'スクリーンショット 2018-10-06 1.10.39.png', '', '2018-10-11 20:50:29'),
(2, 'タテモトサトコ', 'オムライス', 'stkttmt@gmail.com', '2', 'スクリーンショット 2018-10-06 1.10.41.png', 'asssssaaaaaaaaa', '2018-10-11 20:50:45'),
(3, '立本聡子', 'オムライス', 'stkttmt@gmail.com', '4', 'スクリーンショット 2018-10-06 1.10.39.png', 'sddddddddddddddd', '2018-10-11 20:51:35'),
(4, 'タテモトサトコ', 'オムライス', 'stkttmt@gmail.com', '3', 'スクリーンショット 2018-10-06 1.42.08.png', 'おおおおおおおおおおお', '2018-10-11 20:57:12'),
(5, 'sdf', 'あsdf', 'あsdf', '2', 'スクリーンショット 2018-10-06 1.42.08.png', 'あsっっっっっっっっっっd', '2018-10-11 21:37:27'),
(6, 'タテモトサトコ', 'オムライス', 'stkttmt@gmail.com', '3', 'スクリーンショット 2018-10-06 1.10.41.png', 'っっっっっs', '2018-10-11 21:43:12'),
(7, 'ds', 'sd', 'sd', '3', 'スクリーンショット 2018-10-06 1.10.41.png', 'ds', '2018-10-11 21:45:58'),
(8, ':;', '', '', '2', '', '', '2018-10-13 11:04:32'),
(9, 'タテモトサトコ', '', 'stkttmt@gmail.com', '2', '', '', '2018-10-14 13:34:05'),
(10, '立本聡子', '', '', '3', '', '', '2018-10-14 13:47:03'),
(11, 'タテモトサトコ', '', 'stkttmt@gmail.com', '2', 'スクリーンショット 2018-09-26 23.56.21.png', '', '2018-10-14 15:33:00'),
(12, '', '', '', '4', '', '', '2018-10-15 22:40:56'),
(13, 'タテモトサトコ', '', 'stkttmt@gmail.com', '3', '', '', '2018-10-15 22:41:08'),
(14, 'タテモトサトコ', '', 'stkttmt@gmail.com', '2', '', '', '2018-10-15 22:56:54'),
(15, '', '', '', '2', '', '', '2018-10-16 08:48:54'),
(16, 'タテモトサトコ', '', 'stkttmt@gmail.com', '3', '', '', '2018-10-16 22:00:21'),
(17, 'タテモトサトコ', '', 'stkttmt@gmail.com', '4', '', '', '2018-10-16 22:00:32'),
(18, 'タテモトサトコ', '', 'stkttmt@gmail.com', '3', '', '', '2018-10-16 22:28:10'),
(19, 'タテモトサトコ', 'オムライス', 'stkttmt@gmail.com', '3', '', '', '2018-10-16 22:35:58'),
(20, 'タテモトサトコ', '', 'stkttmt@gmail.com', '3', '', '', '2018-10-22 21:36:37'),
(21, 'タテモトサトコ', '', 'stkttmt@gmail.com', '3', '', '', '2018-10-22 21:44:23'),
(22, 'タテモトサトコ', 'オムライス', 'stkttmt@gmail.com', '3', '', '', '2018-10-29 00:54:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipee_table`
--
ALTER TABLE `recipee_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipee_table`
--
ALTER TABLE `recipee_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/*
  ログインIDを管理するテーブル
*/
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `crt_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flg` int(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

/*
  ユーザーIDとレシピIDを紐付けるテーブル
*/
CREATE TABLE `tb_recipe_relation` (
  `recipe_relation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `crt_date` datetime NOT NULL DEFAULT current_timestamp,
  `update_date` datetime NOT NULL DEFAULT current_timestamp,
  `del_flg` int(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 0
)
ALTER TABLE `tb_recipe_relation`
  ADD PRIMARY KEY (`recipe_relation_id`);

ALTER TABLE `tb_recipe_relation`
  MODIFY `recipe_relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;