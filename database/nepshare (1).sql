-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 04:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `file_json` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `title`, `description`, `file_json`, `user_id`, `date_created`) VALUES
(3, 'Final test1', 'this is test', '[\"1663219080_BCA-4-2.pdf\"]', 5, '2022-09-15 11:03:33'),
(6, 'This My FILE', '&lt;p&gt;&lt;span style=&quot;font-family: Impact;&quot;&gt;HELLO EVERY ONE&lt;/span&gt;&lt;span style=&quot;font-family: Impact;&quot;&gt;﻿&lt;/span&gt;															&lt;/p&gt;', '[\"1663383540_LAB-1.docx\"]', 17, '2022-09-17 08:44:35'),
(7, 'Hola', '&lt;p&gt;&lt;span style=&quot;font-family: Impact;&quot;&gt;HOLA HOLA﻿&lt;/span&gt;															&lt;/p&gt;', '[\"1663385820_NM-Class-4-5.pdf\",\"1663385820_NM-Class-13-Gaussian-Integration.pdf\"]', 5, '2022-09-17 09:22:15'),
(8, 'test', '&lt;p&gt;&lt;span style=&quot;font-family: Impact;&quot;&gt;&lt;strike&gt;HOLA﻿&lt;/strike&gt;&lt;/span&gt;															&lt;/p&gt;', '[\"1663397460_Chapter-2-VB.Net-Basic.docx\",\"1663397520_BCA-4-2.pdf\",\"1663397520_File_sharing_Final (2).docx\"]', 18, '2022-09-17 12:37:12'),
(11, 'files2', '&lt;span style=&quot;font-family: Impact;&quot;&gt;Our final defense collection&amp;nbsp;&lt;/span&gt;', '[\"1663399260_BCA-4-2.pdf\",\"1663399260_File_sharing_Final.docx\",\"1663399260_File_sharing_Final (1).docx\",\"1663399260_Fayshell_-_All_Website_Copy.docx\",\"1663399260_jobminis-5-2-33.docx\"]', 20, '2022-09-17 13:07:22'),
(13, 'DEMO', '&lt;p&gt;&lt;span style=&quot;font-family: Impact;&quot;&gt;FILE SHARING TEST﻿&lt;/span&gt;															&lt;/p&gt;', '[\"1663430880_Chapter-2-VB.Net-Basic (2).docx\",\"1663430880_File_sharing_Final (1) (1).docx\",\"1663430880_Chapter-2-VB.Net-Basic.docx\",\"1663430880_Chapter-2-VB.Net-Basic (1).docx\",\"1663430880_File_sharing_Final (2).docx\",\"1663430880_BCA-4-2 (1).pdf\",\"1663430880_jobminis-5-2-33 (1).docx\"]', 6, '2022-09-17 21:54:00'),
(14, '', '															', '[\"1663468740_Chapter-2-VB.Net-Basic.docx\",\"1663468740_File_sharing_Final (1).docx\",\"1663468740_File_sharing_Final (2).docx\",\"1663468740_jobminis-5-2-33 (1).docx\",\"1663468740_BCA-4-2.pdf\"]', 23, '2022-09-18 08:25:01'),
(15, 'jjhjh', 'gkgkjhl', '[\"1663469640_Chapter-2-VB.Net-Basic.docx\"]', 5, '2022-09-18 08:39:35'),
(16, 'Demo', '&lt;span style=&quot;font-family: Impact;&quot;&gt;Final report&lt;/span&gt;', '[\"1663471980_Chapter-2-VB.Net-Basic.docx\",\"1663471980_Chapter-2-VB.Net-Basic (2).docx\",\"1663471980_Chapter-2-VB.Net-Basic (1).docx\",\"1663471980_File_sharing_Final (2).docx\",\"1663471980_File_sharing_Final (1) (1).docx\",\"1663471980_File_sharing_Final (1).docx\",\"1663471980_File_sharing_Final.docx\",\"1663471980_Fayshell_-_All_Website_Copy.docx\",\"1663471980_jobminis-5-2-33 (1).docx\",\"1663471980_jobminis-5-2-33.docx\",\"1663471980_BCA-4-2 (1).pdf\",\"1663471980_BCA-4-2.pdf\"]', 5, '2022-09-18 09:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Admin,2= users',
  `avatar` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `middlename`, `contact`, `address`, `email`, `password`, `type`, `avatar`, `date_created`) VALUES
(5, 'Raakesh', 'Chhetri', '', '+666', 'Pokhara', 'rakeshfinal@gmail.com', 'e3afed0047b08059d0fada10f400c1e5', 1, '1663227960_depositphotos_204614860-stock-illustration-abraham-lincoln-vector-caricature-illustration.jpg', '2022-09-15 10:50:22'),
(6, 'Santosh', 'Basnet', '', '+666', 'Pokhara', 'santoshfinal@gmail.com', '8f9bfe9d1345237cb3b2b205864da075', 2, '1663218360_107486325_1149710942094519_4935254025606070774_n.jpg', '2022-09-15 10:51:13'),
(7, 'Niraj', 'Bohara', '', '+666', 'Pokhara', 'nirajfinal@gmail.com', 'e3afed0047b08059d0fada10f400c1e5', 1, '1663219020_one-piece-monkey-d-luffy-hd-wallpaper-preview.jpg', '2022-09-15 11:02:32'),
(8, 'Prakash', 'Basnet', '', '+666', 'Pokhara', 'prakashfinal@gmail.com', '8f9bfe9d1345237cb3b2b205864da075', 2, '1663219800_download.jfif', '2022-09-15 11:15:36'),
(9, 'Raj', 'Poudel', '', '+666', 'Pokhara', 'rajfinal@gmail.com', '8f9bfe9d1345237cb3b2b205864da075', 2, '1663262280_36-369377_data-src-2000-x-2400-pixels.jpg', '2022-09-15 23:03:26'),
(13, 'Beedhan', 'Bhuwai', '', '+666', 'Birauta', 'beedhanfinal@gmail.com', 'e3afed0047b08059d0fada10f400c1e5', 1, '1663332600_SkinCondition_Breakouts_120x1202x.webp', '2022-09-16 18:35:45'),
(14, 'Diwas', 'Karki', '', '+666', 'Phulbari', 'deewashfinal@gmail.com', '8f9bfe9d1345237cb3b2b205864da075', 2, '1663332720_Golde_OriginalTurmericLatteBlend_Swipe_1420x1430_96136e2e-001d-4e6a-a0e0-84146bfdfaad_700x.webp', '2022-09-16 18:37:45'),
(15, 'Subash', 'Acharaya', '', '+666', 'Phulbari', 'subashfinal@gmail.com', '8f9bfe9d1345237cb3b2b205864da075', 2, '1663400220_development-men.gif', '2022-09-16 18:39:05'),
(17, 'Sudan', 'Bhandari', '', '+666', 'Bus Stop', 'sudanfinal@gmail.com', '8f9bfe9d1345237cb3b2b205864da075', 2, '', '2022-09-17 08:43:19'),
(18, 'Bishal', 'Tripathi', 'DC', '8888', 'Hemja', 'bishalfinal@gmail.com', '8f9bfe9d1345237cb3b2b205864da075', 2, '1663397400_coronavirusextra-original.webp', '2022-09-17 12:35:01'),
(19, 'Niraj', 'Bohara', '', '9866011016', 'Rambazzar', 'nirajbohara10@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, '', '2022-09-17 12:45:38'),
(20, 'santosh', 'Baniya', '', '9806633070', 'New road', 'santos.baniya77@gmail.com', '587c57365b54e8283fd6b1ac24acf29d', 2, '', '2022-09-17 13:03:15'),
(21, 'Ram', 'Ffsdf', '', '34234', 'Pokhara', 'adasd@gmail.com', '4641999a7679fcaef2df0e26d11e3c72', 2, '', '2022-09-17 14:52:17'),
(22, 'santosh', 'magar', '', '12344', 'pokharaa', 'santohg@gmail.com', '587c57365b54e8283fd6b1ac24acf29d', 1, '', '2022-09-17 15:02:06'),
(23, 'bishal', 'Baniya', '', '1234567890', 'pokhra', 'bishal@gmail.com', '1adb27fabdfee91e29a94e3fb02e08bc', 1, '', '2022-09-18 07:48:41'),
(24, 'Sunil', 'Pandey', '', '9806633070', 'pokhara', 'sunil@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 2, '1663471680_pexels-photo-9017000.jpeg', '2022-09-18 09:12:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
