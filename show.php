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
?>



<?php
$conn->close();


if (!isset($_GET['id'])) {
    die('dead');
}
$last_id = intval($_GET['id']);


include "db.php";
$sql = "SELECT * FROM optio WHERE vote_id = $last_id";
$result = $conn->query($sql);

?>
<?php if ($result->num_rows > 0): ?>
    
    <?php while($row = $result->fetch_assoc()): ?>
        
        <p>
            id:      <?php echo $row["id"]; ?>
            kysymys: <?php echo $row["optio_value"]; ?>
        
        <a href="del.php?id=<?php echo $_GET['id']; ?>" class="btn-success">Poista vaihtoehto</a>

        </p>
    <?php endwhile; ?>

<?php else: ?>
    
    <p>ei ole kysymyksiä</p>

<?php endif; 

$conn->close();
?>
<br>
<br>
<a href="del.php?id=<?php echo $_GET['id']; ?>" class="btn btn-danger">Poista äänestys</a>






<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
