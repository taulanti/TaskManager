<?php
include 'dbConnection.php';

$sql = "SELECT * FROM klientet WHERE Statusi='In'";
$result=$conn->query($sql);
if($result->num_rows == 0){
    echo "negative";
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
