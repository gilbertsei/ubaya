<!DOCTYPE html>
<html>
<head>
	<title>Taxi Online</title>
</head>
<body>
<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>
</body>
</html>
