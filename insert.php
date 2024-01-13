<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert User</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h3><a href="index.php">Log out</a></h3>
    <h3><a href="view.php">View</a></h3>
    <h1>Enter New User</h1>
    
    <center>
    <form  method="POST" >

        <table width="60%">
            <tr>
                <td>First Name :</td>
                <td><input type="text" name="first_name" required></td>
            </tr>

            <tr>
                <td>Last Name :</td>
                <td> <input type="text" name="last_name" required></td>

            </tr>

            <tr>
                <td>Email Address :</td>
                <td> <input type="email" name="email" required></td>
            </tr>

            <tr>
                <td>Postal Address :</td>
                <td><input type="text" name="address" required></td>
            </tr>

            <tr>
                <td>City :</td>
                <td><input type="text" name="city" required></td>

            </tr>

            <tr>
                <td>Country :</td>
                <td> <input type="text" name="country" required></td>
            </tr>

            <tr>
                <td>Postal Code :</td>
                <td><input type="text" name="postal_code" required></td>
            </tr>

            <tr>
                <td>Telephone Number :</td>
                <td>  <input type="tel" name="telephone" required></td>
            </tr>

            <tr>
                <td>Comment :</td>
                <td> <textarea  name="comment" rows="4" cols="50"></textarea></td>
            </tr>

        </table>
        
        <input type="submit" name="submit" value="submit">
        <input type="reset">
    </form>
    </center>
</body>
</html>

  </body>
</html>


<?php
include "connection.php";

  if (isset($_POST['submit'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $pcode = $_POST['postal_code'];
    $tp = $_POST['telephone'];
    $comment1 = $_POST['comment'];
    
    $query1 = "INSERT INTO `table1`(`First_Name`, `Last_Name`, `Email_Address`, `Postal_Address`, `City`, `Country`, `Postal_Code`, `Telephone_Number`, `Comment1`) VALUES ('$fname', '$lname', '$email', '$address', '$city', '$country', '$pcode', '$tp', '$comment1');";

    $result = $connection->query($query1);

    if ($result == TRUE) {
      echo "New record created successfully.";
      header('Location: insert.php');
    }else{
      echo "Error:";
    }
    $connection->close();
  }
?>





