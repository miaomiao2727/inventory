<?php
	// Database Connection
	include("connection.php");
	// SQL insert command query
	$sql = "SELECT * FROM product";
	$id = mysql_num_rows(mysql_query($sql));
	//echo "<pre>" . print_r($_POST) . "</pre>"; exit();
    $name = mysql_real_escape_string($_POST["name"]);
    $description = mysql_real_escape_string($_POST["description"]);
    $height = mysql_real_escape_string($_POST["height"]);
    $weight = mysql_real_escape_string($_POST["weight"]);
    $value = mysql_real_escape_string($_POST["value"]);

	$query = "INSERT INTO product (id, name, description, width, height, weight, length, value) values ('" . $id . "','" . $name . "','" . $description . "','/','" . $height . "','" . $weight . "','/','" . $value . "');";
	$result = mysql_query($query);

	echo "New product record added, thanks.";
	header("location: index.php");

?>
