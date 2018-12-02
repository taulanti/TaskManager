<?php
include 'dbConnection.php';

$sql = "SELECT Level FROM klientet WHERE Statusi='In'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($row["Level"] == 'klient') {
    echo "klient";
} else if ($row["Level"] == 'punetor') {
    echo "punetor";
} else if ($row["Level"] == 'admin') {
    echo "admin";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
