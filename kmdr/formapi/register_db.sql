-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 02:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `mobile`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '9669563039', 'admin', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `id` int(11) NOT NULL,
  `full_Name` varchar(255) DEFAULT NULL,
  `father_Name` varchar(255) DEFAULT NULL,
  `mother_Name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `spouse_Name` varchar(255) DEFAULT NULL,
  `spouse_Dob` date DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `permanent_Address` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `telsil` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `dist` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) NOT NULL DEFAULT '0',
  `phone` bigint(20) NOT NULL DEFAULT '0',
  `email` varchar(255) DEFAULT NULL,
  `boys` varchar(255) DEFAULT NULL,
  `girls` varchar(255) DEFAULT NULL,
  `child_Edu1` varchar(255) DEFAULT NULL,
  `child_Edu2` varchar(255) DEFAULT NULL,
  `child_Edu3` varchar(255) DEFAULT NULL,
  `crop_Type` varchar(255) DEFAULT NULL,
  `soil_Test` varchar(255) DEFAULT NULL,
  `soil_Type` varchar(255) DEFAULT NULL,
  `soil_Depth` varchar(255) DEFAULT NULL,
  `water_Level` varchar(255) DEFAULT NULL,
  `tree_On_Med` varchar(255) DEFAULT NULL,
  `tree_In_Farm` varchar(255) DEFAULT NULL,
  `light_Type` varchar(255) DEFAULT NULL,
  `light_Hour` varchar(255) DEFAULT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `waterkua` varchar(255) DEFAULT NULL,
  `watertubewell` varchar(255) DEFAULT NULL,
  `waternhar` varchar(255) DEFAULT NULL,
  `waterndi` varchar(255) DEFAULT NULL,
  `watertalab` varchar(255) DEFAULT NULL,
  `waterdrip` varchar(255) DEFAULT NULL,
  `wateranya` varchar(255) DEFAULT NULL,
  `machine` varchar(255) DEFAULT NULL,
  `pesticide` varchar(255) DEFAULT NULL,
  `protected_Farming` varchar(255) DEFAULT NULL,
  `storage` varchar(255) DEFAULT NULL,
  `farm_House` varchar(255) DEFAULT NULL,
  `godown` varchar(255) DEFAULT NULL,
  `labour_House` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `near_By_Market` varchar(255) DEFAULT NULL,
  `transport` varchar(255) DEFAULT NULL,
  `khasra` varchar(255) DEFAULT NULL,
  `halka` varchar(255) DEFAULT NULL,
  `small_Farm` varchar(255) DEFAULT NULL,
  `medium_Farm` varchar(255) DEFAULT NULL,
  `large_Farm` varchar(255) DEFAULT NULL,
  `irrigated_Land` varchar(255) DEFAULT NULL,
  `non_Irrigated_Land` varchar(255) DEFAULT NULL,
  `selling_Center` varchar(255) DEFAULT NULL,
  `cow` varchar(255) DEFAULT NULL,
  `buffelo` varchar(255) DEFAULT NULL,
  `goat` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `cow_Breed` varchar(255) DEFAULT NULL,
  `buffelo_Breed` varchar(255) DEFAULT NULL,
  `dung_Land` varchar(255) DEFAULT NULL,
  `dung_Land_Size` varchar(255) DEFAULT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `shed_Type` varchar(255) DEFAULT NULL,
  `shed_Size` varchar(255) DEFAULT NULL,
  `milk_Producer` varchar(255) DEFAULT NULL,
  `milk_Uses` varchar(255) DEFAULT NULL,
  `near_By_Animal_Hospital` varchar(255) DEFAULT NULL,
  `animal_Insurance` varchar(255) DEFAULT NULL,
  `income_Source` varchar(255) DEFAULT NULL,
  `annual_Income` decimal(10,0) DEFAULT NULL,
  `bank_Name` varchar(255) DEFAULT NULL,
  `Adhar_No` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`id`, `full_Name`, `father_Name`, `mother_Name`, `dob`, `qualification`, `spouse_Name`, `spouse_Dob`, `category`, `permanent_Address`, `village`, `telsil`, `post`, `dist`, `state`, `mobile`, `phone`, `email`, `boys`, `girls`, `child_Edu1`, `child_Edu2`, `child_Edu3`, `crop_Type`, `soil_Test`, `soil_Type`, `soil_Depth`, `water_Level`, `tree_On_Med`, `tree_In_Farm`, `light_Type`, `light_Hour`, `interest`, `waterkua`, `watertubewell`, `waternhar`, `waterndi`, `watertalab`, `waterdrip`, `wateranya`, `machine`, `pesticide`, `protected_Farming`, `storage`, `farm_House`, `godown`, `labour_House`, `path`, `near_By_Market`, `transport`, `khasra`, `halka`, `small_Farm`, `medium_Farm`, `large_Farm`, `irrigated_Land`, `non_Irrigated_Land`, `selling_Center`, `cow`, `buffelo`, `goat`, `other`, `cow_Breed`, `buffelo_Breed`, `dung_Land`, `dung_Land_Size`, `shed`, `shed_Type`, `shed_Size`, `milk_Producer`, `milk_Uses`, `near_By_Animal_Hospital`, `animal_Insurance`, `income_Source`, `annual_Income`, `bank_Name`, `Adhar_No`, `place`, `date`) VALUES
(1, 'rahul', 'nitin', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 7974453185, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '500000', NULL, '212355451445ds', NULL, NULL),
(2, 'aman', 'vinod', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 8982104789, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', 'dvdfd', 'fdfdfdv', 'ffffff', 'szxzxzxzxzxz', 'dssfd', 'sdsdsd', 'asads', 'aaaa', 'aaaaa', 'dsasf', 'dwsd', 'dfdd', 'adsads', 'sss', 'sss', 'aa', 'aaaaa', 'aaaaaa', 'dfdf', 'fdf', 'sff', 'fedff', 'aadd', 'cdvdv', 'dsddd', 'fdsfsdf', 'dfdfdf', 'gg', 'fdf', 'fsfs', 'sfs', 'dfdsf', 'ffgd', 'fdff', 'vdvdv', 'dff', 'sfsff', 'dssd', 'ssds', 'sas', 'sfdsff', 'dvdvgd', 'sfddffg', '250000', 'dsdd', 'dblpr155gysg', 'dscfc', '1998-12-02'),
(3, 'manoj', 'aasssss', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 9200123833, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', 'dvdfd', 'fdfdfdv', 'ffffff', 'szxzxzxzxzxz', 'dssfd', 'sdsdsd', 'asads', 'aaaa', 'aaaaa', 'dsasf', 'dwsd', 'dfdd', 'adsads', 'sss', 'sss', 'aa', 'aaaaa', 'aaaaaa', 'dfdf', 'fdf', 'sff', 'fedff', 'aadd', 'cdvdv', 'dsddd', 'fdsfsdf', 'dfdfdf', 'gg', 'fdf', 'fsfs', 'sfs', 'dfdsf', 'ffgd', 'fdff', 'vdvdv', 'dff', 'sfsff', 'dssd', 'ssds', 'sas', 'sfdsff', 'dvdvgd', 'sfddffg', '0', 'dsdd', 'sff', 'dscfc', '1998-12-02'),
(4, 'ankit', 'aasssss', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 79756123, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', 'dvdfd', 'fdfdfdv', 'ffffff', 'szxzxzxzxzxz', 'dssfd', 'sdsdsd', 'asads', 'aaaa', 'aaaaa', 'dsasf', 'dwsd', 'dfdd', 'adsads', 'sss', 'sss', 'aa', 'aaaaa', 'aaaaaa', 'dfdf', 'fdf', 'sff', 'fedff', 'aadd', 'cdvdv', 'dsddd', 'fdsfsdf', 'dfdfdf', 'gg', 'fdf', 'fsfs', 'sfs', 'dfdsf', 'ffgd', 'fdff', 'vdvdv', 'dff', 'sfsff', 'dssd', 'ssds', 'sas', 'sfdsff', 'dvdvgd', 'sfddffg', '0', 'dsdd', 'sff', 'dscfc', '1998-12-02'),
(5, 'amit', 'aasssss', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 920012875, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', 'dvdfd', 'fdfdfdv', 'ffffff', 'szxzxzxzxzxz', 'dssfd', 'sdsdsd', 'asads', 'aaaa', 'aaaaa', 'dsasf', 'dwsd', 'dfdd', 'adsads', 'sss', 'sss', 'aa', 'aaaaa', 'aaaaaa', 'dfdf', 'fdf', 'sff', 'fedff', 'aadd', 'cdvdv', 'dsddd', 'fdsfsdf', 'dfdfdf', 'gg', 'fdf', 'fsfs', 'sfs', 'dfdsf', 'ffgd', 'fdff', 'vdvdv', 'dff', 'sfsff', 'dssd', 'ssds', 'sas', 'sfdsff', 'dvdvgd', 'sfddffg', '0', 'dsdd', 'sff', 'dscfc', '1998-12-02'),
(6, 'amanwat', 'aasssss', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 5446465, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', 'dvdfd', 'fdfdfdv', 'ffffff', 'szxzxzxzxzxz', 'dssfd', 'sdsdsd', 'asads', 'aaaa', 'aaaaa', 'dsasf', 'dwsd', 'dfdd', 'adsads', 'sss', 'sss', 'aa', 'aaaaa', 'aaaaaa', 'dfdf', 'fdf', 'sff', 'fedff', 'aadd', 'cdvdv', 'dsddd', 'fdsfsdf', 'dfdfdf', 'gg', 'fdf', 'fsfs', 'sfs', 'dfdsf', 'ffgd', 'fdff', 'vdvdv', 'dff', 'sfsff', 'dssd', 'ssds', 'sas', 'sfdsff', 'dvdvgd', 'sfddffg', '0', 'dsdd', 'sff', 'dscfc', '1998-12-02'),
(7, 'aman', 'aasssss', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 5446465, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', 'dvdfd', 'fdfdfdv', 'ffffff', 'szxzxzxzxzxz', 'dssfd', 'sdsdsd', 'asads', 'aaaa', 'aaaaa', 'dsasf', 'dwsd', 'dfdd', 'adsads', 'sss', 'sss', 'aa', 'aaaaa', 'aaaaaa', 'dfdf', 'fdf', 'sff', 'fedff', 'aadd', 'cdvdv', 'dsddd', 'fdsfsdf', 'dfdfdf', 'gg', 'fdf', 'fsfs', 'sfs', 'dfdsf', 'ffgd', 'fdff', 'vdvdv', 'dff', 'sfsff', 'dssd', 'ssds', 'sas', 'sfdsff', 'dvdvgd', 'sfddffg', '0', 'dsdd', 'sff', 'dscfc', '1998-12-02'),
(8, 'aman', 'aasssss', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 5446465, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', 'dvdfd', 'fdfdfdv', 'ffffff', 'szxzxzxzxzxz', 'dssfd', 'sdsdsd', 'asads', 'aaaa', 'aaaaa', 'dsasf', 'dwsd', 'dfdd', 'adsads', 'sss', 'sss', 'aa', 'aaaaa', 'aaaaaa', 'dfdf', 'fdf', 'sff', 'fedff', 'aadd', 'cdvdv', 'dsddd', 'fdsfsdf', 'dfdfdf', 'gg', 'fdf', 'fsfs', 'sfs', 'dfdsf', 'ffgd', 'fdff', 'vdvdv', 'dff', 'sfsff', 'dssd', 'ssds', 'sas', 'sfdsff', 'dvdvgd', 'sfddffg', '0', 'dsdd', '123456', 'dscfc', '1998-12-02'),
(9, 'aman', 'aasssss', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 5446465, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', 'dvdfd', 'fdfdfdv', 'ffffff', 'szxzxzxzxzxz', 'dssfd', 'sdsdsd', 'asads', 'aaaa', 'aaaaa', 'dsasf', 'dwsd', 'dfdd', 'adsads', 'sss', 'sss', 'aa', 'aaaaa', 'aaaaaa', 'dfdf', 'fdf', 'sff', 'fedff', 'aadd', 'cdvdv', 'dsddd', 'fdsfsdf', 'dfdfdf', 'gg', 'fdf', 'fsfs', 'sfs', 'dfdsf', 'ffgd', 'fdff', 'vdvdv', 'dff', 'sfsff', 'dssd', 'ssds', 'sas', 'sfdsff', 'dvdvgd', 'sfddffg', '0', 'dsdd', 'sff', 'dscfc', '1998-12-02'),
(10, 'aman', 'aasssss', 'ssss', '1998-12-22', '123456', 'sssssssssssd', '0000-00-00', 'ssfs', 'gggg', 'feeeew', 'gff', 'dgrggg', 'feffff', 'ffff', 5446465, 55555, 'sfgfefef', 'ggdd', 'sfffsff', 'ffffffefe', 'ffdfdf', 'dwdf', 'dgdgdggdgd', 'fddddfdf', 'vvdvdvdvdvv', 'sffdfdfdfdf', 'sdfsffdff', 'fffdgdf', 'fewfewfefefe', 'dfsdddd', 'dvdfd', 'fdfdfdv', 'ffffff', 'szxzxzxzxzxz', 'dssfd', 'sdsdsd', 'asads', 'aaaa', 'aaaaa', 'dsasf', 'dwsd', 'dfdd', 'adsads', 'sss', 'sss', 'aa', 'aaaaa', 'aaaaaa', 'dfdf', 'fdf', 'sff', 'fedff', 'aadd', 'cdvdv', 'dsddd', 'fdsfsdf', 'dfdfdf', 'gg', 'fdf', 'fsfs', 'sfs', 'dfdsf', 'ffgd', 'fdff', 'vdvdv', 'dff', 'sfsff', 'dssd', 'ssds', 'sas', 'sfdsff', 'dvdvgd', 'sfddffg', '0', 'dsdd', 'sff', 'dscfc', '1998-12-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mytable`
--
ALTER TABLE `mytable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
