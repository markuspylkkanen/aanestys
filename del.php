<?php
// Poistaa sekä vaihtoehdon, että äänestyksen id:n perusteella

// Tarkista onko GET-parametri annettu:
if (!isset($_GET['id'])) {
    die('dead');
}

// ID
$id = intval($_GET['id']);


// kohde taulu: vote tai option?
$table = $_GET['vote'];

// yhdistetään tietokantaan
include "db.php";

// Luodaan ja suoritetaan sql-lause annettujen parametrien mukaan
"DELETE FROM $table WHERE id = ? ";