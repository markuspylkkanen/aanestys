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
$sql = "DELETE FROM $target WHERE id = ? ";