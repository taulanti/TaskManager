<?php
include 'dbConnection.php';

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT Emri, Mbiemri FROM klientet WHERE Emri='$username' AND Mbiemri='$password'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    echo "success";
    $sql1="UPDATE klientet SET Statusi='In' WHERE Emri='$username' AND Mbiemri='$password'";
    $result1=$conn->query($sql1);
} else {
    echo "failed";
}

$conn->close();
