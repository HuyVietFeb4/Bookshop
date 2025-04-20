-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2025 at 08:34 AM
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
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admins_ID` int(10) UNSIGNED NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Admin_name` varchar(20) NOT NULL,
  `Passwords` varchar(100) NOT NULL,
  `PFP_URL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admins_ID`, `Email`, `Admin_name`, `Passwords`, `PFP_URL`) VALUES
(1, 'viet.nguyenlodaunv1@hcmut.edu.vn', 'Huy Viet the admin', 'd8fd4f83d91fa909c0337fcf263c9f61', 'pfp_1_admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_ID` int(10) UNSIGNED NOT NULL,
  `Genre` varchar(20) DEFAULT NULL,
  `Price` decimal(15,3) NOT NULL CHECK (`Price` >= 0),
  `Title` varchar(100) NOT NULL,
  `Descriptions` text DEFAULT NULL,
  `Image_URL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_ID`, `Genre`, `Price`, `Title`, `Descriptions`, `Image_URL`) VALUES
(1, 'Dystopian', 12.501, '1984', 'A chilling vision of a totalitarian future.', '1984.jpg'),
(2, 'Biography', 8.996, 'The Diary of a Young Girl', 'The poignant diary of Anne Frank.', 'anne_frank.jpg'),
(3, 'Self-help', 15.509, 'Atomic Habits', 'A guide to forming good habits.', 'atomic_habits.jpg'),
(4, 'Memoir', 18.754, 'Becoming', 'Michelle Obama\'s inspiring memoir.', 'becoming.jpg'),
(5, 'Science Fiction', 22.500, 'Dune', 'A complex saga of politics and power.', 'dune.jpg'),
(6, 'Romance', 10.995, 'The Fault in Our Stars', 'A heartbreaking love story.', 'fault_stars.jpg'),
(7, 'Thriller', 14.502, 'Gone Girl', 'A gripping psychological thriller.', 'gone_girl.jpg'),
(8, 'Fantasy', 25.031, 'Harry Potter and the philosopher&#039;s stone', 'A magical journey of a young wizard.', 'harry_potter.jpg'),
(9, 'Classic', 7.992, 'To Kill a Mockingbird', 'A timeless tale of justice and race.', 'mockingbird.jpg'),
(10, 'Fantasy', 12.253, 'The Hobbit', 'An epic adventure to reclaim a treasure.', 'the_hobbit.jpg'),
(11, 'Children', 5.995, 'Charlotte\'s Web', 'A heartwarming story of friendship between a pig and a spider by E.B. White.', 'charlottes_web.jpg'),
(12, 'Horror', 8.991, 'Dracula', 'A gothic horror novel about the infamous Count Dracula by Bram Stoker.', 'dracula.jpg'),
(13, 'Mystery', 10.992, 'The Girl with the Dragon Tattoo', 'A gripping mystery thriller by Stieg Larsson featuring journalist Mikael Blomkvist and hacker Lisbeth Salander.', 'dragon_tattoo.jpg'),
(14, 'History', 11.997, 'Guns, Germs, and Steel', 'Jared Diamond\'s analysis of the factors shaping human societies.', 'guns_germs_steel.jpg'),
(15, 'History', 12.497, 'The History of the World', 'J.M. Roberts\' comprehensive account of the history of humankind.', 'history_world.jpg'),
(16, 'Science Fiction', 8.493, 'The Hitchhiker\'s Guide to the Galaxy', 'Douglas Adams\' hilarious sci-fi adventure through the cosmos.', 'hitchhiker.jpg'),
(17, 'Travel', 10.991, 'Into the Wild', 'Jon Krakauer\'s true story of Christopher McCandless and his journey into the Alaskan wilderness.', 'into_the_wild.jpg'),
(18, 'Cookbooks', 17.994, 'The Joy of Cooking', 'Irma S. Rombauer\'s timeless and comprehensive cookbook for home cooking.', 'joy_of_cooking.jpg'),
(19, 'Travel', 15.000, 'Lonely Planet Vietnam', 'A detailed travel guide to exploring Vietnam, offering tips and insights for travelers.', 'lonely_planet_vietnam.jpg'),
(20, 'Psychology', 9.500, 'Man\'s Search for Meaning', 'Viktor E. Frankl\'s inspiring memoir and exploration of finding purpose in life, even in adversity.', 'mans_search.jpg'),
(21, 'Children', 6.750, 'Matilda', 'Roald Dahl\'s story of a remarkable girl with extraordinary talents who stands up to injustice.', 'matilda.jpg'),
(22, 'Poetry', 10.250, 'Milk and Honey', 'Rupi Kaur\'s collection of poignant poems and prose about love, loss, and healing.', 'milk_and_honey.jpg'),
(23, 'Classic', 7.990, 'Pride and Prejudice', 'Jane Austen\'s timeless tale of love, family, and social expectations.', 'pride_prejudice.jpg'),
(24, 'Cookbooks', 20.000, 'Salt, Fat, Acid, Heat', 'Samin Nosrat\'s comprehensive guide to mastering the elements of great cooking.', 'salt_fat_acid_heat.jpg'),
(26, 'Biography', 14.750, 'Steve Jobs', 'Walter Isaacson\'s detailed biography of Apple co-founder Steve Jobs.', 'steve_jobs.jpg'),
(27, 'Poetry', 11.250, 'The Sun and Her Flowers', 'Rupi Kaur\'s follow-up poetry collection about growth, healing, and self-discovery.', 'sun_and_her_flowers.jpg'),
(28, 'Fiction', 10.000, 'The Alchemist', 'Paulo Coelho\'s novel about a shepherd\'s spiritual journey in search of his destiny.', 'the_alchemist.jpg'),
(29, 'Art', 22.500, 'The Art Book', 'An extensive overview of art history and the most influential works through time.', 'the_art_book.jpg'),
(30, 'Science', 16.750, 'The Body', 'Bill Bryson\'s engaging exploration of the marvels and mysteries of the human body.', 'the_body.jpg'),
(31, 'Horror', 14.990, 'The Shining', 'Stephen King\'s chilling tale of a family isolated in a haunted hotel.', 'the_shining.jpg'),
(32, 'Graphic Novel', 12.500, 'Watchmen', 'Alan Moore and Dave Gibbons\'s groundbreaking graphic novel exploring morality and heroism in a dystopian world.', 'watchmen.jpg'),
(33, 'Adventure', 9.999, 'Life of Pi', 'The incredible story of survival and self-discovery by Yann Martel.', 'life_of_pi.jpg'),
(34, 'Thriller', 13.450, 'The Silent Patient', 'A shocking psychological thriller by Alex Michaelides.', 'silent_patient.jpg'),
(35, 'Fantasy', 18.750, 'The Name of the Wind', 'Patrick Rothfuss\'s epic tale of a gifted young man in a magical world.', 'name_of_the_wind.jpg'),
(36, 'Science', 14.200, 'Brief Answers to the Big Questions', 'Stephen Hawking\'s reflections on the universe and humanity.', 'brief_answers.jpg'),
(37, 'Horror', 11.990, 'It', 'Stephen King\'s chilling story of friendship and an ancient evil terrorizing a small town.', 'it.jpg'),
(38, 'Historical Fiction', 12.990, 'The Nightingale', 'Kristin Hannah\'s moving tale of two sisters during World War II.', 'nightingale.jpg'),
(39, 'Self-help', 13.500, 'Think and Grow Rich', 'Napoleon Hill\'s influential guide to success and wealth creation.', 'think_grow_rich.jpg'),
(40, 'Fantasy', 19.750, 'Mistborn: The Final Empire', 'Brandon Sanderson\'s thrilling fantasy about magic, rebellion, and heroism.', 'mistborn.jpg'),
(41, 'Science', 15.250, 'A Brief History of Time', 'Stephen Hawking\'s exploration of the universe and black holes.', 'brief_history_time.jpg'),
(42, 'Biography', 14.000, 'Long Walk to Freedom', 'Nelson Mandela\'s inspiring autobiography about his fight for justice.', 'long_walk_freedom.jpg'),
(43, 'Adventure', 12.500, 'The Call of the Wild', 'Jack London\'s thrilling tale of survival and adventure in the Yukon wilderness.', 'call_of_the_wild.jpg'),
(44, 'Classic', 9.990, 'Jane Eyre', 'Charlotte Brontë\'s timeless story of love, independence, and resilience.', 'jane_eyre.jpg'),
(45, 'Self-help', 14.250, 'The Power of Now', 'Eckhart Tolle\'s guide to achieving mindfulness and living in the present moment.', 'power_of_now.jpg'),
(46, 'Philosophy', 11.750, 'Meditations', 'Marcus Aurelius\'s reflections on life, virtue, and stoicism.', 'meditations.jpg'),
(47, 'Science Fiction', 17.500, 'Neuromancer', 'William Gibson\'s groundbreaking novel that defined the cyberpunk genre.', 'neuromancer.jpg'),
(48, 'Fantasy', 15.992, 'The Secrets of Eloria', 'A spellbinding journey through the magical realm of Eloria, where a young apprentice must uncover ancient secrets to save her kingdom from darkness.', 'eloria.jpg'),
(49, 'Science Fiction', 20.506, 'Beyond the Stars', 'Set in the distant future, this thrilling space odyssey explores humanity&#039;s survival and search for a new home beyond the galaxy', 'beyond_the_stars.jpg'),
(54, 'History', 12.500, 'Sapiens: A Brief History of Humankind', 'Yuval Noah Harari&#039;s exploration of the history and impact of human evolution.', 'sapiens.jpg'),
(55, 'Fantasy', 13.999, 'The Way of Kings', 'An epic tale of war and redemption by Brandon Sanderson', 'way_of_kings.jpg'),
(56, 'Historical Fiction', 10.499, 'All The Light We Cannot See', 'A captivating story of love and survival during World War II', 'all_light_cannot_see.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_ID` int(11) NOT NULL,
  `Names` varchar(20) NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Messages` text DEFAULT NULL,
  `Contact_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_ID`, `Names`, `Email`, `Title`, `Messages`, `Contact_date`) VALUES
(1, 'Huy Viet the admin', 'viet.nguyenlodaunv1@hcmut.edu.vn', 'ONE MORE WITH READ ONLY', 'TEST TO SEE IF IT WORK', '2025-04-16'),
(2, 'Huy Viet the admin', 'viet.nguyenlodaunv1@hcmut.edu.vn', 'halo', 'AGAIN TO SEE', '2025-04-16'),
(3, 'concacnhor', 'nguyentranhuyviet04022004@gmail.com', 'baby', 'running down to the riptide', '2025-04-16'),
(4, 'concacnhor', 'nguyentranhuyviet04022004@gmail.com', 'Taken away to the dark side', 'I wanna be your left-hand man', '2025-04-16'),
(5, '105; DROP TABLE User', 'nguyentranhuyviet04022004@gmail.com', 'Test sql injection', 'something', '2025-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `Location_ID` int(10) UNSIGNED NOT NULL,
  `Location_name` varchar(100) NOT NULL,
  `Latitude` float NOT NULL,
  `Longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`Location_ID`, `Location_name`, `Latitude`, `Longitude`) VALUES
(1, 'University of Technology', 10.7733, 106.66),
(2, 'University of Natural Sciences', 10.7626, 106.682),
(3, 'University of Social Sciences and Humanities', 10.786, 106.703),
(4, 'International University', 10.8779, 106.802),
(5, 'University of Information Technology', 10.8695, 106.803),
(6, 'University of Economics and Law', 10.8713, 106.779),
(7, 'VNU-HCM High School for the Gifted', 10.878, 106.799);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(10) UNSIGNED NOT NULL,
  `Total_money` decimal(15,3) NOT NULL,
  `Users_ID` int(10) UNSIGNED NOT NULL,
  `Order_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `Order_ID` int(10) UNSIGNED NOT NULL,
  `Book_ID` int(10) UNSIGNED NOT NULL,
  `Quantity` int(10) UNSIGNED DEFAULT NULL,
  `Review_ID` int(10) UNSIGNED DEFAULT NULL,
  `Conditions` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Review_ID` int(11) NOT NULL,
  `Review_description` text NOT NULL,
  `Review_date` datetime DEFAULT current_timestamp(),
  `Stars` int(11) NOT NULL CHECK (`Stars` >= 0 and `Stars` <= 5),
  `Likes` int(10) UNSIGNED DEFAULT 0,
  `Disikes` int(10) UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Users_ID` int(10) UNSIGNED NOT NULL,
  `Email` varchar(254) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Passwords` varchar(100) NOT NULL,
  `Money_spent` decimal(15,3) NOT NULL,
  `PFP_URL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Users_ID`, `Email`, `User_name`, `Passwords`, `Money_spent`, `PFP_URL`) VALUES
(1, 'nguyentranhuyviet04022004@gmail.com', 'concacnhor', 'b811101b1b0758f5ee46cd10cfe20b37', 0.000, 'default_profile.png'),
(2, 'holaamigos@hcmut.edu.vn', 'test change', '298ff593b620920f2901e2f7e50f8da2', 0.000, 'pfp_2_user.png'),
(3, 'lmao@xdgmail.com', 'this is lmao', 'c0980dde88f784ad5bd26614e77b279d', 0.000, 'pfp_3_user.png'),
(4, 'user10@example.com', 'user10', '929268145c9179636fd5bc3a34f6be00', 0.000, 'default_profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admins_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`Location_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `Users_ID` (`Users_ID`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`Order_ID`,`Book_ID`),
  ADD KEY `Book_ID` (`Book_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Review_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Users_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admins_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `Book_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `Location_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Users_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Users_ID`) REFERENCES `users` (`Users_ID`) ON DELETE CASCADE;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`Order_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
