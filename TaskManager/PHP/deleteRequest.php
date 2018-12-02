<?php
include 'dbConnection.php';

$titulli = $_POST["titulli"];

$sql="DELETE FROM kerkesat WHERE Titulli='$titulli'";
if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost:63342/Graphic%20Design/home page.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}