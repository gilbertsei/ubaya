<!DOCTYPE html>
<html>
<head>
	<title>Taxi Online</title>
</head>
<body>
<?php $sql = "CREATE TABLE database.php (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
?>
</body>
</html>