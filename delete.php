<?php
include "connection.php";

if (isset($_GET['id'])) 
{
    $id1 = $_GET['id'];
    $query3 = "DELETE FROM table1 WHERE ID ='$id1'";
     $result = $connection->query($query3);
     if ($result == TRUE) {
        header('Location: view.php');
    }else{
        echo "Error ";
    }
}
?>