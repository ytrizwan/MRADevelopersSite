-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 09:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mradb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mra_post`
--

CREATE TABLE `mra_post` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `img` text NOT NULL,
  `imgName` text NOT NULL,
  `cat` varchar(20) NOT NULL,
  `etc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mra_post`
--

INSERT INTO `mra_post` (`id`, `date`, `title`, `details`, `img`, `imgName`, `cat`, `etc`) VALUES
(1, '2019-02-25', 'Testing Android Post 01', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post01.jpg', 'This is Part Of Images', 'a', ''),
(2, '2019-02-25', 'Testing Tech Post 01', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post02.jpg', 'This is Part Of Images', 't', ''),
(3, '2019-02-25', 'Testing Java Post 01', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post03.jpg', 'This is Part Of Images', 'j', ''),
(4, '2019-02-25', 'Testing Java Post 02', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post04.jpg', 'This is Part Of Images', 'j', ''),
(5, '2019-02-25', 'Testing Java Post 03', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post05.jpg', 'This is Part Of Images', 'j', ''),
(6, '2019-02-25', 'Testing Tech Post 02', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post06.jpg', 'This is Part Of Images', 't', ''),
(7, '2019-02-25', 'Testing Tech Post 03', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post07.jpg', 'This is Part Of Images', 't', ''),
(8, '2019-02-25', 'Testing PHP Post 01', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post01.jpg', 'This is Part Of Images', 'p', ''),
(9, '2019-02-25', 'Testing PHP Post 02', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post02.jpg', 'This is Part Of Images', 'p', ''),
(10, '2019-02-25', 'Testing Tech Post 04', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post03.jpg', 'This is Part Of Images', 't', ''),
(11, '2019-02-25', 'Testing Tech Post 05', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post04.jpg', 'This is Part Of Images', 't', ''),
(12, '2019-02-25', 'Testing Tech Post 06', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post05.jpg', 'This is Part Of Images', 't', ''),
(13, '2019-02-25', 'Testing Tech Post 07', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post06.jpg', 'This is Part Of Images', 't', ''),
(14, '2019-02-25', 'Testing Android Post 02', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post07.jpg', 'This is Part Of Images', 'a', ''),
(15, '2019-02-25', 'Testing Android Post 03', 'Since before Christmas, royal fans have questioned whether the two duchesses have been getting along, with rumours emerging that the sisters-in-law are “feuding”, The Sun reports. Now, royal experts have weighed in to claim Meghan — who has only been a member of the royal family for eight months — “never stood a chance” in the popularity stakes against Kate. Writing in the Guardian, Yomi Adegoke said: “Meghan’s casting as a Disney villain — a black female divorcee with a penchant for black dresses (another protocol breach) — practically writes itself.', 'post01.jpg', 'This is Part Of Images', 'a', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mra_post`
--
ALTER TABLE `mra_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mra_post`
--
ALTER TABLE `mra_post`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
