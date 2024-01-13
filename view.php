<?php
include "connection.php";
?>

<!DOCTYPE html>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Details</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h3><a href="index.php">Log out</a></h3>
    <h3><a href="insert.php">Add</a></h3>
    <h1>View User Details</h1>
	<center>
	<table class="td2" border="1">
		<tr>
			<th>ID </th>
			<th>First Name </th>	
			<th>Last Name </th>	
			<th>Email Address </th>
			<th>Postal Address </th>	
			<th>City </th>
			<th>Country</th> 	
			<th>Postal Code </th>
			<th>Telephone Number </th>	
			<th>Comment</th>
		</tr>

		<?php
                $query2 = "SELECT * FROM table1";
                $result = $connection->query($query2);
                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>

        <tr>
        	<td class="td2"><?php echo $row['ID']; ?></td>
        	<td class="td2"><?php echo $row['First_Name']; ?></td>
        	<td class="td2"><?php echo $row['Last_Name']; ?></td>
        	<td class="td2"><?php echo $row['Email_Address']; ?></td>
        	<td class="td2"><?php echo $row['Postal_Address']; ?></td>
        	<td class="td2"><?php echo $row['City']; ?></td>
        	<td class="td2"><?php echo $row['Country']; ?></td>
        	<td class="td2"><?php echo $row['Postal_Code']; ?></td>
        	<td class="td2"><?php echo $row['Telephone_Number']; ?></td>
        	<td class="td2"><?php echo $row['Comment1']; ?></td>

        	<td class="td2"><a class="a1" href="update.php?id=<?php echo $row['ID']; ?>"> Edit&nbsp;&nbsp;&nbsp;</a></td>
            <td class="td2"><a class="a1" href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a></td>

        </tr>
       <?php 
    			}
    		}
    	?>
	</table>
	</center>

</body>
</html>

	