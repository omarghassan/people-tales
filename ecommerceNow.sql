-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2025 at 06:51 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adminname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `adminname`, `email`, `password`, `created_at`) VALUES
(1, 'omar', 'omar@email.com', '', '2025-03-08 21:58:38'),
(2, 'Alaa', 'alaa@email.com', '', '2025-03-08 22:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `best selling`
--

DROP TABLE IF EXISTS `best selling`;
CREATE TABLE IF NOT EXISTS `best selling` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `country-id` int NOT NULL,
  `img_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `session_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `session_id`, `created_at`, `updated_at`) VALUES
(1, 17, '81h8r20sfmqqa23r1gu5ms05bi', '2025-03-09 13:43:47', '2025-03-09 13:43:47'),
(2, NULL, '3l2ebnooq88ogvn6nacu5lfui7', '2025-03-10 02:04:38', '2025-03-10 02:04:38'),
(3, 18, '3l2ebnooq88ogvn6nacu5lfui7', '2025-03-10 06:47:24', '2025-03-10 06:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE IF NOT EXISTS `cart_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cart_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `cart_id` (`cart_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `cart_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(9, 2, 62, 1, '2025-03-10 02:04:38', '2025-03-10 02:04:38'),
(10, 2, 3, 1, '2025-03-10 02:06:05', '2025-03-10 02:06:05'),
(11, 3, 87, 1, '2025-03-10 06:47:24', '2025-03-10 06:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Clothes'),
(2, 'Skincare'),
(3, 'Accessories'),
(4, 'Japanese Tableware'),
(5, 'Japanese Food and Snacks'),
(6, 'Anime and Manga Products'),
(7, 'Italian Food and Beverages'),
(8, 'Furniture'),
(9, 'Palestinian Drink');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`request_id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Omar', 'omar@email.com', 'Hello', '2025-03-05 09:10:12'),
(2, 'Ahmad', 'ahmad@email.com', 'Hello', '2025-03-05 09:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact_requests`
--

DROP TABLE IF EXISTS `contact_requests`;
CREATE TABLE IF NOT EXISTS `contact_requests` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  `banner_image_url` varchar(255) DEFAULT NULL,
  `image1_url` varchar(255) DEFAULT NULL,
  `image2_url` varchar(255) DEFAULT NULL,
  `image3_url` varchar(255) DEFAULT NULL,
  `image4_url` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `description`, `banner_image_url`, `image1_url`, `image2_url`, `image3_url`, `image4_url`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Jordan', 'Jordan is a Middle Eastern country known for its rich history, stunning landscapes, and warm hospitality. Its capital, Amman, is a modern city with deep historical roots. The country is home to famous landmarks such as Petra, an ancient rock-cut city; Wadi Rum, a breathtaking desert; and the Dead Sea, the lowest point on Earth. Jordan has a diverse culture influenced by Bedouin traditions, and Arabic is the official language. Despite having limited natural resources, Jordan has a growing economy, with tourism playing a major role. The country is also known for its delicious cuisine, including mansaf, falafel, and kunafa. Jordan is a peaceful and welcoming nation, making it a great destination for travelers interested in history, culture, and nature.', 'https://www.judethetourist.com/wp-content/uploads/2024/01/Jordans-Ancient-Rose-City.jpg', 'https://dreamcatchercard.com/Upload/Page/f43be6c3-5207-401a-b3d9-9530581a0c2c.jpg', 'https://www.grecos.gr/images/photos/bedvdqffgt.jpg', 'https://www.lasochres.se/media/images/Resa_Jordanien_Akaba_strand.max-1920x1080.jpg', 'https://petranightstours.com/uploads/images/cms/1656167403_rainbow_street_amman.jpg', 'https://toscana-travels.com/wp-content/uploads/2019/12/Treasury-2-2.jpg', '2025-03-06 13:24:10', '2025-03-06 20:47:10'),
(2, 'Japan', 'Welcome to our celebration of Japan\'s rich culture and heritage! Japan, known as the \"Land of the Rising Sun,\" harmoniously blends ancient traditions with cutting-edge technology. Our mission is to share Japan\'s beauty, history, and innovation with the world. Experience the elegance of traditional tea ceremonies, the advanced technology, the exquisite washoku cuisine, and the breathtaking landscapes like Mount Fuji. We are committed to providing authentic Japanese experiences and products. Join us on a journey where tradition meets innovation, and every moment holds a new discovery.', 'https://www.getours.com/media/do3l2kmm/japan-tours-mount-fuji-tokyo.jpg?width=1120&height=426&v=1daa5edf784f910', 'https://altaleb.org.lb/wp-content/uploads/2024/09/29557.jpg', 'https://www.ankasam.org/wp-content/uploads/2024/12/traditional-japanese-1.jpg', 'https://japan-land-service.com/wp-content/uploads/2019/01/AdobeStock_82795175.jpg', 'https://www.talab.org/wp-content/uploads/2023/10/245657880-talab-org.jpg', 'https://sakuranomiya-hotel.hotels-in-osaka.com/data/Photos/OriginalPhoto/8300/830087/830087786/osaka-sakuranomiya-hotel-photo-26.JPEG', '2025-03-06 14:06:27', '2025-03-06 20:13:14'),
(3, 'Italy', 'Italy is a European country renowned for its rich history, stunning architecture, and world-famous cuisine. Its capital, Rome, is home to iconic landmarks such as the Colosseum, the Vatican, and the Pantheon, reflecting its ancient past. Venice enchants visitors with its canals and gondolas, while Florence, the birthplace of the Renaissance, showcases masterpieces by Michelangelo and Leonardo da Vinci. The Amalfi Coast and Tuscany offer breathtaking landscapes, while Milan stands as a global fashion hub. With its delicious pasta, pizza, and gelato, along with its warm Mediterranean charm, Italy is a dream destination for art, history, and food lovers alike.', 'https://d25wybtmjgh8lz.cloudfront.net/sites/default/files/2023-07/ItalyDestinationPage_Masthead.jpg', 'https://italy4real.com/wp-content/uploads/2022/01/Cinque-Terre-Header.jpg', 'https://www.akvillas.com/-/media/akvillas/experiences/italy/tuscany/discover-the-marvels-in-pisa/main-header-pisa-4.jpg?w=1920&h=940', 'https://www.fodors.com/wp-content/uploads/2018/09/Guide-To-Islands-Of-Venice-Torcello-Hero.jpg', 'https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Ffdff0662178c08ddb274d26e34d1d16e.cdn.bubble.io%2Ff1726622800014x315848787883344900%2FImage%25202.jpeg?w=384&h=253&auto=compress&dpr=2.5&fit=max', 'https://farm5.staticflickr.com/4141/4826603849_05449d79e6.jpg', '2025-03-06 14:06:27', '2025-03-10 06:44:27'),
(4, 'Palestine', 'Palestine is a historic region in the Middle East, home to significant religious sites and a rich cultural heritage. It includes the West Bank and Gaza Strip, with Ramallah and Gaza City as key urban centers. Despite political challenges, Palestinians maintain a strong identity through traditions, cuisine, and arts. The region remains central to global discussions on peace and self-determination.', 'https://www.connollycove.com/wp-content/uploads/2022/04/Jerusalem-Palestine-Panaromic-view.jpg', 'https://images.fineartamerica.com/images-medium-large-5/the-old-jaffa-port-ron-shoshani.jpg', 'https://www.aljazeera.net/wp-content/uploads/2024/04/aqsa2-1714144324.jpeg', 'https://i.pinimg.com/236x/92/38/06/923806f05abc931af0a624f703604903.jpg', 'https://www.temenos.com/wp-content/uploads/2019/08/press-release-landscape-2019-aug-06.jpg', 'https://www.aljazeera.net/wp-content/uploads/2024/04/aqsa2-1714144324.jpeg', '2025-03-06 14:06:27', '2025-03-10 06:46:54'),
(5, 'Morocco', 'Morocco, officially the Kingdom of Morocco, is a country in the Maghreb region of North Africa. It overlooks the Mediterranean Sea to the north and the Atlantic Ocean to the west, and has land borders with Algeria to the east, and the disputed territory of Western Sahara to the south. Morocco also claims the Spanish exclaves of Ceuta, Melilla and Peñón de Vélez de la Gomera, and several small Spanish-controlled islands off its coast. It has a population of approximately  million. Islam is both the official and predominant religion, while Arabic and Berber are the official languages. Additionally, French and the Moroccan dialect of Arabic are widely spoken. The culture of Morocco is a mix of Arab, Berber, African and European cultures. Its capital is Rabat, while its largest city is Casablanca.', 'https://www.moroccoembassy.co.za/images/tourism_1.jpg', 'https://www.thrillophilia.com/blog/wp-content/uploads/2016/12/Morocco-310x212.jpg', 'https://th.bing.com/th/id/OIP.JkLVkIQUbqZ7Jv0ZE_V6gAHaFj?w=640&h=480&rs=1&pid=ImgDetMain', 'https://th.bing.com/th/id/OIP.Qf2EysVua9VLm10zrzme9gHaEK?w=960&h=539&rs=1&pid=ImgDetMain', 'https://th.bing.com/th/id/OIP.BfzMqt9Y03TunArg4mVN2AHaE9?w=1476&h=990&rs=1&pid=ImgDetMain', 'https://mafahem.com/uploads/wysiwyg/lg/2020/1/msjd-alhsn-althany.jpg', '2025-03-06 14:06:27', '2025-03-06 20:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriptions`
--

DROP TABLE IF EXISTS `newsletter_subscriptions`;
CREATE TABLE IF NOT EXISTS `newsletter_subscriptions` (
  `subscription_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `subscribed_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`subscription_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `payment_method` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_amount`, `status`, `full_name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 17, 125.00, 'pending', 'Omar Gh', 'omar@email.com', '1234567890', '1234 Main St', 'Amman', 'Amman', '11943', 'credit_card', '2025-03-10 01:13:54', '2025-03-10 01:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 85, 1, 70.00),
(2, 1, 80, 1, 5.00),
(3, 1, 79, 1, 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `country_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `product_image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `country_id` (`country_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `country_id`, `category_id`, `product_image_url`) VALUES
(1, 'Mineral Toner', 'Provides ultimate skin moisture and prevents first signs of ageing', 16.20, 1, 2, 'https://rivagecare.com/pub/media/catalog/product/cache/22f718aa4c60fc911cb10755b41e0ecf/m/i/mineral-toner_1.webp'),
(2, 'Facial Moisturizing Cream', 'A long, white cotton robe worn by men, especially in summer', 18.00, 1, 2, 'https://rivagecare.com/pub/media/catalog/product/cache/ba827ca3af360bcafda16b7ee04eb1fd/f/a/facial_moisturizing_cream_bottle_60ml.webp'),
(3, 'Eye Cream', 'Revitalizes,moisturizes and reduces fine lines around the eye area', 18.00, 1, 2, 'https://rivagecare.com/pub/media/catalog/product/cache/e5f4864b37090d4af46bca960b4523b1/e/y/eye_cream_dispenser_bottle_20ml.webp'),
(4, '\nDay Cream SPF15', 'Moisturizes,protects and renews your skin naturally', 21.00, 1, 2, 'https://rivagecare.com/pub/media/catalog/product/cache/e5f4864b37090d4af46bca960b4523b1/d/a/day_cream_for_dry___sensitive_skin_spf_15_jar_50ml.webp'),
(5, 'Embroidered Vest', 'A vest with traditional Jordanian embroidery, worn over a thobe or other clothing.', 42.00, 1, 1, 'https://gomagcdn.ro/domains2/evastore.ro/files/product/large/vesta-traditionala-copii-ioana-054634.jpg'),
(6, 'Handcrafted Embroidered Dress', 'A dress featuring decorative embroidery panels known as Tatreez', 126.00, 1, 1, 'https://i.etsystatic.com/25884206/c/1477/1172/0/393/il/ec9593/5212349050/il_680x540.5212349050_5570.jpg'),
(7, 'Silver Jewelry', 'Handcrafted silver necklaces, bracelets, and earrings with traditional designs.', 70.00, 1, 3, 'https://th.bing.com/th/id/R.0334edc5ad34bc873746ec2b317b5ab9?rik=nnTguFXNWu4YnA&pid=ImgRaw&r=0'),
(8, 'Beaded Bracelets', 'Colorful bracelets made with beads and traditional patterns', 14.00, 1, 3, 'https://i.etsystatic.com/7212853/r/il/9ffc57/3006339332/il_1588xN.3006339332_70vx.jpg'),
(10, 'Embroidered Handbags', 'Handbags with traditional Jordanian embroidery and patterns', 49.00, 1, 3, 'https://th.bing.com/th/id/OIP.gCtT2tEFqgPF07gfGIuk1wHaLH?rs=1&pid=ImgDetMain'),
(11, 'Copper Coffee Pots', 'Traditional copper pots used for making Arabic coffee', 28.00, 1, 3, 'https://a.1stdibscdn.com/middle-eastern-dallah-arabic-copper-coffee-pot-for-sale/1121189/f_112644511530691529574/11264451_master.jpg'),
(12, 'Handcrafted Keychains', 'Keychains with traditional Jordanian symbols and designs', 7.00, 1, 3, 'https://thumbs.dreamstime.com/b/baguio-city-philippines-december-baguio-city-public-market-main-local-market-philippines-baguio-city-public-market-main-local-157178219.jpg'),
(13, 'Dead Sea Mud Mask', 'A facial mask made from Dead Sea mud, known for its therapeutic properties.', 21.00, 1, 2, 'https://m.media-amazon.com/images/I/71XrQwT4AKL.jpg'),
(14, 'Dead Sea Salt Scrub', 'A body scrub made with Dead Sea salts to exfoliate and rejuvenate the skin.', 17.50, 1, 2, 'https://m.media-amazon.com/images/I/71x-OOFR42L.jpg'),
(15, 'Olive Oil Soap', 'Natural soap made with olive oil, known for its moisturizing', 7.00, 1, 2, 'https://th.bing.com/th/id/R.edfd03b0a246b98f1bbc987b5e707d89?rik=VBHGHkaI0DJYJA&pid=ImgRaw&r=0'),
(16, 'Mineral Face Cream', 'A face cream enriched with minerals from the Dead Sea', 24.50, 1, 2, 'https://th.bing.com/th/id/OIP.MntRJWczuiueBcIlswDSmAHaE1?rs=1&pid=ImgDetMain'),
(17, 'Herbal Body Lotion', 'A body lotion made with natural herbs and essential oils', 14.00, 1, 2, 'https://cdn.cliqueinc.com/posts/303022/best-natural-body-lotions-303022-1665692014755-main.1200x0c.jpg?interlace=true&quality=70\r\n '),
(18, 'Rose Water Toner', 'A toner made with rose water to refresh and hydrate the skin', 10.50, 1, 2, 'https://th.bing.com/th/id/R.2d1708565f2f0ae56cf0a67b5ea8aa2d?rik=l4zgYWD%2fxLNt8w&riu=http%3a%2f%2fwww.thenaturalwash.com%2fcdn%2fshop%2fproducts%2fproduct_ingredients_22.jpg%3fv%3d1677754317&ehk=p%2bl0BOYyX6maD299cZP4h1lqZWJruN9dvCOdfb1Vf78%3d&risl=&pid='),
(19, 'Kimono', ' A traditional Japanese garment, often made from silk or cotton, worn on formal occasions.\r\n', 120.00, 2, 1, 'https://i.pinimg.com/originals/be/77/9d/be779d880e37566cdb849ce9cc03146d.jpg'),
(20, 'Yukata (Summer Kimono)', ' A lighter, more casual version of the kimono, often worn in summer or at festivals.\r\n', 60.00, 2, 1, 'https://i.etsystatic.com/16977663/r/il/522b30/2214195685/il_fullxfull.2214195685_mzgr.jpg'),
(21, 'Obi (Kimono Belt)', ' A wide belt worn with the kimono to secure it in place, available in various colors and patterns.', 20.00, 2, 1, 'https://img0.etsystatic.com/000/0/5404298/il_fullxfull.340593558.jpg'),
(22, 'Hakama (Traditional Japanese Pants)', ' A traditional wide-legged garment, often worn by samurai.', 90.00, 2, 1, 'https://m.media-amazon.com/images/I/61eJHgkJ13L.jpg'),
(23, 'Tabi (Japanese Socks)', ' Traditional Japanese socks that separate the big toe, worn with sandals or as part of the kimono.', 8.00, 2, 1, 'https://cb-contents.s3-ap-northeast-1.amazonaws.com/articles/images/gyoda/story.jpg'),
(24, 'Zori (Wooden Sandals)', ' Traditional sandals worn with a kimono, usually made from wood or straw.', 30.00, 2, 1, 'https://www.wikihow.com/images/8/88/Make-a-Pair-of-Geta-(Wooden-Sandals)-Step-13.jpg'),
(25, 'Tea Cups', 'Traditional ceramic cups used for drinking green tea or other Japanese teas.', 12.00, 2, 4, 'https://i.etsystatic.com/19942793/r/il/d7ce26/2909001132/il_1140xN.2909001132_dgl2.jpg'),
(26, 'Sushi Plates', 'Small plates specifically designed for serving sushi, usually made from porcelain or ceramic.', 10.00, 2, 4, 'https://www.takaski.com/wp-content/uploads/2016/10/Wooden-Zen-Sushi-Plate2.jpg'),
(27, 'Chopsticks', 'Traditional Japanese utensils used for eating, available in different materials like wood, bamboo, or plastic.', 5.00, 2, 4, 'https://th.bing.com/th/id/OIP.0Wbqcdx7inuJxqbZlmSQxwHaEz?w=1400&h=907&rs=1&pid=ImgDetMain'),
(28, 'Ramen Bowls', 'Large bowls used to serve ramen, often made from ceramic or porcelain.', 15.00, 2, 4, 'https://m.media-amazon.com/images/I/81eUUYqqTIS.jpg'),
(29, 'Bento Box', 'A lunchbox used to store and carry a variety of foods, often with separate compartments.', 10.00, 2, 4, 'https://www.hitpromo.net/imageManager/show/75004_group.jpg'),
(30, 'Soy Sauce Dish', 'Small dishes specifically used for serving soy sauce, often found as part of a sushi set.', 4.00, 2, 4, 'https://www.nishikidori.com/5243-large_default/soy-sauce-dish.jpg'),
(31, 'Matcha Green Tea Powder', ' High-quality powdered green tea used in the traditional Japanese tea ceremony or for making beverages.', 15.00, 2, 5, 'https://media1.popsugar-assets.com/files/thumbor/fEIPzXMyHRwgR4SFDiwbzN6Bcqw/fit-in/1024x1024/filters:format_auto-!!-:strip_icc-!!-/2019/05/28/949/n/1922729/cb6fbfb85bd7961f_netimgg2xq4D/i/Organic-Matcha-Green-Tea-Powder.jpg'),
(32, 'Wasabi Paste', 'A pungent paste made from the wasabi root, typically served with sushi.', 5.00, 2, 5, 'https://th.bing.com/th/id/R.5c23e51366805ec8436bfd8f2763b748?rik=Rd8LLXho8%2bo3oA&riu=http%3a%2f%2fwww.iguaria.com%2fwp-content%2fuploads%2f2015%2f02%2fAsia-Green-Garden-Wasabi-Paste.jpg&ehk=aHwZ%2fi%2bfuXtW1Su58rOc0WTzVQibPrhNisra%2bQxnkPk%3d&risl=&pid=I'),
(33, 'Nori Seaweed Sheets', 'Thin sheets of dried seaweed used to wrap sushi or rice balls.', 3.00, 2, 5, 'https://m.media-amazon.com/images/I/91B8FWYbmfL.jpg'),
(34, 'Pocky Sticks', 'A popular Japanese snack consisting of biscuit sticks dipped in various flavored coatings.', 4.00, 2, 5, 'https://th.bing.com/th/id/OIP.5rm4vRr6U8Rowl5IFahksAHaFj?rs=1&pid=ImgDetMain'),
(35, 'Mochi (Rice Cake)', 'A chewy Japanese rice cake made from glutinous rice, often filled with sweet fillings like red bean paste.', 8.00, 2, 5, 'https://th.bing.com/th/id/R.ba3c8c52e4bce23a3e0d9dea3be1b4b9?rik=RpE1GZYiuoQTcw&riu=http%3a%2f%2fjapanese999.com%2fwp-content%2fuploads%2f2014%2f01%2fmochi-rice-cake.jpg&ehk=s1G4f8O%2fFs3CfivmMT6Qav1vLJP7c5kG7SnwQCoRiow%3d&risl=&pid=ImgRaw&r=0'),
(36, 'Kit-Kat (Japanese Flavors)', 'Japanese Kit-Kat bars with unique flavors like matcha, sweet potato, and red bean.', 6.00, 2, 5, 'https://www.tokyoweekender.com/wp-content/uploads/2022/10/shutterstock_1582403740.jpg'),
(37, 'Anime Action Figures', 'Collectible figures of characters from popular anime series, often highly detailed and painted.', 25.00, 2, 6, 'https://th.bing.com/th/id/OIP.8DHgwoZa0DlCjrEZ-NL4SAAAAA?rs=1&pid=ImgDetMain'),
(38, 'Manga Books', ' Japanese graphic novels, often serialized, containing different genres like shonen, shojo, and more.', 10.00, 2, 6, 'https://jw-webmagazine.com/wp-content/uploads/2020/05/Best-Manga-of-All-Time.jpg'),
(39, 'Anime Posters', 'High-quality posters of anime characters or scenes, perfect for decorating a room or office.', 8.00, 2, 6, 'https://i.pinimg.com/originals/f8/6c/c3/f86cc358c2f65afc5cc2472f9ec2bcc4.jpg'),
(40, 'Cosplay Costumes', 'Costumes designed to replicate anime or manga character outfits, used for cosplay events.', 50.00, 2, 6, 'https://th.bing.com/th/id/OIP.C9QRUxUH7HPzbFztr4-S6QHaHp?rs=1&pid=ImgDetMain'),
(41, 'Anime T-Shirts', ' T-shirts printed with anime character designs or logos.', 15.00, 2, 6, 'https://down-ph.img.susercontent.com/file/sg-11134201-23020-hy9k7sr1h2nv2b'),
(42, 'Manga Art Prints', 'Printed artwork featuring manga-style illustrations, often signed or limited edition.', 20.00, 2, 6, 'https://m.media-amazon.com/images/I/71kpSj5RU+L._AC_SL1100_.jpg'),
(43, 'Caftan', 'A long, loose-fitting dress with intricate embroidery and decorations, often worn by women on special occasions.', 126.00, 5, 1, 'https://www.moroccoworldnews.com/wp-content/uploads/2020/07/Caftans-Morocco%E2%80%99s-Treasured-Traditional-Garments-Hit-the-Global-Stage.jpg'),
(44, 'Djellaba', 'A long, loose robe worn by both men and women, made from cotton or wool.', 70.00, 5, 1, 'https://th.bing.com/th/id/OIP.cFhUpunaz2RZq28vbDR-6gAAAA?rs=1&pid=ImgDetMain'),
(45, 'Burnous', 'A long woolen cloak worn by men during winter', 105.00, 5, 1, 'https://www.chezpakane.com/images/Image/Burnous-de-Spahis-Marocain-Drap-ecarlate.jpg'),
(46, 'Chachia', 'A traditional Moroccan hat made of wool, available in various colors', 18.00, 5, 1, 'https://th.bing.com/th/id/R.6f0839e489eae27763b07ca6ddb10dda?rik=Nn58%2broARTVcFQ&pid=ImgRaw&r=0'),
(47, 'Babouche', 'Traditional soft leather slippers worn by both men and women', 35.00, 5, 1, 'https://th.bing.com/th/id/R.7165578e0564107de8cc13e253ca474e?rik=WkBNO0eu05ynxw&riu=http%3a%2f%2fwww.caftan-catalogue.com%2fwp-content%2fuploads%2f2016%2f01%2fbabouche-marocain-de-marrakech.jpg&ehk=vv227JvHKFtkETF%2fxaaMqrdIleJrHxAZlx4lXF4Cr9k%3d&risl=&pi'),
(48, 'Kandora', 'A simple and elegant long robe worn by men', 56.00, 5, 1, 'https://i.pinimg.com/736x/fc/02/8e/fc028e4e66699a9af685c60fa6a062e2.jpg'),
(49, 'Silver Jewelry', 'Handcrafted silver necklaces, bracelets, and earrings with traditional Moroccan designs.', 70.00, 5, 3, 'https://s-media-cache-ak0.pinimg.com/736x/96/b1/8f/96b18f1b930af232f94f42e0924386ab.jpg'),
(50, 'Beaded Bracelets', 'Colorful bracelets made with beads and traditional Moroccan patterns.', 14.00, 5, 3, 'https://i.pinimg.com/736x/2d/69/b8/2d69b815a64a4c19a5a043df8625f391--bellydance.jpg'),
(51, 'Leather Handbags\r\n\r\n', 'Handcrafted leather handbags with traditional embroidery and decorations.', 49.00, 5, 3, 'https://i.pinimg.com/originals/62/39/f7/6239f751b375c7191008ac38086028b6.jpg'),
(52, 'Copper Teapots', 'Traditional copper teapots used for brewing and serving Moroccan tea.', 40.00, 5, 3, 'https://thumbs.dreamstime.com/z/moroccan-teapot-copper-glasses-tray-tea-one-traditions-middle-east-north-africa-specially-morocco-79610135.jpg'),
(53, 'Souvenirs Keychains', 'Keychains with traditional Moroccan symbols and designs', 7.00, 5, 3, 'https://thumbs.dreamstime.com/b/souvenirs-marrakech-morocco-north-africa-137562708.jpg'),
(54, 'Hand Fans', 'Hand fans decorated with traditional Moroccan patterns', 14.00, 5, 3, 'https://th.bing.com/th/id/R.7f12ef12fc064014f0db1c01b4a2d3e4?rik=oJOxMhE3yctDog&pid=ImgRaw&r=0'),
(55, 'Argan Oil', 'Natural oil extracted from the argan tree, used for moisturizing and nourishing skin and hair.', 21.00, 5, 2, 'https://th.bing.com/th/id/R.7adcad23c3b200c7e4308fe0bd8b2fe7?rik=r2liXy34JM%2bMiw&pid=ImgRaw&r=0'),
(56, 'Rhassoul Clay', 'Natural clay used for cleansing and purifying skin and hair', 17.50, 5, 2, 'https://th.bing.com/th/id/OIP.7IoNFS02Ikd6t155_3qDLQHaHa?rs=1&pid=ImgDetMain'),
(58, 'Beldi Soap', 'Traditional soap made from olive oil, used for exfoliating and softening the skin.', 10.00, 5, 2, 'https://th.bing.com/th/id/R.8f5eac748569fdd8615ea9f452f70de8?rik=hfH4ni8kus%2f5ww&pid=ImgRaw&r=0'),
(59, 'Kohl Cream', 'Cream containing natural extracts used for nourishing and beautifying the skin.', 24.50, 5, 2, 'https://macoiffeuseafro.com/blog/wp-content/uploads/2018/06/2347edf746cfacfbabece50bf4c4da69.jpg'),
(60, 'Amber Perfume', 'Natural perfume made from amber, used for fragrancing the body', 14.00, 5, 2, 'https://cdn2.jomashop.com/media/catalog/product/s/w/swiss-arabian-unisex-amber-01-edp-spray-169-oz-fragrances-6295124036781.jpg'),
(61, 'Traditional Italian Suit', 'Elegant suit made from high-quality fabrics, typically worn by men on formal occasions.', 210.00, 3, 1, 'https://i.pinimg.com/originals/be/f2/39/bef239f9cab86b7354f83ea676af9f7f.jpg'),
(62, 'Italian Dresses', 'Stylish and intricately designed dresses worn by women on special occasions.', 140.00, 3, 1, 'https://th.bing.com/th/id/OIP.kv_m6CH9Z_Rpiis3SWoa_QHaJ1?rs=1&pid=ImgDetMain'),
(63, 'Silk Scarves', 'Luxurious silk scarves featuring classic and contemporary designs', 49.00, 3, 1, 'https://cdn.shopify.com/s/files/1/0026/1124/9241/products/Oksana-Fine-Art-Design-Italian-silk-scarf-Lavender-Dream-side-90-cm_2000x.jpg?v=1613959970'),
(64, 'Berets', 'Elegant woolen hats often adorned with traditional designs', 28.00, 3, 1, 'https://th.bing.com/th/id/OIP.C0Uz8_1ZRx5DvX0kLsgg0gHaHS?rs=1&pid=ImgDetMain'),
(65, 'Italian Leather Shoes', 'Handcrafted shoes made from fine Italian leather, known for their high quality.', 98.00, 3, 1, 'https://th.bing.com/th/id/OIP.Y7UpJuTRIsGdKe6FHXo9YwHaE8?rs=1&pid=ImgDetMain'),
(67, 'Pasta', 'Various types of pasta made from durum wheat, available in different shapes and sizes.', 5.00, 3, 7, 'https://th.bing.com/th/id/OIP.ZzLmsM8tGLUPv8Yr6uPARgHaJl?rs=1&pid=ImgDetMain'),
(68, 'Virgin Olive Oil', 'Natural oil extracted from high-quality Italian olives, used in cooking and salads.', 21.00, 3, 7, 'https://m.media-amazon.com/images/I/71jIFAOBBRL._SL1000_.jpg'),
(69, 'Balsamic Vinegar', 'Vinegar made from Trebbiano grapes, used in salads and Italian dishes.', 14.00, 3, 7, 'https://i.pinimg.com/originals/8a/4a/b1/8a4ab11a59028ca7766808c6dd121ec4.jpg'),
(70, 'Parmigiano Reggiano Cheese', 'Hard Italian cheese made from cow\'s milk, often grated over dishes', 49.00, 3, 7, 'https://th.bing.com/th/id/OIP.D4JGvvCutPbKQtpgIQDn8AAAAA?rs=1&pid=ImgDetMain'),
(71, 'Espresso Coffee', 'Rich and aromatic coffee that is an essential part of Italian culture', 14.00, 3, 7, 'https://m.media-amazon.com/images/I/51LdiDlXKLL._SL1080_.jpg'),
(99, 'test', 'thhhhhhhhhhhhhhdvkjankavkjbefjbvkbvkksjabfkjnvkfanjkbnljnjkebnjkdnbvjfjcv;jasnl;bn;oerujfndv;ojelf', 31.00, 4, 4, 'omar.png'),
(100, 'test', 'schcmsdnbcnasv', 21.00, NULL, NULL, 'nvjhmf.png'),
(101, 'test', 'sfvsfbsfgdb', 11.00, 1, 1, 'omar.png'),
(73, 'Handcrafted Furniture', 'Furniture pieces made by hand, featuring traditional and contemporary Italian designs.', 39.00, 3, 8, 'https://th.bing.com/th/id/R.594dc2ac11a5ab14a3926c0142f38e75?rik=2hGn0d8%2fM96LfQ&pid=ImgRaw&r=0'),
(74, 'Italian Pottery', 'Handmade pottery with traditional designs and vibrant colors', 30.00, 3, 8, 'https://th.bing.com/th/id/R.24b04c14966042f898484801ec0f8f7b?rik=%2bRRbLukDwMdWRw&riu=http%3a%2f%2fitalymagazine.com%2fsites%2fdefault%2ffiles%2ffeature-story%2fgallery%2fclassic_designs_from_deruta.jpg&ehk=cB9QBL7kkFxehSjTKDikrK6AA8qubYaRpqhNb1GYMm0%3d&r'),
(75, 'Murano Glass', 'Hand-blown glass from the island of Murano, known for its unique colors and shapes.', 140.00, 3, 8, 'https://as1.ftcdn.net/v2/jpg/03/34/85/50/1000_F_334855034_tu2tX9HfWq7xyNDSqDD9zsBPIWYJOcH7.jpg'),
(76, 'Italian Marble Tables', 'Elegant tables made from high-quality Italian marble', 350.00, 3, 8, 'https://i.pinimg.com/originals/ef/5d/97/ef5d97f3ad2bb7cf64cb1c599b53eed3.png'),
(77, 'Tuscan Leather Sofas', 'Luxurious sofas made from fine Tuscan leather', 700.00, 3, 8, 'https://th.bing.com/th/id/OIP.qWEJCGU9IRwMo5oCLW6unwHaEp?rs=1&pid=ImgDetMain'),
(78, 'Venetian Mirrors', 'Decorative mirrors with intricate Venetian designs', 280.00, 3, 8, 'https://a.1stdibscdn.com/archivesE/upload/8595/03_15/14e36antiquevenetianglassmirro1/14E36antiquevenetianglassmirrorc_l.jpeg'),
(79, 'Thobe', 'An embroidered dress with intricate designs, especially in red and black. ', 50.00, 4, 1, 'https://th.bing.com/th/id/OIP.RcdoWaUNXCTTJemLNDNKBgHaMy?rs=1&pid=ImgDetMain'),
(80, 'Keffiyeh', 'The famous black-and-white checkered scarf, symbolizing Palestinian heritage.', 5.00, 4, 1, 'https://th.bing.com/th/id/OIP.cetml6ha-mrx4vFIpBQjlgAAAA?rs=1&pid=ImgDetMain'),
(81, 'Abaya', ' A long black robe, sometimes decorated with embroidery.', 65.00, 4, 1, 'https://th.bing.com/th/id/OIP.WiIy-DpzUz16HEjdRXFq2gHaI-?rs=1&pid=ImgDetMain'),
(84, 'Tarboush (Fez Hat)', 'A black or red cylindrical hat, historically worn by men.', 25.00, 4, 1, 'https://cdn.webshopapp.com/shops/29471/files/166365446/650x650x2/fez-hat-in-black-tarboush-fes-oriental-headgear-ca.jpg'),
(85, 'Palestinian Vest (Sidari)', 'A sleeveless vest often worn over a thobe.', 70.00, 4, 1, 'https://th.bing.com/th/id/OIP.z1Om_K9hg_NMMQzfdTH-0gHaLG?rs=1&pid=ImgDetMain'),
(87, 'Arabic Coffee (Qahwa)', 'Strong black coffee with cardamom', 7.00, 4, 9, 'https://th.bing.com/th/id/OIP.Mqj_vaaRDyDIKx-wWvwYDgHaHa?w=720&h=720&rs=1&pid=ImgDetMain'),
(88, 'Shay bil Maramiya (Sage Tea)', 'Black tea brewed with sage leaves', 6.00, 4, 9, 'https://th.bing.com/th/id/OIP.BC1FgQnvfqTmAkQgeI7J1QHaHa?rs=1&pid=ImgDetMain'),
(89, 'Qamar al-Din (Apricot Drink)', 'A traditional Ramadan drink made from dried apricot paste.', 5.00, 4, 9, 'https://i.etsystatic.com/31513351/r/il/16d39e/4734241113/il_1588xN.4734241113_lhw6.jpg'),
(90, 'Jallab', 'A sweet drink made from grape molasses, dates, and rose water.', 3.00, 4, 9, 'https://minbaladeh.world/storage/16172725640.jpg'),
(91, 'Mate ', 'A popular herbal drink consumed in Palestinian communities, often shared in social gatherings.', 5.50, 4, 9, 'https://th.bing.com/th/id/OIP.ZY9WOUT-8byS2Sa9c6OtFQHaLH?rs=1&pid=ImgDetMain'),
(92, 'Carob Juice (Kharoob) ', 'A refreshing, naturally sweet drink made from carob pods.', 4.00, 4, 9, 'https://img.freepik.com/premium-photo/photo-some-carob-juice-drink-elegantly-plated-table_847439-39120.jpg'),
(93, 'Hand-Carved Wooden Chairs', 'Chairs made from olive wood, often decorated with traditional carvings.', 35.00, 4, 8, 'https://th.bing.com/th/id/R.c6613dae6fb7a4b8499869822135ba06?rik=aJkLup8DomT5DA&riu=http%3a%2f%2fmedia-cache-ak0.pinimg.com%2f736x%2f48%2fae%2fe1%2f48aee1d65bceeedb82ef356a1daed446.jpg&ehk=euUDYl7LN65p8%2feErX140tDPX%2b9t7tFptyqcxeAUGLA%3d&risl=&pid=ImgRa'),
(94, 'Mosaic Coffee Table', 'ables with intricate mosaic designs, reflecting Palestinian artistic heritage.', 130.00, 4, 8, 'https://wallsdesk.com/wp-content/uploads/2016/04/Mosaic-Coffee-Table-Special-Form.jpg'),
(95, 'Olive Wood Cabinets', 'Storage units crafted from olive wood, durable and beautifully finished.', 370.00, 4, 8, 'https://th.bing.com/th?id=OIF.QIJRDx1r0SJB%2fv%2fCmb7aKg&rs=1&pid=ImgDetMain'),
(96, 'Sadu-Woven Cushions', 'Handwoven cushions with vibrant Palestinian Bedouin patterns. ', 43.00, 4, 8, 'https://th.bing.com/th/id/R.e70635b7c3b2434e0adb9373819b5cca?rik=iHrZPwi4q6Q5Tg&pid=ImgRaw&r=0'),
(97, 'Hand-Painted Ceramic Plates', 'ecorative plates featuring Palestinian motifs, often used for display or dining.', 12.00, 4, 8, 'https://th.bing.com/th/id/OIP.L9S-VoPcx8mjXDj3BrnBywHaIm?rs=1&pid=ImgDetMain'),
(98, 'Low Seating Majlis Set', 'raditional floor seating with cushions, ideal for social gatherings.', 270.00, 4, 8, 'https://th.bing.com/th/id/OIP.7wifytn4_fu4q-5-vc4aiQHaFj?rs=1&pid=ImgDetMain');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
CREATE TABLE IF NOT EXISTS `product_images` (
  `product_image_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`product_image_id`),
  KEY `fk_product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_image_id`, `product_id`, `image_url`) VALUES
(1, 1, 'https://rivagecare.com/pub/media/catalog/product/cache/22f718aa4c60fc911cb10755b41e0ecf/m/i/mineral-toner_1.webp'),
(2, 2, 'img/intense.png'),
(3, 5, 'img/night cream.png'),
(4, 7, 'img/sun protection.png'),
(5, 2, 'https://images.memphistours.com/large/26356167a430cc8e72faca121a495a10.jpg'),
(6, 3, 'img/Dead sea facial mask.png'),
(7, 4, 'img/natural shampoo.png');

-- --------------------------------------------------------

--
-- Table structure for table `recommended`
--

DROP TABLE IF EXISTS `recommended`;
CREATE TABLE IF NOT EXISTS `recommended` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `country-id` int NOT NULL,
  `img_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'omar', 'omar@email.com', '$2y$10$domECPFxuFYTpP18Bv1Y2OckwGguVQTY7eAXG0d4i1P16ju8TX0vW', '2025-03-06 00:27:28'),
(2, 'Luma', 'luma@email.com', '$2y$10$F11mkGJFtI/uCyeaGObmbuAhea76lAMm0pDEgsygtEF47USgDo8LG', '2025-03-06 00:38:10'),
(3, 'yazan', 'yazan@email.com', '$2y$10$b31M7DZP2CJCQkz83FocdO9PmhpdtRIPIcE5jpPwroqQb4VF40PEu', '2025-03-06 01:26:18'),
(4, 'Alaa', 'alaa@email.com', '$2y$10$SkzP64UGcudNh3z8eIScXOrvDgEJqiI9Gzr3FDWOavHghYHExhYSW', '2025-03-06 01:28:13'),
(5, 'Ahmad', 'ahmad@email.com', '$2y$10$/Y6SAgzNeUPkREWImA50T.tOzAyHwyPVjEXmvr4Y5edOuKWL4txJ6', '2025-03-06 01:34:42'),
(6, 'Ibraheem', 'ibraheem@email.com', '$2y$10$Gb9Mg.Ff9XME/nxu1GVn2eGMBZFN8osaJksCMpSfMZx8ckNNmkcM6', '2025-03-06 07:19:57'),
(7, 'Mohammad', 'mohammad@email.com', '$2y$10$nAIr4LHl0lzIvtIAO20IaeJS/jqKWF0Hpoe9yVVaFWwRCVPydhGy2', '2025-03-06 08:39:32'),
(8, 'Alaa', 'alaa@gmail.com', '$2y$10$ojtiekpeTWOua8Pki4XsvO2FF77H6dUjAuYKiklsetbrqivRzQdo2', '2025-03-06 09:30:29'),
(9, 'alaa', 'alaaa@gmail.com', '$2y$10$weWQOpmv7fiZCrDY8snuuet2AFCuROgqfYLDGymOJvHrwBRpePLSK', '2025-03-06 22:41:11'),
(10, 'loma', 'luma1@gmail.com', '$2y$10$VT91mADBvtGiSQu8ZnhTpuFc6SPJ5ROxhLzt/RDV70ARJQxOirv0C', '2025-03-07 01:13:34'),
(11, 'lolo', 'luma@gmail.com', '', '2025-03-08 12:22:58'),
(12, 'loma', 'luma3@gmail.com', '$2y$10$5u.6mUnguQDVNFmDaL.dSe7OOi0DiGa.XRqJ0YivalulL9Yys5ZB2', '2025-03-08 20:00:37'),
(13, 'loma', 'luma5@gmail.com', '$2y$10$/6Ciof/iyxLw37VHY75Jy.jPzixqLY3qq2ri4zuyX3258jJEtB2di', '2025-03-08 20:05:10'),
(14, 'loma', 'luma6@gmail.com', '$2y$10$VQ.lPZXmhTLHQRBuDOQuTe8cEKgHzQ0eGuBmEl2ZSlnAvb5qyk1O2', '2025-03-08 20:06:05'),
(17, 'omar', 'qwerty@email.co', '$2y$10$9v5DLmJyVnlcGSBaRxHKw.4tJnUPupofpnSMhDJl7n4rA.v6b5hvy', '2025-03-09 09:42:18'),
(18, 'ahmad', 'ashcb@gmail.com', '$2y$10$tPLSbgXNErDw.2rYub3.7eHzNG6/C0wINvDQTQXZ5EsMfHdEJp1KK', '2025-03-10 02:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
