-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2023 at 05:33 AM
-- Server version: 8.0.33
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sdesc` longtext NOT NULL,
  `body` longtext NOT NULL,
  `creation_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image_url`, `title`, `sdesc`, `body`, `creation_date`) VALUES
(1, 'paris.jpg', 'Travel', 'Once upon a time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium eros eu nisl porttitor pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et neque porta, consequat ante vitae, volutpat velit. Sed lorem risus, auctor quis pulvinar vel, sodales nec tortor. Sed sit amet ornare orci, eleifend viverra velit. Vivamus rhoncus sapien semper urna dictum, ut tempor enim malesuada. Nulla vitae nibh non libero convallis dictum ac vitae quam. Phasellus varius risus erat, eu sagittis augue commodo nec. Nulla mollis ipsum et purus aliquam aliquam. Sed sit amet neque a nunc accumsan interdum. Etiam vitae ipsum dui.  Etiam sollicitudin nibh id malesuada scelerisque. Nulla interdum eu nibh at blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam et eleifend erat. Praesent feugiat, turpis eget varius dapibus, ante lectus molestie mi, ac aliquet ex nulla non mi. Phasellus consectetur sed mauris et pharetra. Sed ac elementum nunc. Etiam viverra', '2023-07-23 04:31:01'),
(2, 'paris.jpg', 'No title', 'very very short description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium eros eu nisl porttitor pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et neque porta, consequat ante vitae, volutpat velit. Sed lorem risus, auctor quis pulvinar vel, sodales nec tortor. Sed sit amet ornare orci, eleifend viverra velit. Vivamus rhoncus sapien semper urna dictum, ut tempor enim malesuada. Nulla vitae nibh non libero convallis dictum ac vitae quam. Phasellus varius risus erat, eu sagittis augue commodo nec. Nulla mollis ipsum et purus aliquam aliquam. Sed sit amet neque a nunc accumsan interdum. Etiam vitae ipsum dui.  Etiam sollicitudin nibh id malesuada scelerisque. Nulla interdum eu nibh at blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam et eleifend erat. Praesent feugiat, turpis eget varius dapibus, ante lectus molestie mi, ac aliquet ex nulla non mi. Phasellus consectetur sed mauris et pharetra. Sed ac elementum nunc. Etiam viverra', '2023-07-23 05:04:38'),
(3, 'paris.jpg', 'Travel 2', 'Once again upon a time', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium eros eu nisl porttitor pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et neque porta, consequat ante vitae, volutpat velit. Sed lorem risus, auctor quis pulvinar vel, sodales nec tortor. Sed sit amet ornare orci, eleifend viverra velit. Vivamus rhoncus sapien semper urna dictum, ut tempor enim malesuada. Nulla vitae nibh non libero convallis dictum ac vitae quam. Phasellus varius risus erat, eu sagittis augue commodo nec. Nulla mollis ipsum et purus aliquam aliquam. Sed sit amet neque a nunc accumsan interdum. Etiam vitae ipsum dui.  Etiam sollicitudin nibh id malesuada scelerisque. Nulla interdum eu nibh at blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam et eleifend erat. Praesent feugiat, turpis eget varius dapibus, ante lectus molestie mi, ac aliquet ex nulla non mi. Phasellus consectetur sed mauris et pharetra. Sed ac elementum nunc. Etiam viverra', '2023-07-23 05:19:49'),
(4, 'paris.jpg', 'Blabla1', 'alsjkdl;aksjda;lksjd;laksjd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium eros eu nisl porttitor pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et neque porta, consequat ante vitae, volutpat velit. Sed lorem risus, auctor quis pulvinar vel, sodales nec tortor. Sed sit amet ornare orci, eleifend viverra velit. Vivamus rhoncus sapien semper urna dictum, ut tempor enim malesuada. Nulla vitae nibh non libero convallis dictum ac vitae quam. Phasellus varius risus erat, eu sagittis augue commodo nec. Nulla mollis ipsum et purus aliquam aliquam. Sed sit amet neque a nunc accumsan interdum. Etiam vitae ipsum dui.  Etiam sollicitudin nibh id malesuada scelerisque. Nulla interdum eu nibh at blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam et eleifend erat. Praesent feugiat, turpis eget varius dapibus, ante lectus molestie mi, ac aliquet ex nulla non mi. Phasellus consectetur sed mauris et pharetra. Sed ac elementum nunc. Etiam viverra', '2023-07-23 05:27:13'),
(5, 'paris.jpg', 'Blabla 3', 'akjshdlkajshdlkajhsdlkajshd', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pretium eros eu nisl porttitor pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et neque porta, consequat ante vitae, volutpat velit. Sed lorem risus, auctor quis pulvinar vel, sodales nec tortor. Sed sit amet ornare orci, eleifend viverra velit. Vivamus rhoncus sapien semper urna dictum, ut tempor enim malesuada. Nulla vitae nibh non libero convallis dictum ac vitae quam. Phasellus varius risus erat, eu sagittis augue commodo nec. Nulla mollis ipsum et purus aliquam aliquam. Sed sit amet neque a nunc accumsan interdum. Etiam vitae ipsum dui.  Etiam sollicitudin nibh id malesuada scelerisque. Nulla interdum eu nibh at blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam et eleifend erat. Praesent feugiat, turpis eget varius dapibus, ante lectus molestie mi, ac aliquet ex nulla non mi. Phasellus consectetur sed mauris et pharetra. Sed ac elementum nunc. Etiam viverra', '2023-07-23 05:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `password`, `date`) VALUES
(6, 'Noureddineeee', 'Baalbakiiii', 'male', 'n@gmail.com', '08a78fbe63e58e380f3059d3fd356826', '2023-07-14 17:14:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
