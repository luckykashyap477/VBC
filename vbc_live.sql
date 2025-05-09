-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2025 at 07:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vbc_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(5, 'sahil verma', 'sahil@gmail.com', '12345', 'croppedImage_1531040053949.png', '9625136114', 'india', 'WEB DEVELOPER', 'I AM Sahil Verma');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(20) NOT NULL,
  `banner_text1` varchar(300) NOT NULL,
  `banner_text2` varchar(300) NOT NULL,
  `banner_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_text1`, `banner_text2`, `banner_image`) VALUES
(1, 'End Of Season Sale', 'Last Chance to get', 'banner3.jpg'),
(3, 'Our Latest Fashion Editorials', 'cupidatat non proident', 'banner2.jpg'),
(4, 'Flat 50% Discount', 'Hot Offer Today Only', 'banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(100) NOT NULL,
  `box_icon` varchar(100) NOT NULL,
  `box_title` varchar(255) NOT NULL,
  `box_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_icon`, `box_title`, `box_desc`) VALUES
(4, 'fa fa-trash', 'BEST IN MARKET', 'offer'),
(6, 'fa fa-shipping-fast fa-5', 'FAST SERVICE', 'raw'),
(7, 'fa fa-user', 'EDIT YOURSELF', 'edit'),
(8, 'fa fa-trash', 'DELETE EVERYTHING', 'delete');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `customer_id`, `customer_email`, `ip_add`, `qty`, `size`) VALUES
(30, 31, 'vijay@hh.com', '', 3, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Daily Use', 'Daily Use'),
(2, 'Grocery', 'Grocery'),
(3, 'Garments', 'Garments'),
(4, 'Cosmetics', 'Cosmetics'),
(5, 'Fashion', 'Fashion'),
(6, 'Photo & Gifts', 'Photo & Gifts'),
(7, 'Home Decor', 'Home Decor\r\n'),
(8, 'Sports', 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(31, 'Vijay', 'vijay@hh.com', '827ccb0eea8a706c4c34a16891f84e7b', 'India', 'Ghaziabad', '803297043', 'C-600, Nandgram, Ghaziabad', 'git profile pic.png', '1'),
(41, 'Aditya', 'adi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'India', 'Ghaziabad', '994332633', 'A-Block', 'user (1).png', '::1'),
(42, 'Sahil', 'sahil@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'India', 'Hapur', '3634666666', 'kala Kua', 'user (1).png', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(48, 31, 32, 99, 8757586, 1, 'M', '2024-09-30 09:01:32', 'pending'),
(49, 31, 32, 99, 8757586, 1, 'M', '2024-09-30 08:59:53', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `invoice_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(100) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_id`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES
(18, 236385455, 342, 'Paytm', 232323, '2021-05-18'),
(20, 1601455995, 599, 'google pay', 232323, '2021-05-11'),
(21, 1601455995, 599, 'Bank transfer', 112121, '2021-05-10'),
(22, 2098939645, 299, 'Bank transfer', 232323, '2021-06-17'),
(23, 819417364, 544, 'google pay', 2147483647, '2024-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `skucode` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` float NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `quantity`, `skucode`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`) VALUES
(1, 0, 2, 10, '1445413724', '2024-10-03 15:58:38', 'Vedaka Premium Unpolished Toor Dal, 500g', 'g1.jpg', 'g1.1.jpg', 'g1.2.jpg', 105, 'Brand  Vedaka\r\nItem Weight	500 Grams\r\nSpeciality	No artificial colors, No Preservatives\r\nItem Form	Whole\r\nDiet Type	Vegetarian\r\nPackage Weight	0.48 Kilograms\r\nVariety	Pigeon Peas', 'Toor Dal'),
(2, 0, 2, 10, '1717781516', '2024-10-03 16:02:26', 'Vedaka Premium Unpolished Red Rajma, 500 g', 'g2.jpg', 'g2.1.jpg', 'g2.2.jpg', 100, '\r\nBrand	Vedaka\r\nItem Weight	500 Grams\r\nSpeciality	No artificial colors, No Preservatives\r\nItem Form	Whole\r\nDiet Type	Vegetarian\r\nPackage Weight	0.51 Kilograms\r\nVariety	Kidney', 'Rajma'),
(3, 0, 2, 10, '1449581073', '2024-10-04 17:54:39', 'Tata Tea Premium | Desh Ki Chai | Unique Blend Crafted For Chai Lovers Across India | Black Tea ', 'g3.jpg', 'g3.2.jpg', 'g3.1.jpg', 450, '\r\nBrand	Tata Tea Premium\r\nItem Form	Powder\r\nFlavour	Black Tea\r\nTea Variety	Black\r\nNet Quantity	1500.0 gram\r\nDiet Type	Vegetarian', 'Tata Tea'),
(4, 0, 2, 10, '813082375', '2024-10-03 16:09:32', 'Taj Mahal Sukoon Wali Chai - 250gms | Ashwagandha and Rose | Relaxing & Refreshing Tea', 'g4.jpg', 'g4.2.jpg', 'g4.1.jpg', 180, 'Brand	Taj Mahal\r\nItem Form	Loose Leaves\r\nFlavour	Rose\r\nTea Variety	Assam\r\nNet Quantity	250.0 gram\r\nNumber of Items	1\r\nCaffeine Content	Medium Caffeine\r\nItem Weight	250 Grams\r\nRecommended Uses For Product	Stress Relief\r\nItem dimensions L x W x H	9 x 6 x 12.4 Centimeters', 'Taj Mahal Tea'),
(7, 0, 2, 10, '1825539769', '2024-10-04 08:10:03', 'Vanish 800 Ml, All In One Stain Remover | Removes Tough Stains & Brightens Colours ', 'g6.jpg', 'g6.1.jpg', 'g6.2.jpg', 215, '\r\nBrand	Vanish\r\nItem Form	Liquid\r\nScent	Unscented\r\nNet Quantity	800.0 millilitre\r\nMaterial Type Free	Chlorine Free\r\nMaterial Feature	Scented\r\nNumber of Items	1\r\nFormulation Type	Regular, Concentrated\r\nSpecific Uses For Product	Whitening, Stain Remover, Brightening\r\nItem Weight	800 Grams', 'Vanish'),
(8, 0, 2, 10, '118839290', '2024-10-04 08:11:08', 'Tide Plus Double Power Detergent Washing Powder - 4 Kg + 1 Kg Free (Jasmine And Rose)', 'g7.jpg', 'g7.1.jpg', 'g7.2.jpg', 532, 'Brand	Tide\r\nItem Form	Powder\r\nScent	Jasmine & Rose\r\nNet Quantity	5000.0 gram\r\nMaterial Type Free	Bleach Free\r\nMaterial Feature	Natural\r\nNumber of Items	1\r\nFormulation Type	Cold Water\r\nSpecific Uses For Product	Whitening, Dirt Remover, Stain Remover, Cleaning\r\nItem Weight	5 Kilograms', 'Tide'),
(9, 0, 2, 10, '1186783103', '2024-10-04 07:55:17', 'Aashirvaad Atta with Multigrains, 10kg + 1kg Free Inside, High Fibre, Zero Maida', 'g8.jpg', 'g8.2.jpg', 'g8.1.jpg', 1180, '\r\nBrand	Aashirvaad\r\nItem Weight	11 Kilograms\r\nAllergen Information	Wheat, Oat, Soy\r\nSpeciality	Vegetarian\r\nDiet Type	Vegetarian\r\nPackage Weight	11.07 Kilograms\r\nItem Form	Flour\r\nNumber of Items	1\r\nNet Quantity	11000.0 gram\r\nManufacturer	ITC Limited, ITC Limited, Kolkata', 'Aashirvaad'),
(10, 0, 2, 10, '926214237', '2024-10-04 07:58:50', 'Vedaka Maida (Refined Wheat flour), 1 kg', 'g9..webp', 'g9.1.jpg', 'g9.2.jpg', 59, '\r\nBrand	Vedaka\r\nItem Weight	1 Kilograms\r\nSpeciality	No Artificial Colours\r\nDiet Type	Vegetarian\r\nPackage Weight	1.01 Kilograms\r\nItem Form	Dry\r\nNumber of Items	1\r\nNet Quantity	1000.0 gram', 'maida'),
(11, 0, 2, 10, '1268389747', '2024-10-04 08:03:25', 'Tata Simply Better Pure & Unrefined Cold Pressed Groundnut (Peanut) Oil,Kolhu/Kacchi Ghani/Mara Chekku/Ganuga,Naturally Cholesterol Free,1L,Groundnut Oil Rich Aroma & Flavour Of Real Groundnuts', 'g10.jpg', 'g10.2.jpg', 'g10.1.jpg', 340, '\r\nBrand	Tata Simply Better\r\nDiet Type	Vegetarian\r\nFlavour	Peanut\r\nNet Content Volume	1000 Millilitres\r\nSpecial Feature	Unrefined Å“uf, Cold Pressed\r\nLiquid Volume	1 Litres\r\nItem Package Quantity	1\r\nShelf Life	12 Months\r\nItem Form	Oil\r\nSpeciality	Cholesterol Free', 'oil'),
(12, 0, 2, 10, '222379325', '2024-10-04 08:07:24', 'Vedaka Cold Pressed Peanut (Groundnut) Oil Bottle | 100% Pure & Unrefined | Contains MUFA & Omega-6 PUFA |Contains Tocopherols which are natural antioxidants. | 5 litre', 'g11.1.jpg', 'g11.jpg', 'g11.2.jpg', 1350, '\r\nBrand	Vedaka\r\nDiet Type	Vegetarian\r\nFlavour	Groundnut\r\nNet Content Volume	5 Litres, 5000 Millilitres\r\nSpecial Feature	Cold Pressed\r\nLiquid Volume	5 Litres\r\nItem Package Quantity	1\r\nItem Form	Liquid\r\nSpeciality	suitable for vegeterians\r\nRecommended Uses For Product	Cooking,Frying,Sauteing', 'oil'),
(13, 0, 5, 10, '92547517', '2024-10-04 08:31:05', 'Van Heusen', 'v1.jpg', 'v2.jpg', 'v3.jpg', 1342, 'Step out looking sharp in these Black Solid Slim Fit chinos from Van Heusen Sport by House of Van Heusen.', 'pants'),
(14, 45, 4, 200, '2010835513', '2024-10-04 08:31:25', 'Face serum', 'serum.jpg', 'serum2.jpeg', 'serum 3.jpg', 400, 'Face Serum ', 'Face serum that enhance natural beauty'),
(16, 44, 4, 154, '341256822', '2024-10-04 08:36:41', 'Lakme eye liner|| smudge proof 9ml', 'liner.jpeg', 'eye liner 2.jpeg', 'eye3.jpeg', 199, 'Smudge proof Eye Liner', 'Eye Liner'),
(17, 0, 5, 10, '327576165', '2024-10-04 08:38:38', 'Van Heusen', 'q1.jpg', 'q2.jpg', 'q4.jpg', 799, 'These snug fit yoga pants with functional side pockets are enhanced with high stretch to aid your movement. Its moisture wicking finish helps you stay cool and dry. Practice yoga in comfort and style with these lightweight pants.\r\n\r\n', 'pants'),
(18, 0, 5, 10, '1910933315', '2024-10-04 08:42:47', 'Allen Solly', 'a1.jpg', 'a3.jpg', 'a2.jpg', 647, 'Ace weekend dressing in this blue solid Polo Neck T-shirt from Allen Solly by Allen Solly.', 'tshirt'),
(19, 44, 4, 300, '1592013383', '2024-10-04 08:43:51', 'Lakme foundation', 'foun.jpeg', 'found.jpeg', 'found2.jpeg', 399, '', 'foundation'),
(20, 0, 5, 10, '376275461', '2024-10-04 08:48:27', 'Van Heusen', 'w2.jpg', 'w1.jpg', 'w3.jpg', 948, 'Create an effortlessly casual look with these high waisted ruffled pants that are equipped with functional pockets and made from peachy soft fabric for extra comfort and added style.', 'fit pants'),
(25, 0, 5, 10, '1993694446', '2024-10-04 10:33:29', 'idaLia Straight Cotton Kurta with Palazzo Pant Set - Ethnic Kurta Set for Women', 'f111.jpg', 'f112.jpg', 'f113.jpg', 885, '\r\nMaterial compositionCotton\r\nLengthCalf-long\r\nSleeve type3/140 Sleeve\r\nNeck styleRound Neck\r\nStyleRegular\r\nMaterial typeCotton\r\nCountry of OriginIndia\r\n', 'women suits '),
(26, 0, 5, 10, '2131767976', '2024-10-04 10:35:25', 'Lymio Men Kurta || Kurta for Men || Men Ethnic Kurta', 'kurta3.jpg', 'kurta 2.jpg', 'kurta1.jpg', 449, 'Material compositionCotton Bland\r\nSleeve typeLong Sleeve\r\nNeck styleMandarin Neck\r\nStyleMen kurta\r\nCare instructionsMachine Wash\r\nDesign nameWoven\r\nCountry of OriginIndia\r\n', 'men'),
(27, 0, 7, 10, '116098961', '2024-10-04 12:48:00', 'Street27Â® Cute Outer Space Astronaut Figurine Action Figure Toys Statue for Showpiece Home Living Room Decor Office Desktop Decoration Car Dashboard', '41gKUnr5BIL._SX679_.jpg', '51IslXXrzyL._SX679_.jpg', '61eKC9GNGqS._SX679_.jpg', 450, '\r\nTheme	Space\r\nBrand	Street27\r\nColour	Meditiate - Golden\r\nStyle	Meditiate_Golden\r\nMaterial	Resin\r\nOccasion	all occasion\r\nProduct Dimensions	10L x 7W x 10H Centimeters\r\nCartoon Character	Astronaut\r\nSpecific Uses For Product	Cake\r\nSpecial Feature	non toxic', 'Showpiece'),
(28, 0, 7, 10, '1135494497', '2024-10-04 12:51:24', 'Xtore Creative Resin Golden Reindeer Sculptures', '71tHmj0k9YL._SX679_.jpg', '51Df6dZHoGL.jpg', '618HcYpBELL._SX679_.jpg', 599, '\r\nTheme	Nature\r\nBrand	Xtore\r\nColour	Blue Reindeer\r\nStyle	Modern\r\nMaterial	Resin\r\nProduct Dimensions	32L x 19W x 7H Centimeters\r\nCartoon Character	Deer\r\nSpecific Uses For Product	Indoor, Home DÃ©cor\r\nSpecial Feature	Hand Crafted\r\nAge Range (Description)	Adult, Kid', 'Sculptures'),
(29, 0, 5, 10, '805936153', '2024-10-04 12:54:57', 'XtoreÂ¨ Modern Elite Swan Pair Ceramic Art Figure', '61X9ZXwAonL._SX679_.jpg', '61F-4UqdJuS._SX679_.jpg', '61BczyW4ZYL._SX679_.jpg', 699, '\r\nTheme	Love\r\nBrand	Xtore\r\nColour	Elite Swan - White & Gold\r\nStyle	White Elite Swan\r\nMaterial	Ceramic\r\nProduct Dimensions	40L x 130W x 40H Millimeters\r\nCartoon Character	Swan\r\nSpecific Uses For Product	Home Decor\r\nSpecial Feature	Hand Crafted\r\nProduct Dimensions	4D x 13W x 4H Centimeters', 'Ceramic'),
(30, 0, 7, 10, '159539526', '2024-10-04 13:20:41', 'Dekorly Artificial Potted Plants, 8 Pack Artificial Plastic Eucalyptus Plants Small Indoor Potted Houseplants', '61825WAStPL._SX679_.jpg', '71XRUe93gZL._SX679_.jpg', '81mXfep2EfL._SX679_.jpg', 490, '\r\nBrand	Dekorly\r\nPlant or Animal Product Type	Eucalyptus\r\nColour	SET 0F 8\r\nMaterial	Plastic\r\nProduct Dimensions	6D x 6W x 15H Centimeters\r\nRecommended Uses For Product	Home decor, Office decor, TV cabinet decor, Table decor, Drawing room decor, Lobby decor, Balcony decor and other gifting purposes.Home decor, Office decor, TV cabinet decor, Table decor, Drawing room decor, Lobby decor, Balcony decor and other gifting purposes.\r\nSpecific Uses For Product	Home dÃ©cor , Office dÃ©cor\r\nIndoor/Outdoor Usage	Indoor\r\nPackage Information	Planter\r\nOccasion	seasons', 'Faux'),
(31, 0, 7, 10, '1658771747', '2024-10-04 13:23:04', 'Furnish Craft Alloy Steel Rust Proof Wall Round Mirror - Ideal Mirror For Bathroom', '81z0nhvcstL._SY879_.jpg', '71D84hmJ7iL._SY879_.jpg', '81r20WXmJlL._SY879_.jpg', 2299, '\r\nBrand	Furnish Craft\r\nRoom Type	Office, Bathroom, Dining Room\r\nShape	Round\r\nProduct Dimensions	61L x 61W Centimeters\r\nFrame Material	Metal\r\nStyle	Gold\r\nMounting Type	Wall Mount\r\nFinish Type	Painted\r\nSurface Recommendation	Glass\r\nSpecial Feature	362 Degree, Unbreakable, Rustproof, Lightweight, Shatterproof\r\n', 'Decorative'),
(32, 0, 7, 10, '1244604696', '2024-10-04 13:25:13', 'PREMIUM DECOR HUB Metal Analog Wall Clock-For Home Decor This Handcrafted Wall Clock For Living Room, Drawing Room With Silent Clock No More Tick-Tock Quartz Mechanism (Width: 70 Cm, Golden & Blue)', '7120+uWV1xL._SX679_.jpg', '61nsmyO-dzL._SX679_.jpg', '61XF-vRBlXL._SX679_.jpg', 1299, '\r\nBrand	PREMIUM DECOR HUB\r\nColour	Golden and Blue\r\nDisplay Type	Analog\r\nStyle	Art Deco\r\nSpecial Feature	Silent Clock\r\nProduct Dimensions	70W x 52H Centimeters\r\nPower Source	Battery Powered\r\nAge Range (Description)	Adult\r\nRoom Type	Kitchen, Living Room, Bedroom, office, Dining Room\r\nShape	Flower', 'Quartz'),
(33, 0, 7, 10, '632347914', '2024-10-04 13:28:56', 'LADROX Lavish Matte Home DÃ©cor Elephant Set ', '71-87My+-NL._SX679_.jpg', '51h8xyr7TdL._SX679_.jpg', '71w81FtWzrL._SX679_.jpg', 3320, '\r\nTheme	Love\r\nBrand	LADROX\r\nColour	Elephant Couple- Cream and Brown\r\nStyle	Brown Cream Elephant\r\nMaterial	Ceramic\r\nProduct Dimensions	14L x 12W x 10H Centimeters\r\nCartoon Character	Elephant\r\nSpecial Feature	handmade\r\nNumber of Pieces	2\r\nItem Weight	1200 Grams', 'Elephant'),
(34, 0, 5, 100, '473637130', '2024-10-04 13:58:19', ' BANARASI JAQUARD LEHENGA CHOLI', '61yaUJVFsHL._SY741_.jpg', '71nzlHamSNL._SY741_.jpg', '71cz7FQFmnL._SY741_.jpg', 999, 'Product Dimensions â€ : â€Ž 12 x 10 x 2 cm; 350 g\r\nDate First Available â€ : â€Ž 10 June 2024\r\nManufacturer â€ : â€Ž SEFL\r\nASIN â€ : â€Ž B0D6N8PNW8\r\nItem part number â€ : â€Ž AK-02\r\nCountry of Origin â€ : â€Ž India\r\nDepartment â€ : â€Ž womens\r\nManufacturer â€ : â€Ž SEFL, 7624020360\r\nPacker â€ : â€Ž 7624020360\r\nItem Weight â€ : â€Ž 350 g\r\nItem Dimensions LxWxH â€ : â€Ž 12 x 10 x 2 Centimeters\r\nGeneric Name â€ : â€Ž lehenga choli', 'lehnga'),
(35, 0, 5, 109, '798692250', '2024-10-04 14:00:35', 'JM_VNT Women Embroidered Net With Satin Blend Ethnic wear Semi-stitched Lehenga Choli With Dupatta Set', '71OCF5t4UwL._SY741_.jpg', '71W24Vk4q1L._SY741_.jpg', '712-bWUae-L._SY741_.jpg', 1350, 'Material compositionNet\r\nWeave typeNet\r\nFinish typeSemi-stitched\r\nPatternSolid\r\nCare instructionsHand Wash Only\r\nSleeve typeHalf Sleeve\r\nCountry of OriginIndia', 'lehnga'),
(36, 0, 5, 109, '319490374', '2024-10-04 14:04:15', 'Material compositionGeorgette Weave typeWoven Finish typeReadymade PatternFloral Care instructionsHand Wash Only Sleeve typeShort Sleeve Country of OriginIndia', '51p92myHQxL._SY741_.jpg', '71Jesmr6yHL._SY741_.jpg', '61tFOhdit9L._SY741_.jpg', 799, 'Material compositionGeorgette\r\nWeave typeWoven\r\nFinish typeReadymade\r\nPatternFloral\r\nCare instructionsHand Wash Only\r\nSleeve typeShort Sleeve\r\nCountry of OriginIndia', 'lehnga'),
(37, 0, 5, 10, '272190647', '2024-10-04 14:06:43', 'Lymio Men Cargo |', '61tfGGTP2UL._SY741_.jpg', '71fQXGCHFwL._SY741_.jpg', '71kNq5tWm5L._SY741_.jpg', 899, 'Material type Cotton\r\nLength Long Length\r\nStyle Cargo\r\nClosure type Drawstring\r\nCare instructions Machine Wash\r\nFit type Loose', 'cargo'),
(38, 0, 7, 10, '607869803', '2024-10-04 15:39:46', 'Paradigm Pictures 30.5 inch Big Wind Chimes for Home Balcony Positive Energy- Positive Energy Items (Rose Gold 6 Pipe Wind Chime)', '71KutWs1v6L._SX679_.jpg', '71YlUBP9amL._SX679_.jpg', '713rib-sR1L._SX679_.jpg', 1699, '\r\nBrand	PARADIGM PICTURES\r\nColour	BLACK\r\nMaterial	Metal\r\nStyle	Tube\r\nSpecial Feature	Sturdy', 'Chimes'),
(40, 0, 7, 10, '202774701', '2024-10-04 16:31:02', 'Global Grabbers Polyresin Table Top Indoor Outdoor Water Fall Fountain with LED Lights Home Decor Decoration Gift Gifting Items-GOL_BRO-B4-(000)', '91cdi+hxVCL._SX679_.jpg', '91k3JV4apRL._SX679_.jpg', '912i7h91vxL._SX679_.jpg', 2499, '\r\nColour	Multicolour\r\nMaterial	Polystone\r\nBrand	Global Grabbers\r\nSpecial Feature	Adjustable Speed Control, Increase Elegance And Adds The Aura Of Peace And Calmness, Perfect Gift That Your Loved Ones Will Always Love, Flowing Water Good For Vastu Spread Positivity, Stress Buster Calming Water Flowing SoundAdjustable Speed Control, Increase Elegance And Adds The Aura Of Peace And Calmness, Perfect Gift That Your Loved Ones Will Always Love, Flowing Water Good For Vastu Spread Positivity,â€¦ See more\r\nProduct Dimensions	25L x 25W x 37H Centimeters\r\nItem Weight	1500 Grams\r\nPower Source	Corded Electric\r\nManufacturer	Global Grabbers, Global Grabbers\r\n', 'Fountain'),
(41, 0, 7, 10, '21584563', '2024-10-04 16:33:39', 'Encasa XO Grommet Long Door Curtain 9 ft, Solid Dyed Cotton Panama Fabric, Light-Filtering, Curtains for Kitchen, Bedroom, Living Room (137x275 cm), Grey, Set of 2', '51lUgT7jcYL._SX679_.jpg', '51EnNseUzxL._SX679_.jpg', '41bDJyGtTaL._SX679_.jpg', 1785, '\r\nBrand	Encasa XO\r\nColour	Grey\r\nMaterial	Cotton\r\nProduct Dimensions	2.75L x 1.37W Meters\r\nOpacity	60\r\nSpecial Feature	Light Filtering\r\nRoom Type	Bedroom\r\nStyle	Grommet\r\nPattern	Solid\r\nTheme	Solid', 'Grommet'),
(42, 0, 4, 10, '1842475995', '2024-10-04 16:44:29', 'Insight Cosmetics Pro Concealer Palette Waterproof Concealer With Full Coverage |Easily Blendable Concealer| 3 in 1 Palette- Conceal Corect & Contour | Crease Resistance |Long Lasting |Oil Control with Matte Finish | Toxic & Cruelty Free | Concealer', '61X+M5dE-uL._SX522_.jpg', '61v0rk5GrJL._SX522_.jpg', '61sCGynmekL._SX522_.jpg', 170, '\r\nColour	Concealer\r\nBrand	INSIGHT\r\nFinish Type	Natural\r\nCoverage	Medium\r\nItem Form	Powder\r\nProduct Benefits	Colour Correction\r\nSkin Tone	Fair\r\nSkin Type	Combination\r\nItem dimensions L x W x H	7 x 2 x 7 Centimeters\r\nItem Weight	15 Grams', 'Palette'),
(43, 0, 4, 10, '822711686', '2024-10-04 16:46:53', 'Maybelline New York Matte Lipstick, Intense Colour, Keeps Lips Moisturised, 660 Touch of Spice, Color Sensational Creamy Matte Lipstick, 3.9g', '51zzJw-JgQL._SX522_.jpg', '91ELAnkbdmL._SX522_.jpg', '61gI2onAHsL._SX522_.jpg', 164, '\r\nBrand	Maybelline\r\nColour	660 Touch of Spice\r\nSkin Type	Dry\r\nItem Form	Stick\r\nFinish Type	Matte\r\nProduct Benefits	Hydrating\r\nSpecial Ingredients	Shea Butter\r\nMaterial Type Free	Paraben Free\r\nCoverage	Full\r\nSpeciality	Infused with Shea Butter', 'Lipstick'),
(44, 0, 4, 10, '935527009', '2024-10-04 16:50:52', 'Spawake Moisture Glow Natural Bb Cream 01 Light Beige, Spf27/Pa+++, All Skin Types, 30G', '716uoIG94NL._SX679_.jpg', '51m0MfdSp3L._SX679_.jpg', '61evSDC02TL._SX679_.jpg', 257, '\r\nItem Form	Cream\r\nColour	New Light Beige-30g\r\nSkin Type	All\r\nFinish Type	Natural\r\nRecommended Uses For Product	Uneven Skin Tone\r\nMaterial Type Free	Alcohol Free\r\nPackage Information	Tube\r\nBrand	Spawake\r\nCoverage	Medium, Light\r\nProduct Benefits	Colour Correction', 'bbcream'),
(45, 0, 4, 120, '871778533', '2024-10-04 17:00:33', 'Lotus Herbals WhiteGlow Skin Whitening And Brightening Gel, Face Cream with SPF-25, for all skin types, 40g', '61KgKODCq9L._SX522_.jpg', '61zr9LEtj7L._SX522_.jpg', '61xWjXW4QHL._SX522_.jpg', 168, 'Brand	Lotus Herbals\r\nItem Volume	100 Millilitres\r\nItem dimensions L x W x H	50 x 50 x 50 Millimeters\r\nAge Range (Description)	Adult\r\nSpecial Feature	Lightweight\r\nActive Ingredients	Grape Extract: Act as exfoliator & helps active ingredients penetrate into the skin. Mulberry Extract: Reduces melanin production. Milk Enzymes: Blocks melanin pathways. Saxifrage Extract: Act as an anti-oxidant & prevents damage from UV radiation.Grape Extract: Act as exfoliator & helps active ingredients penetrate into the skin. Mulberry Extract: Reduces melanin production. Milk Enzymes: Blocks melanin pathways. Saxifrage Extract: Act as an anti-oxidant & prevâ€¦ See more\r\nSkin Type	All\r\nNumber of Items	1\r\nScent	Cream Fresh\r\nItem Form	Cream\r\n', 'lotus'),
(46, 0, 4, 190, '1948136387', '2024-10-04 17:04:09', ' Click to open expanded view Olay Natural Aura Day Cream with SPF 15 | Glowing Radiance Cream | With Niacinamide and Vitamin E | Normal, Oily, Dry, Combination Skin | 50g', '41cVMz-J1CL._SY679_.jpg', '51VnyxWpp+L._SY679_.jpg', '61o4hQMvinL._SY679_.jpg', 381, '\r\nScent	UnscentedÃ‚\r\nProduct Benefits	Nourishing,Moisturizing\r\nItem Weight	114 Grams\r\nNumber of Items	1\r\nNet Quantity	50.0 gram\r\nSkin Type	all\r\nActive Ingredients	Zinc Oxide\r\nItem dimensions L x W x H	8 x 6.4 x 8 Centimeters\r\nBrand	Olay\r\nItem Volume	50 Millilitres', 'cream'),
(47, 0, 4, 190, '977479032', '2024-10-04 17:07:03', 'LAKMÃ‰ Absolute Perfect Radiance Brightening Night Cream 50 g|| Daily Repair Face Moisturizer for Illuminated|| Glowing Skin -With Glycerin & Niacinamide', '51Yu3lwEPLL._SX522_.jpg', '51D5jXsZHpL._SX522_.jpg', '61IKsWQSi6L._SX522_.jpg', 399, '\r\nBrand	LAKMÃ‰\r\nItem Volume	50 Millilitres\r\nItem dimensions L x W x H	23.5 x 16.5 x 8.2 Centimeters\r\nAge Range (Description)	Adult\r\nSpecial Feature	Lightweight\r\nActive Ingredients	Menthol\r\nSkin Type	All\r\nNumber of Items	1\r\nScent	Argan Oil\r\nItem Form	Cream', 'Lakme'),
(48, 0, 4, 10, '1394791135', '2024-10-04 17:12:07', 'FACES CANADA Weightless Stay Matte Finish Compact Powder - Beige, 9 g | Non Oily Matte Look | Evens Out Complexion | Hides Imperfections | Blends Effortlessly | Pressed Powder For All Skin Types', '61EnnzpSsuL._SX522_.jpg', '81RfFaascNL._SX522_.jpg', '71JOOiVKiYL._SX522_.jpg', 123, '\r\nBrand	FACESCANADA\r\nItem Form	Pressed\r\nColour	Beige 03\r\nFinish Type	Matte\r\nSkin Type	All\r\nCoverage	Light\r\nProduct Benefits	Oil Control\r\nSun Protection	20 SPF\r\nModel Name	av2022-FACESCANADA-faces canada weightless matte finish compact-f9efb66c\r\nNumber of Items	1', 'facecanada'),
(49, 0, 8, 10, '201507310', '2024-10-04 17:32:42', 'Nivia Shining Star Football/32 Panel/Rubberized Stitched/International Match Ball/ Size - 5 (Multicolor)', '61X5h4gHP2L._SX679_.jpg', '81liJvqL7uL._SX679_.jpg', '81nQlTDWVoL._SX679_.jpg', 899, '\r\nBrand	Nivia\r\nMaterial	Rubber\r\nColour	White/Blue\r\nAge Range (Description)	Adult\r\nItem Weight	500 Grams', 'football'),
(50, 0, 8, 10, '2112557884', '2024-10-04 17:35:35', 'FEROC 2 Pieces Aluminium Badminton Racket with 3 Pieces Feather Shuttles with Full-Cover Set,Aluminum, Multicolor (Multicolor)', '71KfSXQ8doL._SX679_.jpg', '41M+RdbhhdL._SX679_.jpg', '61JVLZEJSPL._SX679_.jpg', 560, '\r\nSize	One Size\r\nBrand	FEROC\r\nGrip Size	3 1/4 inches\r\nSport	Badminton\r\nMaterial	Aluminium', 'badminton'),
(51, 0, 8, 10, '557247362', '2024-10-04 17:37:59', 'Ketsy Basket Ball Ring with Net and Basketball Size 7 Nos. for Home/Professional Use', '51lgOts5nQL._SX679_.jpg', '517gMALn8mL.jpg', '41om1SjczTL.jpg', 799, '\r\nBrand	KETSY\r\nMaterial	Iron\r\nColour	orange\r\nItem Weight	450 Grams\r\nIndoor/Outdoor Usage	Indoor\r\nTarget Audience	Unisex Adults\r\nModel Name	BR2\r\nIncluded Components	1 ring, 1 net, 1 basketball\r\nStyle	Classic\r\nManufacturer	S Y ENTERPRISES, 9464294311', 'basketball'),
(52, 0, 8, 10, '1449328892', '2024-10-04 17:40:44', 'Jaspo Hybrid Plastic Cricket Bat (PU Filled Inside) Composite Hard Plastic Bat Suitable for Soft Cricket Ball Recommended for Kids/Junior/Senior/Boys/Girls â€“ Made in India (Size-5 (BAT + Ball))', '71GGYcU5CQL._SX679_.jpg', '71OT0WnyLDL._SX679_.jpg', '71XhtOP-1xL._SX679_.jpg', 899, '\r\nSize	5\r\nSport	Cricket\r\nBrand	jaspo\r\nMaterial	Plastic\r\nColour	multicolor', 'batball'),
(53, 0, 8, 10, '1444070348', '2024-10-04 17:43:54', 'Sportneer Table Tennis Racket Sportneer 2 PCS 4 Star Table Tennis Racket and 4 PCS Balls Red and Black Double-Sided Table Tennis Set with a Storage Bag for Games School Exercise Gift for Boys Girls', '81nt5NxRDvL._SX679_.jpg', '71jmy8wygtL._SX679_.jpg', '61zrX0cPFwL._SX679_.jpg', 830, '\r\nBrand	Sportneer\r\nColour	Black,Red\r\nMaterial	Wood\r\nProduct Dimensions	29L x 17.5W x 4.5H Centimeters\r\nSport	exercise & fitness\r\nItem Weight	510 Grams\r\nAssembly Required	Yes\r\nNumber of Players	2\r\nBase Material	Wood\r\nFrame Material	Wood', 'tennis'),
(54, 0, 8, 10, '1086365152', '2024-10-05 07:36:14', 'FitBox Sports Adjustable Hand Grip Strengthener (10kg - 40kg) Finger Excerciser, Hand Gripper For Men & Women', '61rUI3ktxaL._SX679_.jpg', '61AR1814HrL._SX679_.jpg', '61xlaBuPcYL._SX679_.jpg', 299, '\r\nColour	Black Orange 10kg - 40kg\r\nMaterial	Aluminium, Plastic, Iron\r\nBrand	FitBox Sports\r\nItem Weight	100 Grams\r\nStyle	Black Orange 10kg - 40kg', 'grip'),
(55, 0, 8, 10, '96056883', '2024-10-05 07:38:12', 'Boldfit Skipping Rope for Men and Women Jumping Rope With Adjustable Height Speed Skipping Rope for Kids, Women, Girls Rassi Jumping Men for Exercise, Gym, Sports Fitness - Black, Polyvinyl Chlorine', '71l2-gWOnpL._SX679_.jpg', '61TRkjj6K-L._SX679_.jpg', '61yYL2uxwwL._SX679_.jpg', 219, '\r\nBrand	Boldfit\r\nTarget Audience	Adult\r\nSpecial Feature	Adjustable Length\r\nRecommended Uses For Product	Exercise and Fitness\r\nMaterial	Polyvinyl Chlorine (PVC)', 'rope'),
(56, 0, 8, 10, '1044140953', '2024-10-05 07:42:41', ' Roll over image to zoom in   VIDEO      ProberosÂ® 2.5m Golf Putting Green Mat with Auto Ball Return, Golf Practice Training Aid for Outdoor & Indoor, Golf Play Set Trainer Set Gifts for Golf Lover', '61gcwwaxdVL._SX679_.jpg', '71AYiAooD5L._SX679_.jpg', '71GdqC2rYjL._SX679_.jpg', 4999, '\r\nMaterial	Down\r\nColour	Black\r\nBrand	PROBEROS\r\nSize	Free Size\r\nItem Weight	3200 Grams', 'golf'),
(57, 0, 8, 10, '2066518950', '2024-10-05 07:45:23', 'Bodyband Abs Roller for Men & Women Stomach Abs Roller Wheel for Home Workout, Gym Ab Roller for Men Abs Workout Equipment for Abdominal Ab Roller Home Exercise Equipment With Knee Mat -Yellow Black', '71Vt2Pgy4hL._SX679_.jpg', '71MqbdqYtzL._SX679_.jpg', '71ZlRZeFwXL._SX679_.jpg', 349, '\r\nBrand	Bodyband\r\nColour	Blackyellow\r\nMaterial	Plastic\r\nItem Weight	350 Grams\r\nStyle	Ab Roller', 'roller'),
(58, 0, 8, 100, '1255774620', '2024-10-05 07:49:24', 'MUNDET WALA Home Gym Set, Steel Home Gym Combo 28MM w/ 3Ft Curl, 5Ft Straight Rod, Pair Nut Dumbbell Rod, Steel Weight Plates, Gym Equipment for Home Workout (Steel 10KG Home Gym Combo)', '61mfqrETVOL._SX679_.jpg', '61lKknWGEXL._SX679_.jpg', '61QImKi2KDL._SX679_.jpg', 4799, '\r\nItem Weight	105 Kilograms\r\nBrand	MUNDET WALA\r\nColour	Silver\r\nMaterial	Alloy Steel\r\nProduct Dimensions	120D x 20W x 20H Centimeters', 'gym'),
(59, 0, 6, 10, '578915317', '2024-10-07 09:31:43', 'KUTE HEART Rabbit Soft Toy, Teddy Bear For Girls, Soft Toys For Baby Girl, Cute Plushies, Teddy Bear For Girls, Korean Teddy Bear, Bunny Rabbit Animal Plushies, Rabbit Soft Toys For Girlfriend Gift', '71HgnQz2ORL._SX522_.jpg', '81QqNJL65mL._SX522_.jpg', '71ty-c4a3IL._SX522_.jpg', 499, 'Number of Puzzle Pieces	â€Ž1\r\nAssembly Required	â€ŽNo\r\nMaterial Type(s)	â€ŽPolyester\r\nColour	â€Žwhite\r\nProduct Dimensions	â€Ž27 x 20 x 37 cm; 1 kg\r\nManufacturer recommended age	â€Ž2 months and up\r\nManufacturer	â€Žuniversal toys private limited\r\nCountry of Origin	â€ŽIndia\r\nItem Weight	â€Ž1 kg', 'Bunny'),
(60, 0, 6, 10, '1665649542', '2024-10-07 09:34:40', 'Tinytotem Baby Boy Child Doll Rabbit Soft Toy Gift Toys Pillow for Kids, Girls and Adults Cute Stuffed Animal Plush Bunny Plushie (25cm)', '51UFpauKA7L._SX522_.jpg', '614b5w8abUL._SX522_.jpg', '61nSoESDewL._SX522_.jpg', 295, 'Model Number	â€ŽRabbit-PRT\r\nNumber of Puzzle Pieces	â€Ž1\r\nAssembly Required	â€ŽNo\r\nBatteries Required	â€ŽNo\r\nBatteries Included	â€ŽNo\r\nMaterial Type(s)	â€ŽCotton\r\nColour	â€ŽBaby pink\r\nPackage Dimensions	â€Ž18.2 x 14.2 x 3 cm; 200 g\r\nItem model number	â€ŽRabbit-PRT\r\nManufacturer recommended age	â€Ž12 months - 5 years\r\nManufacturer	â€ŽTinyTotem\r\nCountry of Origin	â€ŽIndia\r\nItem Weight	â€Ž200 g', 'Doll'),
(61, 0, 1, 10, '636545906', '2024-10-07 09:38:26', 'Dettol Original Germ Protection Bathing Soap Bar (400gm) | Kills 99.99% germs, 100g - Pack of 4', '61ClJoc2JiL._SX522_PIbundle-4,TopRight,0,0_AA522SH20_.jpg', '51Y7VOjqCdL._SX522_.jpg', '61NTekCA6gL._SX522_.jpg', 149, '\r\nBrand	Dettol\r\nItem Weight	400 Grams\r\nItem dimensions L x W x H	8.3 x 5.6 x 12.4 Centimeters\r\nScent	Pine\r\nAge Range (Description)	Adult\r\nSkin Type	All\r\nItem Package Quantity	1\r\nProduct Benefits	Germ protection\r\nItem Form	Bar\r\nNumber of Items	4', 'soap'),
(62, 0, 3, 10, '208018850', '2024-10-07 09:45:43', 'HEELIUM Bamboo Gym Vests for Men, Odour Free, Super Soft & Comfortable', '71QNxKyT7EL._SX679_.jpg', '61AfRElDQFL._SX679_.jpg', '71xhqTIjWEL._SX679_.jpg', 799, 'Material compositionBamboo\r\nPatternSolid\r\nFit typeRegular Fit\r\nSleeve typeSleeveless\r\nLengthStandard Length\r\nNeck styleRound Neck\r\nCountry of OriginIndia', 'Bamboo');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL,
  `p_cat_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`p_cat_id`, `p_cat_title`, `p_cat_desc`, `p_cat_img`) VALUES
(42, 'NAILPOLISH', '', 0),
(43, 'BEAUTICREAM', '', 0),
(44, 'LACME', '', 0),
(45, 'SCIN CARE', '', 0),
(50, 'DETERGENT', '', 0),
(51, 'DEODODRANT', '', 0),
(52, 'FACEWASH', '', 0),
(53, 'HAIR GEL', '', 0),
(54, 'HARPIC', '', 0),
(55, 'PERFUME', '', 0),
(58, 'SOAP', '', 0),
(59, 'TOOTHPASTE', '', 0),
(60, 'HANDWASH', '', 0),
(61, 'SHAMPOO', '', 0),
(62, 'HAIR OIL', '', 0),
(63, 'ROOM FRAGRANCE', '', 0),
(65, 'Men T-shirt ', 'Men T-shirt ', 0),
(66, 'FootBall', 'FootBall Sports', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(10) NOT NULL,
  `banner_text1` text NOT NULL,
  `banner_text2` text NOT NULL,
  `banner_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `banner_text1`, `banner_text2`, `banner_image`) VALUES
(1, 'End Of Season Sale', 'Last Chance to get', 'banner3.jpg'),
(2, 'Our Latest Fashion Editorials', 'cupidatat non proident', 'banner2.jpg'),
(3, 'Flat 50% Discount', 'Hot Offer Today Only', 'banner1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`),
  ADD UNIQUE KEY `customer_contact` (`customer_contact`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
