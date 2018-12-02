<?php
include 'dbConnection.php';
$sql = "SELECT kerkesat.Titulli, klientet.Emri, klientet.Mbiemri, kerkesat.Data, kerkesat.Departamenti, kerkesat.Statusi,
		kerkesat.DataPerfundimit, kerkesat.Punetori
      FROM kerkesat
      INNER JOIN klientet
      ON kerkesat.kID=klientet.ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["Statusi"] == "E Perfunduar") {
            $punetoriID=$row["Punetori"];
            $punetori_sql="SELECT Emri, Mbiemri FROM punetoret WHERE ID='$punetoriID'";
            $punetori_result=$conn->query($punetori_sql);
            $punetori_row=$punetori_result->fetch_assoc();
            $Emri=$punetori_row["Emri"];
            $Mbiemri=$punetori_row["Mbiemri"];
            echo "<li class='fRows' draggable='true' ondragstart='drag_start(event)' ondragend='drag_end(event)'
                ondrop='drag_drop_finished(event)' style='background-color: #7ded77;height:115px;'>" .
                "<header class='titulli' style='color:#336131'>" . $row["Titulli"] . "</header>" .
                "<header class='klienti' style='color:#5bad57'>" . $row["Emri"] ." " . "</header>" .
                "<header class='klienti' style='color:#5bad57'>" . $row["Mbiemri"] ." - " . "</header>" .
                "<header class='klienti' style='color:#5bad57'>" . $row["Data"] . "</header>" .
                "<header class='departamenti'>" . $row["Departamenti"] . "</header>" .
                "<header class='punetori' style='color:#2a2a2a;padding-top:0px;'>" . $Emri . "</header>" .
                "<header class='punetori' style='color:#2a2a2a;padding-top:0px;'>" . $Mbiemri . "</header>" .
                "<header class='pdata' style='color:#336131;padding-left: 3px;padding-top:0px'>" .
                $row["DataPerfundimit"] . "</header>" . "</li>";
        } else {
            echo "";
        }
    }
} else {
    echo "";
}
$conn->close();