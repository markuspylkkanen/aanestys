<button type="button" class="btn btn-danger">Poista äänestyksiä</button>
<button type="button" class="btn btn-primary">Muokkaa</button><br>
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
$sql = "SELECT * FROM optio WHERE vote_id = $last_id";
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
