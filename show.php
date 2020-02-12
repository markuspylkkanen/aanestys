<?php

if (isset($_GET['id'])) {
    echo "juup";
}


include "db.php";
$sql = "SELECT * FROM vote";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - kysymys: ". $row["aihe"];
    }
} else {
    echo "ei ole kysymyksiä";
}

$conn->close();
?>