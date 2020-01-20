<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>Luo äänestys</title>
<p>Kirjautuminen onnistui! Voit nyt luoda äänestyksiä!</p>

<script>
var xhttp = new XMLHttpRequest();
</script>



<div id="poll">
    <h3>wadadadadadadadadad</h3>
    <form>
      Kyllä!
      <input type="radio" name="res" value="0" onclick="get_votes(this.value)">
      <br>Ei
      <input type="radio" name="res" value="1" onclick="get_votes(this.value)">
    </form>
  </div>