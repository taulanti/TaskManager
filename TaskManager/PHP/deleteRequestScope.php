<?php
include 'dbConnection.php';

$sql = "SELECT Emri, Mbiemri, Level FROM klientet WHERE Statusi='In'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row["Level"] == 'klient') {
    $emri = $row["Emri"];
    $mbiemri = $row["Mbiemri"];
    echo "$emri ,$mbiemri";
} else if ($row["Level"] == 'admin') {
    echo "admin";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
