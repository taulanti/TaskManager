<?php
include 'dbConnection.php';

$emri= $_POST["emri"];
$mbiemri=$_POST["mbiemri"];
$produkti=$_POST["produkti"];

$sql = "INSERT INTO klientet(Emri, Mbiemri, Produkti) 
        VALUES ('$emri', '$mbiemri', '$produkti')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

?>