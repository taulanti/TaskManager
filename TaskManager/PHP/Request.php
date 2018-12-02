<?php
include 'dbConnection.php';

$klient_sql = "SELECT * FROM klientet";
$klient_result = $conn->query($klient_sql);
$titulli = $_POST["titulli"];
$departamenti = $_POST["departamenti"];
while ($row = $klient_result->fetch_assoc()) {
    $kID = $row['ID'];
    if ($row["Statusi"] == 'In' && $row["Level"] == 'klient') {
        $sql = "INSERT INTO kerkesat(Titulli, Departamenti, kID) 
        VALUES ('$titulli', '$departamenti', '$kID')";
        if ($conn->query($sql) === TRUE) {
            header('Location: http://localhost:63342/Graphic%20Design/home page.html');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;

        }
    } else if ($row["Statusi"] == 'In' && $row["Level"] == 'admin') {
        $klienti = $_POST["klientet"];
        list($klientID, $klientEmri, $klientMbiemri) = explode(" ", "$klienti");
        $sql = "INSERT INTO kerkesat(Titulli, Departamenti, kID) 
        VALUES ('$titulli', '$departamenti', '$klientID')";
        if ($conn->query($sql) === TRUE) {
            header('Location: http://localhost:63342/Graphic%20Design/home page.html');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;

        }
    }
}

?>