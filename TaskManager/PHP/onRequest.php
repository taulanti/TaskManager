<?php
require 'dbConnection.php';

$titulli = $_POST["Titulli"];

$pID_sql = "SELECT pID from kerkesat WHERE Titulli='$titulli'";
$pID_result = $conn->query($pID_sql);
$pID_row = $pID_result->fetch_assoc();
$pID = $pID_row["pID"];
if ($conn->query($pID_sql)) {
    $krUpdate = "UPDATE kerkesat SET Statusi='Ne Sistem' WHERE Titulli='$titulli'";
    $krUpdate_result = $conn->query($krUpdate);
    $pUpdate = "UPDATE punetoret SET Aktiviteti='I lire' WHERE ID='$pID'";
    $pUpdate_result = $conn->query($pUpdate);
    $kUpdate = "UPDATE kerkesat SET pID=NULL, Punetori=NULL WHERE Titulli='$titulli'";
    $kUpdate_result = $conn->query($kUpdate);
    header('Location: http://localhost:63342/Graphic%20Design/home%20page.html');


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}