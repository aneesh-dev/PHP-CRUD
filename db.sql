create database std_info;

use std_info;

/* Create Database and Table */
CREATE TABLE `enquiry` (
  `id` int(20) NOT NULL auto_increment,
  `name` varchar(100),
  `email` varchar(100),
  `mobile` varchar(10),
  `address` varchar(50),
  `salary` varchar(15),
  PRIMARY KEY  (`id`)
);

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `address`, `salary`) VALUES
(1, 'Ritik', 'ritik@gmail.com', '9658745125', 'Lucknow, UP', '15 LPA'),
(2, 'Praveen', 'praveen@gmail.com', '9586321475', 'Bengaluru, KA', '15 LPA'),
(3, 'Arshad', 'arshad@gmail.com', '7569845632', 'Bengaluru, KA', '10 LPA'),
(4, 'Shivam', 'shivam@gmail.com', '8235697412', 'Lucknow, UP', '10 LPA'),
(5, 'Parikshith', 'parikshith@gmail.com', '9823478516', 'Hyderabad, TG', '12 LPA')