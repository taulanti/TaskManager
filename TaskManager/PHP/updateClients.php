<?php
include 'dbConnection.php';
$sql = "SELECT ID, Emri, Mbiemri FROM klientet";
$result = $conn->query($sql);
echo "<li class='showKlient_li' style='background-color: lightgray;color:black;margin-bottom: 0px'>"
    . "ID" . " | " . " Emri" . " - " . " Mbiemri" . "</li>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li class='showKlient_li'>" . $row['ID'] . " | " . $row['Emri'] . " - " . $row['Mbiemri'] . "</li>";
    }
} else {
    echo "0 results";
}
$conn->close();