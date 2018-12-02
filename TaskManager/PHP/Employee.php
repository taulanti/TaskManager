<?php
include 'dbConnection.php';

$emri= $_POST["emri"];
$mbiemri=$_POST["mbiemri"];
$departamenti=$_POST["departamenti"];

$sql = "INSERT INTO punetoret(Emri, Mbiemri, Departamenti) 
        VALUES ('$emri', '$mbiemri', '$departamenti')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
?>