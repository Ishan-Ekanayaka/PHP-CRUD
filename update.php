<?php
include "connection.php";
if (isset($_GET['id'])) 
{
	$id1 = $_GET['id'];
	$query4 = "SELECT * FROM table1 WHERE id='$id1'";
	$result = $connection->query($query4);
	$row = $result->fetch_assoc();

	$fname = $row['First_Name'];
    $lname = $row['Last_Name'];
    $email = $row['Email_Address'];
    $address = $row['Postal_Address'];
    $city = $row['City'];
    $country = $row['Country'];
    $pcode = $row['Postal_Code'];
    $tp = $row['Telephone_Number'];
    $comment1 = $row['Comment1'];


?>

<<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Upadte Details</title>

</head>

<body>

	<h3><a href="index.php">Log out</a></h3>
    <h3><a href="view.php">View</a></h3>
    <h1>Upadte Details</h1>

    <center>
    <form  method="POST" >

        <table width="60%">
            <tr>
                <td>First Name :</td>
                <td><input type="text" name="first_name"  required value="<?php echo $fname; ?>"></td>
            </tr>

            <tr>
                <td>Last Name :</td>
                <td> <input type="text" name="last_name" required value="<?php echo $lname; ?>"></td>

            </tr>

            <tr>
                <td>Email Address :</td>
                <td> <input type="email" name="email" required value="<?php echo $email; ?>"></td>
            </tr>

            <tr>
                <td>Postal Address :</td>
                <td><input type="text" name="address" required value="<?php echo $address; ?>"></td>
            </tr>

            <tr>
                <td>City :</td>
                <td><input type="text" name="city" required value="<?php echo $city; ?>"></td>

            </tr>

            <tr>
                <td>Country :</td>
                <td> <input type="text" name="country" required value="<?php echo $country; ?>"></td>
            </tr>

            <tr>
                <td>Postal Code :</td>
                <td><input type="text" name="postal_code" required value="<?php echo $pcode; ?>"></td>
            </tr>

            <tr>
                <td>Telephone Number :</td>
                <td>  <input type="tel" name="telephone" required value="<?php echo $tp; ?>"></td>
            </tr>

            <tr>
                <td>Comment :</td>
                <td> <textarea  name="comment" rows="4" cols="50" autofocus ><?php echo $comment1; ?></textarea></td>
            </tr>

        </table>
        
        <input type="submit" name="upd" value="Update">
       
    </form>
    </center>
</body>
</html>

	<?php


  if (isset($_POST['upd'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $pcode = $_POST['postal_code'];
    $tp = $_POST['telephone'];
    $comment1 = $_POST['comment'];
    
    $query4 = "UPDATE `table1` SET `First_Name`='$fname',`Last_Name`='$lname',`Email_Address`='$email',`Postal_Address`='$address',`City`='$city',`Country`='$country',`Postal_Code`='$pcode',`Telephone_Number`='$tp',`Comment1`='$comment1' WHERE `id`='$id1';";

    $result = $connection->query($query4);

    if ($result == TRUE) {
      header('Location: view.php');
    }else{
      echo "Error:";
    }
    $connection->close();
  }

}

?>