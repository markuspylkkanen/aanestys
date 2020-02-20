<h2>Poista äänestyksiä tai vaihtoehtoja</h2>
<br>

<?php

if (!isset($_GET['id'])) {
    die('dead');
}
$id = intval($_GET['id']);


include "db.php";
$sql = "SELECT * FROM vote WHERE id = $id";
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
     
        // if ($row['deleted'] == 'y') {
        //     print "<a href='delete.php?id={$_GET[id]}'>Undeleted</a>";
        // }
         
         
        
    }
} else {
    echo "ei ole vaihtoehtoja";
}

$conn->close();
?>
<br>
<br>
<a href='del.php?id={$_GET[id]}' class="">Poista äänestys</a>
<a href='del.php?id={$_GET[id]}' class="">Poista vaihtoehto</a>





<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
