-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2023 at 01:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dept_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_db`
--

CREATE TABLE `books_db` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_desc` varchar(500) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books_db`
--

INSERT INTO `books_db` (`book_id`, `book_title`, `book_desc`, `book_author`, `dt`) VALUES
(1, 'Introduction to the Theory of Computation', 'This book provides a comprehensive introduction to the theory of computation, including formal languages, automata, computability, and complexity theory.', 'Michael Sipser', '2023-07-10 21:41:18'),
(2, 'Artificial Intelligence: A Modern Approach', 'This book offers a comprehensive and up-to-date introduction to the field of artificial intelligence, covering various AI techniques, including problem-solving, knowledge representation, machine learning, and natural language processing.', 'Stuart Russell, Peter Norvig', '2023-07-10 21:41:18'),
(3, 'The Pragmatic Programmer: Your Journey to Mastery', 'This book is a practical guide to software development, focusing on the mindset, techniques, and best practices that help programmers become more efficient and effective in their work.\r\n', ' Andrew Hunt, David Thomas', '2023-07-10 21:41:18'),
(4, 'Design Patterns: Elements of Reusable Object-Oriented Software', 'This classic book presents the concept of design patterns in software development, offering reusable solutions to common design problems, and illustrating them using various programming languages.\r\n', 'Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides', '2023-07-10 21:41:18'),
(5, 'Computer Networks: A Systems Approach', 'This book provides a comprehensive introduction to computer networks, covering topics such as network protocols, architecture, network programming, and internet technologies.', 'Larry L. Peterson, Bruce S. Davie', '2023-07-10 21:41:18'),
(6, 'Introduction to Algorithms', 'Widely known as \"CLRS,\" this book is a comprehensive guide to algorithms, covering a broad range of algorithms and their analysis techniques.', 'Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford Stein', '2023-07-10 21:41:18'),
(7, 'Computer Organization and Design: The Hardware/Software Interface', 'This book provides a comprehensive introduction to computer architecture and organization, covering topics such as instruction set architecture, memory hierarchy, pipelining, and parallelism.', 'David A. Patterson, John L. Hennessy', '2023-07-10 21:41:18'),
(8, 'Operating System Concepts', 'This book offers a thorough introduction to operating systems, covering topics such as process management, memory management, file systems, and I/O systems.', 'Abraham Silberschatz, Peter B. Galvin, Greg Gagne', '2023-07-10 21:44:18'),
(9, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'This book emphasizes the importance of writing clean and maintainable code and provides practical guidelines, principles, and best practices for software development.\r\n', 'Robert C. Martin (Uncle Bob)', '2023-07-10 21:43:18'),
(10, 'Database System Concepts', 'This book covers the fundamental concepts of database systems, including data models, database design, query processing, and transaction management.', 'Abraham Silberschatz, Henry F. Korth, S. Sudarshan', '2023-07-10 21:42:18'),
(11, 'Introduction to Data Mining', 'This book provides a comprehensive introduction to data mining techniques and concepts, including data preprocessing, classification, clustering, and association analysis.', 'Pang-Ning Tan, Michael Steinbach, Vipin Kumar', '2023-07-10 21:41:18'),
(12, 'The Algorithm Design Manual', 'This book offers a practical guide to algorithm design and analysis, providing a wide range of algorithms along with explanations, examples, and problem-solving techniques.', 'Steven S. Skiena', '2023-07-10 21:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `username`, `email`, `password`, `timestamp`) VALUES
(1, 'ajaykasturi', 'ajay@gmaill.com', '12345', '2023-07-11 14:26:22'),
(2, 'B182081', 'ajaykasturi2081@gmail.com', '1', '2023-07-11 14:26:22'),
(4, 'sfs', 'fsfs@gav', '1', '2023-07-11 14:26:22'),
(5, '123sds', '1saikumar@gmail.com', '1', '2023-07-11 14:26:55'),
(6, '1232', 'ajayreigns0@gmail.comsdfgsdage', 'a', '2023-07-11 14:48:09'),
(7, '2', 'ajayreigns0@gmail.com214e1', '1', '2023-07-11 14:48:37'),
(8, '1', '2@gm', '1', '2023-07-11 17:00:13'),
(9, 'ajayreigns0@gmail.com', '1@g', '1', '2023-07-11 17:12:33'),
(10, '24312', '13412@gd', '1', '2023-07-11 17:13:43'),
(11, 'ajayreigns0@gmail.comdadc', 'ajayreigns0@gmail.com12qwsqa', '1', '2023-07-11 17:16:02'),
(12, 'sfsafajayreigns0@gmail.comdadc', 'ajayreigns0@gmail.com12qwsqasdfas', '1', '2023-07-11 17:17:15'),
(13, 'sgnbsdbv', 'sfsdv@gmail.com', '1', '2023-07-11 17:19:55'),
(14, 'ajaysai', 'ajaysai@gmail.com', '123', '2023-07-11 21:20:20'),
(15, 'sri@gmail', 'sri@gmail.com', '1', '2023-07-12 20:26:46'),
(16, 'ajayreigns0@gmail.com121ed', '1@1err1rdc', '1', '2023-07-12 20:27:57'),
(17, '1@', '1@34', '1', '2023-07-12 20:28:53'),
(18, '1ajayreigns0@gmail.com', '1ajayreigns0@gmail.com', '1', '2023-07-12 20:37:42'),
(19, 'ajayreigns0@gmail.com143', 'ajayreigns0@gmail.com143', '1', '2023-07-12 20:43:20'),
(20, 'ajay', 'ajaykasturi@gmail.com', '1', '2023-07-12 22:08:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_db`
--
ALTER TABLE `books_db`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_db`
--
ALTER TABLE `books_db`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
