<?php
include 'dbConnection.php';
$sql = "SELECT kerkesat.Titulli, klientet.Emri, klientet.Mbiemri, kerkesat.Data, kerkesat.Departamenti, kerkesat.Statusi
      FROM kerkesat
      INNER JOIN klientet
      ON kerkesat.kID=klientet.ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["Statusi"] == "Ne Sistem") {
            echo "<li class='kRows' draggable='true' ondragstart='drag_start(event)' ondragend='drag_end(event)'
                ondrop='drag_drop_request(event)'>" .
                "<header class='titulli'>" . $row["Titulli"] . "</header>" .
                "<header class='klienti'>" . $row["Emri"] . " " . "</header>" .
                "<header class='klienti'>" . $row["Mbiemri"] . "</header>" . "<header class='dKlienti'>" . " - " . $row["Data"] .
                "</header>" . "<header class='departamenti'>" . $row["Departamenti"] . "</header>" .
                "<header class='delLink' onclick='deleteRequest(event)'>Fshij Kërkesën</header>" . "</li>";
        } else {
            echo "";
        }
    }
} else {
    echo "0 results";
}
$conn->close();