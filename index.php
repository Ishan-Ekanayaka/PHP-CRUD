<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Home Page</title>
</head>

<body>

	<h1 style="text-decoration: none;">***** Welcome *****</h1>

	<center>
    <form  method="POST" >

        <table width="40%">
            <tr>
                <td>User Name :</td>
                <td><input type="text" name="user_name" required></td>
            </tr>

            <tr>
                <td>Password :</td>
                <td> <input type="text" name="password" required></td>

            </tr>
        </table>
    </br>
        <input type="submit" name="login" value="Login">
    </form>
	</center>
</body>
</html>

<?php  
include "connection.php";
if(isset($_POST["login"]))
{  
  
    if(!empty($_POST['user_name']) && !empty($_POST['password'])) 
    {  
        $uname = $_POST['user_name'];  
        $pword = $_POST['password'];

        $query5 = "SELECT * FROM `table2` WHERE `UName`='$uname';" ;
        $result = $connection->query($query5);
        $rows=mysqli_num_rows($result); 

        if($rows>0)
        {
          while ($row = $result->fetch_assoc()) 
            {
                $un = $row['UName'];
                $pw = $row['Pword'];

                if($un == $uname && $pw == $pword)
                {
                    header("Location: insert.php");
                }
                else
                {
                echo "Invalid Password";
                }
            
            }
            
        }
        else 
        {  
            echo "Invalid User Name or Password";  
        }
          
    } 
    else 
    {  
         echo "Enter All Values";  
    
    }  
}  

?>  
