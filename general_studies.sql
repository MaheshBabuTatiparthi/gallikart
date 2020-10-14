

-- CREATE DATABASE IF NOT EXISTS `db_general_studies` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
-- USE `db_general_studies`;


-- Backup books table
-- CREATE TABLE IF NOT EXISTS `books_backup_1602092005` LIKE `books`;
-- INSERT INTO `books_backup_1602092005` SELECT * FROM `books`;

-- Delete books table
DROP TABLE IF EXISTS `books`;

-- Create books table
CREATE TABLE IF NOT EXISTS `books` (
	`book_id` int(11) NOT NULL AUTO_INCREMENT,
	`book_thumbnail` longtext NOT NULL DEFAULT '',
	`book_cover` longtext NOT NULL DEFAULT '',
	`book_title` varchar(128) NOT NULL DEFAULT '',
	`book_title_alt` varchar(128) NOT NULL DEFAULT '',
	`book_genre` text NOT NULL DEFAULT '',
	`book_author` varchar(128) NOT NULL DEFAULT '',
	`book_publisher` varchar(128) NOT NULL DEFAULT '',
	`book_isbn` varchar(128) NOT NULL DEFAULT '',
	`book_released` date NOT NULL DEFAULT '0000-00-00' ,
	`book_status` enum('Ongoing','End','Drop','Hiatus') NOT NULL DEFAULT 'Ongoing',
	`book_synopsis` text NOT NULL DEFAULT '',
	PRIMARY KEY (`book_id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;




-- Backup chapters table
-- CREATE TABLE IF NOT EXISTS `chapters_backup_1602092005` LIKE `chapters`;
-- INSERT INTO `chapters_backup_1602092005` SELECT * FROM `chapters`;

-- Delete chapters table
DROP TABLE IF EXISTS `chapters`;

-- Create chapters table
CREATE TABLE IF NOT EXISTS `chapters` (
	`chapter_id` int(11) NOT NULL AUTO_INCREMENT,
	`chapter_number` varchar(256) NOT NULL DEFAULT '',
	`chapter_date` date NOT NULL DEFAULT '0000-00-00' ,
	`chapter_title` varchar(128) NOT NULL DEFAULT '',
	`chapter_book` varchar(128) NOT NULL DEFAULT '',
	`chapter_content` longtext NOT NULL DEFAULT '',
	`chapter_status` enum('draft','publish') NOT NULL DEFAULT 'draft',
	PRIMARY KEY (`chapter_id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;



-- Delete users table
DROP TABLE IF EXISTS `users`;

-- Create users table
CREATE TABLE IF NOT EXISTS `users` (
	`user_id` int(11) NOT NULL AUTO_INCREMENT,
	`user_name` varchar(32) NOT NULL,
	`user_birthday` date NOT NULL DEFAULT '0000-00-00',
	`user_first_name` varchar(128) NOT NULL DEFAULT '',
	`user_last_name` varchar(128) NOT NULL DEFAULT '',
	`user_company` varchar(128) NOT NULL DEFAULT '',
	`user_email` varchar(128) NOT NULL DEFAULT '',
	`user_website` varchar(128) NOT NULL DEFAULT '',
	`user_level` ENUM('admin','user') NOT NULL DEFAULT 'user',
	`user_password` varchar(128) NOT NULL DEFAULT '',
	`user_token` varchar(128) NOT NULL DEFAULT '',
	`user_address_1` varchar(256) NOT NULL DEFAULT '',
	`user_address_2` varchar(256) NOT NULL DEFAULT '',
	`user_city` varchar(128) NOT NULL DEFAULT '',
	`user_state` varchar(128) NOT NULL DEFAULT '',
	`user_postcode` varchar(128) NOT NULL DEFAULT '',
	`user_country` varchar(128) NOT NULL DEFAULT '',
	`user_phone` text NOT NULL DEFAULT '',
	`user_note` text NOT NULL DEFAULT '',
	`user_expired` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`user_status` ENUM('banned','active','pending') NOT NULL DEFAULT 'pending',
	PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- Insert default administrator user
INSERT INTO `users` (`user_id` ,`user_name`,`user_birthday`,`user_first_name`,`user_last_name`,`user_company` ,`user_email` ,`user_website`, `user_level` ,`user_password`,`user_token`,`user_address_1`,`user_address_2`,`user_city`,`user_state`,`user_postcode`,`user_country`,`user_phone`,`user_note`,`user_expired`,`user_status`) VALUES
(1 , 'mahesh-babu','1990-03-30','Mahesh Babu', '','', 'app@godigitally.co.in','https://godigitally.co.in' , 'admin', '4ac8d9aa31d6988199c12cffebad4d84ad865afd','','','','','','','','','','0000-00-00 00:00:00','active');
