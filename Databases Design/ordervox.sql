-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2016 at 12:13 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ordervox`
--

-- --------------------------------------------------------

--
-- Table structure for table `ov_addons`
--

CREATE TABLE IF NOT EXISTS `ov_addons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addons_item_id` int(11) DEFAULT NULL,
  `addons_name` varchar(50) DEFAULT NULL,
  `addons_value` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ov_addons`
--

INSERT INTO `ov_addons` (`id`, `addons_item_id`, `addons_name`, `addons_value`) VALUES
(1, 1, 'Extra Cream', 5),
(2, 1, 'Drinks', 2),
(3, 1, 'Extra Sauce', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ov_category`
--

CREATE TABLE IF NOT EXISTS `ov_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_code` varchar(50) DEFAULT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `category_note` varchar(50) DEFAULT NULL,
  `category_isHome` int(11) DEFAULT NULL,
  `category_restaurant_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ov_category`
--

INSERT INTO `ov_category` (`id`, `category_code`, `category_name`, `category_note`, `category_isHome`, `category_restaurant_id`) VALUES
(2, '1', 'special', NULL, NULL, 1),
(1, '1', 'lunch', NULL, NULL, 1),
(3, '1', 'test', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ov_customer`
--

CREATE TABLE IF NOT EXISTS `ov_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_code` varchar(50) NOT NULL DEFAULT '0',
  `customer_fname` varchar(50) NOT NULL DEFAULT '0',
  `customer_lname` varchar(50) NOT NULL DEFAULT '0',
  `customer_state` varchar(50) NOT NULL DEFAULT '0',
  `customer_city` varchar(50) NOT NULL DEFAULT '0',
  `customer_postcode` varchar(50) NOT NULL DEFAULT '0',
  `customer_postaladdress` varchar(50) NOT NULL DEFAULT '0',
  `customer_phone` varchar(50) NOT NULL DEFAULT '0',
  `customer_mobile` varchar(50) NOT NULL DEFAULT '0',
  `customer_email` varchar(50) NOT NULL DEFAULT '0',
  `customer_password` varchar(50) NOT NULL DEFAULT '0',
  `customer_isEnable` int(11) NOT NULL DEFAULT '1',
  `customer_isNewsLetter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ov_customer`
--

INSERT INTO `ov_customer` (`id`, `customer_code`, `customer_fname`, `customer_lname`, `customer_state`, `customer_city`, `customer_postcode`, `customer_postaladdress`, `customer_phone`, `customer_mobile`, `customer_email`, `customer_password`, `customer_isEnable`, `customer_isNewsLetter`) VALUES
(1, 'mc001', 'Fazly', 'Rabbi', 'London', 'City of Westminster21', '1540', 'Some address', '7540543', '01670255268', 'becreat@gmail.com', 'AAAccc111', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ov_item`
--

CREATE TABLE IF NOT EXISTS `ov_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_isEnable` int(11) NOT NULL DEFAULT '1',
  `item_isInHome` int(11) NOT NULL DEFAULT '0',
  `item_isLoyaltyPoints` int(11) NOT NULL DEFAULT '0',
  `item_isPromotion` int(11) NOT NULL DEFAULT '0',
  `item_code` varchar(50) DEFAULT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `item_sname` varchar(50) DEFAULT NULL,
  `item_note` text,
  `item_category_id` int(11) DEFAULT NULL,
  `item_restaurant_id` int(11) DEFAULT NULL,
  `item_vat_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ov_item`
--

INSERT INTO `ov_item` (`id`, `item_isEnable`, `item_isInHome`, `item_isLoyaltyPoints`, `item_isPromotion`, `item_code`, `item_name`, `item_sname`, `item_note`, `item_category_id`, `item_restaurant_id`, `item_vat_id`) VALUES
(1, 1, 0, 0, 1, '1', 'Berry lace pizza', 'piz0012', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eius odio cupiditate omnis unde non delectus, labore, illo aliquam. Corporis qui quisquam expedita velit incidunt deleniti dolor vel eligendi vitae!', 1, 1, 1),
(2, 1, 0, 0, 0, '2', 'Dosa', NULL, 'Dosa is a kind of pancake made from a fermented batter. Its main ingredients are rice and black gram. Dosa is a typical part of the South Indian diet and popular all over the Indian subcontinent.', 1, NULL, NULL),
(3, 1, 0, 0, 1, '3', 'Kabab', NULL, 'Kebab is a term in English for several types of food. The word originated in the Middle East and is also common in other languages worldwide, with numerous spellings and variants.', 1, NULL, NULL),
(4, 1, 0, 0, 0, '1', 'Rice Dish', 'javc1234', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eius odio cupiditate omnis unde non delectus, labore, illo aliquam. Corporis qui quisquam expedita velit incidunt deleniti dolor vel eligendi vitae!', 2, 1, 1),
(5, 1, 0, 0, 1, '1', 'Vegetable Dish', 'gat558', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eius odio cupiditate omnis unde non delectus, labore, illo aliquam. Corporis qui quisquam expedita velit incidunt deleniti dolor vel eligendi vitae!', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ov_order`
--

CREATE TABLE IF NOT EXISTS `ov_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(50) DEFAULT NULL,
  `order_date` varchar(50) DEFAULT NULL,
  `order_status` varchar(50) DEFAULT NULL,
  `order_pricetotal` float DEFAULT NULL,
  `order_linetotal` int(11) DEFAULT NULL,
  `order_customer_id` int(11) DEFAULT NULL,
  `order_resturent_id` int(11) DEFAULT NULL,
  `order_payment_type` int(11) DEFAULT NULL,
  `order_delivery_state` varchar(50) DEFAULT NULL,
  `order_delivery_city` varchar(50) DEFAULT NULL,
  `order_delivery_postcode` varchar(50) DEFAULT NULL,
  `order_delivery_postaladdress` varchar(50) DEFAULT NULL,
  `order_delivery_phone_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ov_order`
--

INSERT INTO `ov_order` (`id`, `order_number`, `order_date`, `order_status`, `order_pricetotal`, `order_linetotal`, `order_customer_id`, `order_resturent_id`, `order_payment_type`, `order_delivery_state`, `order_delivery_city`, `order_delivery_postcode`, `order_delivery_postaladdress`, `order_delivery_phone_number`) VALUES
(14, 'mc_523', '1476479580', 'Cooking', 47, 1, 1, 1, 0, '', 'London', '1236', '1744 jonotabag', '01670255268'),
(15, 'mc_372', '1476480845', 'Cooking', 47, 1, 1, 1, 0, '', 'London', '1236', '1744dasd dasdas', '1001010'),
(16, 'mc_600', '1476480884', 'Cooking', 100, 1, 1, 1, 0, '', 'London', '1236', 'dadadsadas', '654165465');

-- --------------------------------------------------------

--
-- Table structure for table `ov_ordered_item`
--

CREATE TABLE IF NOT EXISTS `ov_ordered_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ordered_order_id` int(11) DEFAULT NULL,
  `ordered_item_id` int(11) DEFAULT NULL,
  `ordered_qyt` int(11) DEFAULT NULL,
  `ordered_price_id` int(11) DEFAULT NULL,
  `ordered_addons` varchar(50) DEFAULT NULL,
  `ordered_note` varchar(50) DEFAULT NULL,
  `ordered_price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ov_ordered_item`
--

INSERT INTO `ov_ordered_item` (`id`, `ordered_order_id`, `ordered_item_id`, `ordered_qyt`, `ordered_price_id`, `ordered_addons`, `ordered_note`, `ordered_price`) VALUES
(18, 14, 1, 1, 1, '', '', 47),
(19, 15, 1, 1, 1, '', '', 47),
(20, 16, 2, 2, 4, '', 'test', 50);

-- --------------------------------------------------------

--
-- Table structure for table `ov_price`
--

CREATE TABLE IF NOT EXISTS `ov_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price_item_id` int(11) DEFAULT NULL,
  `price_name` varchar(50) DEFAULT '',
  `price_value` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ov_price`
--

INSERT INTO `ov_price` (`id`, `price_item_id`, `price_name`, `price_value`) VALUES
(1, 1, 'regular', 47.5),
(6, 1, 'small', 40),
(4, 2, 'regular', 50),
(5, 3, 'regular', 20),
(7, 1, 'large', 50),
(8, 4, 'regular', 60),
(9, 5, 'regular', 70);

-- --------------------------------------------------------

--
-- Table structure for table `ov_promotion`
--

CREATE TABLE IF NOT EXISTS `ov_promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promotion_item_id` int(11) NOT NULL DEFAULT '0',
  `promotion_value` float DEFAULT NULL,
  `promotion_sdate` int(11) DEFAULT NULL,
  `promotion_edate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ov_promotion_day`
--

CREATE TABLE IF NOT EXISTS `ov_promotion_day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promotion_day_promotion_id` int(11) NOT NULL DEFAULT '0',
  `promotion_day_day` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ov_restaurant`
--

CREATE TABLE IF NOT EXISTS `ov_restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_code` int(11) DEFAULT NULL,
  `restaurant_name` varchar(50) DEFAULT NULL,
  `restaurant_title` varchar(50) DEFAULT NULL,
  `restaurant_subtitle` varchar(50) DEFAULT NULL,
  `restaurant_domain` varchar(50) DEFAULT NULL,
  `restaurant_subdomain` varchar(50) DEFAULT NULL,
  `restaurant_email` varchar(50) DEFAULT NULL,
  `restaurant_phone` varchar(50) DEFAULT NULL,
  `restaurant_mobile` varchar(50) DEFAULT NULL,
  `restaurant_address` varchar(50) DEFAULT NULL,
  `restaurant_postalcode` varchar(50) DEFAULT NULL,
  `restaurant_gmap` varchar(50) DEFAULT NULL,
  `restaurant_vatnumber` varchar(50) DEFAULT NULL,
  `restaurant_status` varchar(50) DEFAULT NULL,
  `restaurant_package` varchar(50) DEFAULT NULL,
  `restaurant_notes` varchar(50) DEFAULT NULL,
  `restaurant_dor` varchar(50) DEFAULT NULL,
  `restaurant_theme_id` varchar(50) DEFAULT NULL,
  `restaurant_theme_color` varchar(50) DEFAULT NULL,
  `restaurant_theme_layout` varchar(50) DEFAULT NULL,
  `restaurant_theme_tablebooking` varchar(50) DEFAULT NULL,
  `restaurant_contactperson_name` varchar(50) DEFAULT NULL,
  `restaurant_contactperson_role` varchar(50) DEFAULT NULL,
  `restaurant_contactperson_address` varchar(50) DEFAULT NULL,
  `restaurant_contactperson_phone` varchar(50) DEFAULT NULL,
  `restaurant_contactperson_email` varchar(50) DEFAULT NULL,
  `restaurant_contactperson_dob` double DEFAULT NULL,
  `restaurant_2ndcontactperson_name` double DEFAULT NULL,
  `restaurant_2ndcontactperson_role` double DEFAULT NULL,
  `restaurant_2ndcontactperson_address` double DEFAULT NULL,
  `restaurant_2ndcontactperson_phone` double DEFAULT NULL,
  `restaurant_2ndcontactperson_email` double DEFAULT NULL,
  `restaurant_2ndcontactperson_dob` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ov_restaurant`
--

INSERT INTO `ov_restaurant` (`id`, `restaurant_code`, `restaurant_name`, `restaurant_title`, `restaurant_subtitle`, `restaurant_domain`, `restaurant_subdomain`, `restaurant_email`, `restaurant_phone`, `restaurant_mobile`, `restaurant_address`, `restaurant_postalcode`, `restaurant_gmap`, `restaurant_vatnumber`, `restaurant_status`, `restaurant_package`, `restaurant_notes`, `restaurant_dor`, `restaurant_theme_id`, `restaurant_theme_color`, `restaurant_theme_layout`, `restaurant_theme_tablebooking`, `restaurant_contactperson_name`, `restaurant_contactperson_role`, `restaurant_contactperson_address`, `restaurant_contactperson_phone`, `restaurant_contactperson_email`, `restaurant_contactperson_dob`, `restaurant_2ndcontactperson_name`, `restaurant_2ndcontactperson_role`, `restaurant_2ndcontactperson_address`, `restaurant_2ndcontactperson_phone`, `restaurant_2ndcontactperson_email`, `restaurant_2ndcontactperson_dob`) VALUES
(1, 1, 'MyCafe', 'MyCafe', 'Eat Everyday', 'mycafe', 'mycafe.com', 'contact@mycafe.com', '+4417752387', NULL, NULL, NULL, NULL, NULL, 'active', '1', 'this is a test resturent ', NULL, '1', '#e94d1d', 'full', 'false', 'Bob', 'manager', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ov_review`
--

CREATE TABLE IF NOT EXISTS `ov_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `review_customer_id` int(11) DEFAULT NULL,
  `review_restaurant_id` int(11) DEFAULT NULL,
  `review_rating` int(11) DEFAULT NULL,
  `review_text` text,
  `review_date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ov_review`
--

INSERT INTO `ov_review` (`id`, `review_customer_id`, `review_restaurant_id`, `review_rating`, `review_text`, `review_date`) VALUES
(1, 1, 1, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1476287257'),
(2, 1, 1, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1476287257'),
(3, 1, 1, 5, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '1476287257'),
(5, 1, 1, 5, 'Test Comment', '1476469026'),
(6, 1, 1, 4, 'Another Test ', '1476472929');

-- --------------------------------------------------------

--
-- Table structure for table `ov_vat`
--

CREATE TABLE IF NOT EXISTS `ov_vat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vat_name` varchar(50) DEFAULT NULL,
  `vat_value` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
