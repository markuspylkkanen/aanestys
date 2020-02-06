<?php



?>

<title> Luo äänestys </title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h4> Voit tällä sivulla luoda äänestyksen! </h4>
<br>

<textarea placeholder="Äänestyksen aihe:" 
rows="3" cols="50" name="" form="">
</textarea>

<br>
<br>


<input type="text" name="kkona" placeholder="Vaihtoehto 1:">
<input type="text" name="kkona" placeholder="Vaihtoehto 2:">
<br>
</br>

<button class="btn" onclick="addChoice()"> Lisää vaihtoehtoja </button>

<a href=".php" class="button5">Tallenna</a>

<script>
function addChoice(){





}
</script>

<style>
.button {
  background-color: #0080ff; 
  border: none;
  color: white;
  padding: 11px 11px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
} 
</style>




