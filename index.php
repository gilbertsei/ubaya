<title>Taxi Online</title>
<?php
required_once("database.php");
?>

<body>
	<h2>Driver</h2>
<table> 
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>License</th>
	</tr>
</php
	$sql = "SELECT * FROM driver ORDER by name ASC";
	$result = $c->query($sql);
	if ($result->num_rows > 0) {
	$driver = array();
	$i = 0;
	while ($obj = $result->fetch_assoc()) {
	echo '<tr>';
	echo '<td>' . $obj['id']. '</td>';
	echo '<td>' . $obj['name']. '</td>';
	echo '<td>' . $obj['license']. '</td>';
	}
</body>
