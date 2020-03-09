<?php
// Poistaa sekä vaihtoehdon, että äänestyksen id:n perusteella

// Tarkista onko GET-parametri annettu:
if (!isset($_GET['id'])) {
    die('dead');
}

// ID
$id = intval($_GET['id']);


// kohde taulu: vote tai optio?
$target = $_GET['target'];


// yhdistetään tietokantaan
include "db.php";

// Luodaan ja suoritetaan sql-lause annettujen parametrien mukaan
$stmt = $conn->prepare("DELETE FROM $target WHERE id = ?");
$stmt->bind_param("i", $id);

    if ($stmt->execute() === TRUE) 
    {
        header('Location: show.php');
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();




// echo $sql;