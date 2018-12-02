<?php
include 'dbConnection.php';

$sql = "UPDATE klientet SET Statusi='Out' WHERE Statusi='IN'";
if($conn->query($sql) === TRUE){
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
