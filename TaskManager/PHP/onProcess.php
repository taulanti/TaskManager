<?php
require 'dbConnection.php';

$titulli = $_POST["Titulli"];
$emri = $_POST["Emri"];
$mbiemri = $_POST["Mbiemri"];

$pID_sql = "SELECT ID from punetoret WHERE Emri='$emri' AND Mbiemri='$mbiemri'";
$pID_result = $conn->query($pID_sql);
$pID_row = $pID_result->fetch_assoc();
$pID = $pID_row["ID"];
$krUpdate = "UPDATE kerkesat SET Statusi='Ne Proces' WHERE Titulli='$titulli'";
$krUpdate_result = $conn->query($krUpdate);
if ($conn->query($krUpdate) === TRUE) {
    $pUpdate = "UPDATE punetoret SET Aktiviteti='I zene' WHERE Emri='$emri' AND Mbiemri='$mbiemri'";
    $pUpdate_result = $conn->query($pUpdate);
    $pUpdate = "UPDATE kerkesat SET pID='$pID', Punetori='$pID' WHERE Titulli='$titulli'";
    $pUpdate_result = $conn->query($pUpdate);
    header('Location: http://localhost:63342/Graphic%20Design/home%20page.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
