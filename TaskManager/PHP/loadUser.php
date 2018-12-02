<?php
include 'dbConnection.php';
$sql = "SELECT Emri, Mbiemri FROM klientet WHERE Statusi='In'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["Emri"] . " " . $row["Mbiemri"];
    }
} else {
    echo "0 results";
}
$conn->close();