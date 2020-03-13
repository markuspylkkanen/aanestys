<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>votet</title>
    <link rel="stylesheet" type="text/css" href="on.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merienda&display=swap" rel="stylesheet">
</head>
<body>
<h2>Poista äänestyksiä tai vaihtoehtoja</h2>
<br>

<?php
include "db.php";

if (!isset($_GET['id'])) {
    
    $sql = "SELECT * FROM vote";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
       while($row = $result->fetch_assoc()) {
           echo "<br> id: ". $row["id"]. " - kysymys: ". $row["aihe"];         
          
           
       }
    } else {
        echo "ei ole kysymyksiä";
    }




} else {

    $id = intval($_GET['id']);



    $sql = "SELECT * FROM vote WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
            echo "<br> id: ". $row["id"]. " - kysymys: ". $row["aihe"];         
        
            
        }
    } else {
        echo "ei ole kysymyksiä";
    }


    $last_id = intval($_GET['id']);

    $sql = "SELECT * FROM optio WHERE vote_id = $last_id";
    $result = $conn->query($sql);

    ?>
    <?php if ($result->num_rows > 0): ?>
        
        <?php while($row = $result->fetch_assoc()): ?>
            
            <p>
                id:      <?php echo $row["id"]; ?>
                vaihtoehdot: <?php echo $row["optio_value"]; ?>
            
            <a href="del.php?target=optio&id=<?php echo $row['id']; ?>" class="btn btn-info">Poista vaihtoehto</a>

            </p>
        <?php endwhile; ?>

    <?php else: ?>
        
        <p>ei ole vaihtoehtoja</p>

    <?php endif; 

   
    ?>
    <br>
    <br>
    <a href="del.php?target=vote&id=<?php echo $_GET['id']; ?>" class="btn btn-danger">Poista äänestys</a>

<?php
}
$conn->close();
?>

</body>
</html>



    
