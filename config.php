<?php

/* 
        *******************************
		**         IMPORTANT         **
        ********************************
		
		first go to mysql create Create database covide-x
		and then
		it will Automatic create table or insert a data..


 */



/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'covid-x');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// sql to create table

$sql = "
CREATE TABLE `covid` (
  `id` int(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `aadhar` int(20) NOT NULL,
  `profession` varchar(55) NOT NULL,
  `estatus` varchar(55) NOT NULL,
  `dod` varchar(55) NOT NULL,
  `sreasion` varchar(55) NOT NULL,
  `ereasion` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if ($link->query($sql) === TRUE) {
  echo "Table covid created successfully <br/> <br/>";
			  $sqlo = "

			INSERT INTO `covid` (`id`, `name`, `aadhar`, `profession`, `estatus`, `dod`, `sreasion`, `ereasion`, `time`) VALUES
			(1, 'amanop', 454, 'farmer', 'private', '25/04/2019', 'oxygen', 'hgytd ytduf', '2021-05-19 19:54:25'),
			(2, 'surya roy', 0, 'businessman', 'Goverment', '18/1/2019', 'Oxygen', 'sdc', '2021-05-19 20:31:44'),
			(3, 'welson', 5421, 'Engineer', 'Goverment', '1/1/2019', 'Oxygen', 'asc', '2021-05-19 20:32:24'),
			(4, 'agent mok', 787878, 'Farmer', 'Private', '1/1/2019', 'Oxygen', 'asd', '2021-05-19 20:36:32'),
			(5, 'hero king', 88888, 'Farmer', 'Private', '1/1/2019', 'Oxygen', 'ghr', '2021-05-19 20:41:04'),
			(6, 'julia', 0, 'Farmer', 'Private', '1/1/2019', 'Oxygen', 'khyu', '2021-05-19 20:43:33'),
			(7, 'sachin', 45, 'Doctor', 'Private', '1/1/2019', 'Oxygen', 'ghyfg', '2021-05-19 20:45:02')";
			
			
			if ($link->query($sqlo) === TRUE) {
			  echo "Demo data inserted successfully <br/> <br/>";
			}
			else {
				/*
			  echo "Error creating table: " . $link->error;
			  
			  */
			}

 
} 
else {
	/*
  echo "Error creating table: " . $link->error;
  
  */
}

?>