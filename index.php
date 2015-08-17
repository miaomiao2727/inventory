<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Inventory App</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <ul class="nav-tabs">
            <li class="active">
                <a href="#tab1">Check inventory</a>
            </li>
            <li>
                <a href="#tab2">Add product</a>
            </li>
            <li>
                <a href="#tab3">Check orders</a>
            </li>
            <li>
                <a href="#tab4">Add order</a>
            </li>
        </ul>


        <table border="0" align="center" id="tab1" class="tab-content active">
        <tr>
        	<td>Inventory List</td>
        </tr>

        <?php
        // Database Connection
        include("connection.php");
        // SQL query to list all the items
        $query = "SELECT * FROM product";
        $results = mysql_query($query);
        $num_rows = mysql_num_rows($results);
        if($num_rows > 0) {
        	while($row = mysql_fetch_array($results)) {
                echo "<tr bgcolor=\"c7ddf5\">\n";
        		echo "<td class='name'>" . $row["name"] . "</td>";
        		echo "<td class='description'>" . $row["description"] . "</td>";
        		echo "<td class='value'>$" . $row["value"] . "</td>";
        		echo "<td class='edit' data-id='" . $row['id'] . "'>Edit</td>";
        		echo "<td><a class='delete' href=\"delete.php?id=" . $row["id"] . "\">Delete</a></td>";
        		echo "</tr>\n";
        	}
        }
        ?>
        </table>

        <form id="tab2" class="tab-content hide" action="process.php" method="post" enctype="multipart/form-data">
        	<label for="item_name">Name:</label>
        	<input type="text" name="name" id="name">
        	<br />

        	<label for="item_decription">Description:</label> <br / >
        	<textarea name="description" id="description" cols="40" rows="6"></textarea>
        	<br />

        	<label for="item_price">Price:</label>
        	<input type="text" name="value" id="value">
        	<br />

        	<label for="item_height">Height:</label>
        	<input type="text" name="height" id="height">
        	<br />

        	<label for="item_weight">Weight:</label>
        	<input type="text" name="weight" id="weight">
        	<br />

            <input type="submit" name="submit" value="Submit" />
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>