<?php
include 'dbConnection.php';
$klient_sql = "SELECT ID, Emri, Mbiemri FROM klientet WHERE Statusi='In' AND Level='klient'";
$klient_result = $conn->query($klient_sql);
$klient_row = $klient_result->fetch_assoc();
$admin_sql = "SELECT * FROM klientet WHERE Statusi='In' AND Level='admin'";
$admin_result = $conn->query($admin_sql);
$admin_row = $admin_result->fetch_assoc();
$sql = "SELECT * FROM klientet";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["Statusi"] == 'In' && $row["Level"] == 'klient') {
            echo "<option>" . $klient_row['ID'] . " " . $klient_row['Emri'] . " " . $klient_row['Mbiemri'] . "</option>";
        } else if ($admin_result->num_rows > 0) {
            echo "<option>" . $row['ID'] . " " . $row['Emri'] . " " . $row['Mbiemri'] . "</option>";
        }
    }
} else {
    echo "0 results";
}
$conn->close();