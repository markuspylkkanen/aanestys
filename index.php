<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>index</title>
</head>
<body>
  
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['user']))
{
  header("location: login.php");
  die();
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>Luo äänestys</title>

<p>Kirjautuminen onnistui!</p>

<a href="vote.php" class="button">Luo äänestys</a>

<a href="editvote.php" class="button2">Muokkaa äänestyksiä</a>

<a href="del.php" class="button3">Poista äänestyksiä</a>

<a href="logout.php" class="button4">Kirjaudu ulos</a>

<style>
.button {
  background-color: blue; 
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
} 
.button2 {
  background-color: green; 
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
} 
.button3 {
  background-color: red; 
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
} 
.button4 {
background-color: black; 
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
    }   
</style>

<?php
include "db.php";

if (!isset($_GET['id'])) {
    include "db.php";   
    $sql = "SELECT * FROM vote";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
       while($row = $result->fetch_assoc()) {
           echo '<br> <a href="show.php?id='.$row["id"].   '"> id:   '. $row["id"]. " - kysymys: ". $row["aihe"]."</a>";       
          
           
       }
    } else {
        echo "ei ole kysymyksiä";
    }
}
    ?>
</body>
</html>