<?php
	// Database Connection
	include("connection.php");

    if(isset($_POST)) {
        $id = mysql_real_escape_string($_POST["id"]);
        $name = mysql_real_escape_string($_POST["name"]);
        $description = mysql_real_escape_string($_POST["description"]);
        $value = mysql_real_escape_string($_POST["value"]);


        $query = "UPDATE product set name='" . $name . "', description='" . $description . "', value='" . $value . "' where id=" . $id . ";";
        $result = mysql_query($query);
        echo $result;

    } else {
        echo '0';
    }

?>