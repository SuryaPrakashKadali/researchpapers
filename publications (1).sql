-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 10:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `pid` int(11) NOT NULL,
  `emp_id` varchar(10) DEFAULT NULL,
  `author1` text DEFAULT NULL,
  `institution1` text DEFAULT NULL,
  `author2` text DEFAULT NULL,
  `institution2` text DEFAULT NULL,
  `author3` text DEFAULT NULL,
  `institution3` text DEFAULT NULL,
  `author4` text DEFAULT NULL,
  `institution4` text DEFAULT NULL,
  `author5` text DEFAULT NULL,
  `institution5` text DEFAULT NULL,
  `paper_title` text DEFAULT NULL,
  `journal_title` text DEFAULT NULL,
  `domain` text DEFAULT NULL,
  `journal_conference` varchar(30) DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `issue` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `month` varchar(30) DEFAULT NULL,
  `issn_isbn_doi` text DEFAULT NULL,
  `international_national` text DEFAULT NULL,
  `published_full` varchar(3) DEFAULT NULL,
  `abstract_published` varchar(3) DEFAULT NULL,
  `scopus_wos` varchar(3) DEFAULT NULL,
  `citation_scopus` int(11) DEFAULT NULL,
  `citation_google_scholar` int(11) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `affiliated_to_vit` varchar(3) DEFAULT NULL,
  `author_name` text DEFAULT NULL,
  `page_numbers` text DEFAULT NULL,
  `citations_internal` int(11) DEFAULT NULL,
  `cite_article` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`pid`, `emp_id`, `author1`, `institution1`, `author2`, `institution2`, `author3`, `institution3`, `author4`, `institution4`, `author5`, `institution5`, `paper_title`, `journal_title`, `domain`, `journal_conference`, `volume`, `issue`, `year`, `month`, `issn_isbn_doi`, `international_national`, `published_full`, `abstract_published`, `scopus_wos`, `citation_scopus`, `citation_google_scholar`, `link`, `affiliated_to_vit`, `author_name`, `page_numbers`, `citations_internal`, `cite_article`) VALUES
(1, '123', 'jhbjnj', 'jbjk', 'ghfv', 'gvj', NULL, NULL, NULL, NULL, NULL, NULL, 'test', 'tech', 'sci', 'Book Chapter', 2, 2, 2019, 'May', '321', 'International', 'Yes', 'No', 'Yes', 2, 2, 'kjknkln', 'Yes', 'Second', '12-96', 0, 'bbbbm'),
(2, '123', '2', '1', '2', '5', '2', '3', '4', '', '', 'institution5', 'cat', 'cat', '', 'Journal', 0, 0, 0, 'January', '', 'International', 'Yes', 'Yes', 'Yes', 0, 0, '', 'Yes', 'First', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
