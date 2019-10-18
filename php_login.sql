-- create database
CREATE DATABASE php_login;

USE php_login;

-- Table structure for table `user`
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
 
-- Dumping data for table `user`
-- password di enkripsi dengan MD5
INSERT INTO `user` (`nama`, `username`, `password`) VALUES
('Admin', 'admin', MD5('admin'));


