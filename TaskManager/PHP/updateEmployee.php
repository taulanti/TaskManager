<?php
include 'dbConnection.php';

$sql = "SELECT Emri, Mbiemri, Departamenti, Aktiviteti FROM punetoret";
$sql2 = "SELECT  punetoret.Emri AS pEmri, punetoret.Mbiemri AS pMbiemri, punetoret.Departamenti, 
        punetoret.Data AS pData, punetoret.Aktiviteti,kerkesat.Titulli,kerkesat.Data, klientet.Emri, klientet.Mbiemri
        FROM punetoret
        INNER JOIN kerkesat ON punetoret.ID = kerkesat.pID
        INNER JOIN klientet ON klientet.ID = kerkesat.kID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["Aktiviteti"] == "I lire") {
            echo "<li class='pRows' style='background-color: #f1d979; margin-bottom:10px; margin-top:10px; 
            height:60px;cursor: default' 
            ondrop='drag_drop_process(event)' 
                ondragover='allowDrop(event)'><header class='second_headers'>" . $row["Emri"] . "</header>" .
                "<header class='second_headers'>" . $row["Mbiemri"] . "</header>" .
                "<header class='departamenti'>" . $row["Departamenti"] . "</header>" . "</li>";
        }
    }
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_assoc()) {
        if ($row2["Aktiviteti"] == "I zene") {
            echo "<li class='pRows' style='background-color: #f1d979; height:95px'  draggable='true' ondragstart='drag_start(event)' ondragend='drag_end(event)'>" .
                "<header class='titulli' style='color:#625931'>" . $row2["Titulli"] . "</header>" .
                "<header class='klienti' style='color:#b09e58'>" . $row2["Emri"] . " " . "</header>" .
                "<header class='klienti' style='color:#b09e58'>" . $row2["Mbiemri"] .
                " - " . "</header>" . "<header class='klienti' style='color:#b09e58'>" . $row2["Data"] . "</header>" .
                "<header class='punetori'>" . $row2["pEmri"] . " " . "</header>" . "<header class='punetori'>" .
                $row2["pMbiemri"] . "</header>" . "<header class='pdata' style='padding-left: 3px;padding-top:0px'>" .
                $row2["pData"] . "</header>" . "</li>";
        }
    }

} else {
    echo "0 results";
}
$conn->close();