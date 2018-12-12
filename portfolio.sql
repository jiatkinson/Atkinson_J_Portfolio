-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 12, 2018 at 06:10 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_clients`
--

CREATE TABLE `portfolio_clients` (
  `clients_id` tinyint(4) NOT NULL,
  `clients_name` text NOT NULL,
  `clients_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_clients`
--

INSERT INTO `portfolio_clients` (`clients_id`, `clients_name`, `clients_url`) VALUES
(1, 'The Barking Frog', 'https://www.facebook.com/barkingfroglondon'),
(2, 'Block Party London', 'https://www.blockpartylondon.com'),
(3, 'Fanshawe College Athletics', 'https://www.fanshawefalcons.ca'),
(4, 'Hessenland Inn & Schatz Winery', 'https://www.hessenland.com'),
(5, 'Infinity Entertainment', 'https://www.facebook.com/InfinityEnt'),
(6, 'Joel Demoor', 'https://www.facebook.com/JoelDemoorOfficial'),
(7, 'Julie Hawkins Art', 'https://juliehawkins.ca'),
(8, 'Kingzmn', 'https://www.facebook.com/KINGZMN1'),
(9, 'Ontario\'s Blue Coast', 'https://www.ontbluecoast.com'),
(10, 'Spur Fashion Show', 'https://www.facebook.com/SpurFashionShow/');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_videos`
--

CREATE TABLE `portfolio_videos` (
  `videos_id` smallint(6) NOT NULL,
  `videos_name` varchar(45) NOT NULL,
  `videos_path` varchar(60) NOT NULL,
  `videos_desc` varchar(400) NOT NULL,
  `videos_thumb` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_videos`
--

INSERT INTO `portfolio_videos` (`videos_id`, `videos_name`, `videos_path`, `videos_desc`, `videos_thumb`) VALUES
(1, 'BlockParty 2017 (Official After Movie)', 'video-1.mp4', 'Filmed and organized footage as part of the media team at BlockParty London. Used a Sony a6300 camera with Zhiyun Crane & multiple lenses.', 'video-1.png'),
(2, 'Hessenland Inn Promo', 'video-2.mp4', 'Created a promotional video for Hessenland Inn. Used a Sony a6300 camera, DJI Phantom 3 drone and Final Cut Pro.', 'video-2.png'),
(3, 'Kingzmn ft. Raven J - Caretaker (Lyric Video)', 'video-3.mp4', 'Lyric video for the song Caretaker by Kingzmn featuring Raven J. Used After Effects & Illustrator.', 'video-3.png'),
(4, 'Julie Hawkins Art Promo', 'video-4.mp4', 'Created a promotional video for Julie Hawkins Art. Used a Sony a6300 camera with multiple lenses & Final Cut Pro.', 'video-4.png'),
(5, 'Conquer The Coast - Ontario’s Blue Coast', 'video-5.mp4', 'Editing lead for a tourism project with TMRRW INC. Used Premiere Pro & After Effects.', 'video-5.png'),
(6, 'On My High (Personal Project)', 'video-6.mp4', 'A personal project of mine that includes some of my best footage complied into one video. Used cameras such as the Sony a6300, Nikon D3300, GoPro 4 & Phantom DJI 3 drone. Edited using Final Cut Pro & After Effects.', 'video-6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio_clients`
--
ALTER TABLE `portfolio_clients`
  ADD PRIMARY KEY (`clients_id`);

--
-- Indexes for table `portfolio_videos`
--
ALTER TABLE `portfolio_videos`
  ADD PRIMARY KEY (`videos_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio_clients`
--
ALTER TABLE `portfolio_clients`
  MODIFY `clients_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolio_videos`
--
ALTER TABLE `portfolio_videos`
  MODIFY `videos_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
