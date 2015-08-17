<?php
    if(isset($_GET["id"])) {
        echo "About to delete the item with id " . $_GET["id"];

        // Database connection
        include("connection.php");
        $query = "DELETE FROM product WHERE id=" . $_GET["id"] . ";";
    	$results = mysql_query($query);
    	$row = mysql_fetch_array($results);
        header('Location: index.php');
    }
    else {
    	echo "You do not have an item number set!";

    }
?>