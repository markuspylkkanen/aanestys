<?php

if (!isset($_GET['id'])) {
    die('dead');
}
$last_id = intval($_GET['id']);


include "db.php";
$sql = "SELECT * FROM vote WHERE id = $last_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - kysymys: ". $row["aihe"];
    }
} else {
    echo "ei ole kysymyksiä";
}

$conn->close();


if (!isset($_GET['id'])) {
    die('dead');
}
$last_id = intval($_GET['id']);


include "db.php";
$sql = "SELECT * FROM optio WHERE id = $last_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Vaihtoehdot: ". $row["optio_value"];
    }
} else {
    echo "ei ole vaihtoehtoja";
}

$conn->close();
?>
