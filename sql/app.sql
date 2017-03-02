-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 03, 2017 at 12:38 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `last` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first`, `last`, `title`, `address`, `city`, `state`, `zip`, `phone`, `notes`) VALUES
(1, 'Seth', 'Wright', 'Awesome', '59 Fallenwood', 'Chapel', 'NC', '27516', '704-516-9193', 'He is so cool'),
(2, 'Courtney', 'Wright', 'Awesomer', '59 Fallenwood', 'Chapel', 'NC', '27516', '919-929-2501', 'She is the best mom');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `completed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `priority`, `completed`) VALUES
(12, 'Test Fifth Task', 'Curabitur est dolor, viverra in porta in, rhoncus quis justo. Aliquam nec nulla a nisl pulvinar lobortis. Curabitur tempus eros ligula, ac bibendum dolor cursus sed. Etiam a cursus augue, eget feugiat mi. Donec sed nunc vel nibh cursus lacinia in maximus turpis. Duis convallis felis at arcu rutrum bibendum. Sed elementum ut ante sed viverra. Quisque vulputate diam id nisl consequat, ac sagittis odio pretium. Sed a pretium lorem. Pellentesque fermentum odio diam. Pellentesque non felis rutrum, convallis velit vel, porta sem. Nam velit neque, ullamcorper at lacus eget, tincidunt vulputate dolor. Nulla commodo placerat vehicula.', 5, 0),
(14, 'Final Task', 'In sodales dui vel lobortis imperdiet. Donec egestas viverra dolor, et elementum turpis mollis eu. Nunc id lacinia sapien. Praesent lobortis nisi odio, quis rhoncus turpis dictum quis. Sed porttitor orci leo, sit amet consectetur felis porttitor at. In dictum, ante placerat dictum ullamcorper, sem sem pellentesque leo, ac vestibulum diam justo eu diam. Praesent sollicitudin, erat id consectetur aliquet, purus mi venenatis enim, vitae semper sem neque eget elit. Mauris blandit vehicula nunc, id faucibus enim scelerisque pretium.', 1, 0),
(15, 'Task', 'Ut magna turpis, tincidunt vitae nisi eu, ultrices elementum sem. Nulla facilisi. Nulla facilisi. Praesent eget mollis felis, et pulvinar massa. In eu lacus a metus iaculis suscipit. Fusce sed velit eget enim porttitor vulputate. Suspendisse suscipit lectus eu turpis laoreet porttitor. Ut bibendum justo odio, et finibus diam dapibus nec. Donec consequat mauris sed vulputate varius. Suspendisse hendrerit massa tellus. Integer efficitur tempor nunc, id ultricies ante semper in. Maecenas porttitor lorem semper mauris molestie porttitor. Vestibulum in ipsum leo. In ex eros, suscipit ac semper at, mollis laoreet enim. Morbi pulvinar dignissim felis.', 4, 0),
(16, 'Test Task Title', 'Maecenas at porta massa, ac tincidunt eros. In mattis varius commodo. In vel ante sit amet elit consectetur egestas. Nulla ullamcorper varius dignissim. Sed laoreet at ligula semper convallis. Maecenas in imperdiet purus. Morbi ac condimentum arcu. Etiam erat libero, volutpat ut vulputate at, volutpat eget lacus.', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
