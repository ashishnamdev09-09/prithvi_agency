-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 02:18 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prithvi_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_contact` bigint(20) NOT NULL,
  `ad_address` varchar(50) NOT NULL,
  `ad_email` varchar(30) NOT NULL,
  `ad_username` varchar(20) NOT NULL,
  `ad_password` varchar(150) NOT NULL,
  `ad_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_contact`, `ad_address`, `ad_email`, `ad_username`, `ad_password`, `ad_date`) VALUES
(7, 'asd', 48484, 'afaf', 'hi@gmail.com', 'afaf', '123456789', '2020-01-13'),
(9, 'balu', 848484848, 'hfuwuf', 'balakrishandon@gmail.com', 'balu4747', '123', '2020-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `extra_charges`
--

CREATE TABLE `extra_charges` (
  `ec_id` int(11) NOT NULL,
  `ec_min_amount` int(11) NOT NULL,
  `ec_min_stock_qty` int(11) NOT NULL,
  `ec_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `mc_id` int(11) NOT NULL,
  `mc_name` varchar(50) NOT NULL,
  `mc_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `pc_id` int(11) NOT NULL,
  `mc_id` int(11) NOT NULL,
  `pc_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `pd_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `pd_name` varchar(30) NOT NULL,
  `pd_sku_code` varchar(20) NOT NULL,
  `pd_tax_percent` int(11) NOT NULL,
  `pd_image` varchar(50) NOT NULL,
  `pd_description` text NOT NULL,
  `pd_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retailers`
--

CREATE TABLE `retailers` (
  `rt_id` int(11) NOT NULL,
  `rt_enterprise_name` varchar(50) NOT NULL,
  `rt_name` varchar(30) NOT NULL,
  `rt_contact` bigint(20) NOT NULL,
  `rt_email` varchar(50) NOT NULL,
  `rt_address` varchar(50) NOT NULL,
  `rt_username` varchar(20) NOT NULL,
  `rt_password` varchar(150) NOT NULL,
  `rt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `retailers_order_details`
--

CREATE TABLE `retailers_order_details` (
  `cod_id` int(11) NOT NULL,
  `rt_id` int(11) NOT NULL,
  `order_json` longtext NOT NULL,
  `order_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_grand_total` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_tracking` longtext NOT NULL,
  `order_tracking_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `sd_id` int(11) NOT NULL,
  `pd_id` int(11) NOT NULL,
  `sd_avail_qty` int(11) NOT NULL,
  `sd_min_order_qty` int(11) NOT NULL,
  `sd_mrp` float NOT NULL,
  `sd_ptr` float NOT NULL,
  `sd_ptr_discount` int(11) NOT NULL,
  `sd_scheme_unit_price` float NOT NULL,
  `sd_total_amount` float NOT NULL,
  `sd_net_profit` float NOT NULL,
  `sd_status` varchar(20) NOT NULL,
  `sd_scheme_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `extra_charges`
--
ALTER TABLE `extra_charges`
  ADD PRIMARY KEY (`ec_id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`mc_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`pc_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `retailers`
--
ALTER TABLE `retailers`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `retailers_order_details`
--
ALTER TABLE `retailers_order_details`
  ADD PRIMARY KEY (`cod_id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`sd_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `extra_charges`
--
ALTER TABLE `extra_charges`
  MODIFY `ec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `mc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retailers`
--
ALTER TABLE `retailers`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retailers_order_details`
--
ALTER TABLE `retailers_order_details`
  MODIFY `cod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `sd_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
