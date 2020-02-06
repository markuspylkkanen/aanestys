<?php
include "db.php";


?>

<title> Luo äänestys </title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h4> Voit tällä sivulla luoda äänestyksen! </h4>
<br>
    <div class="form-group">
        <label for="kysymys">Äänestyksen aihe:</label>
        <input type="text" name="kysymys">
        
<button class="btn-primary" onclick="addChoice()">Lisää vaihtoehtoja</button>
</div>
<br>
    
<div class="form-group">
        <input type="text" name="vaihtoehto" placeholder="Vaihtoehto 1">
        
        <a href="" class="button">Tallenna</a>
      </div>

    <div id="choices">

    </div>

  
    

<script>
function addChoice(){
let i =  document.getElementById('choices').childElementCount + 2;

let newDiv = document.createElement('div');
        let divClass = document.createAttribute('class');
        divClass.value = 'form-group';
        newDiv.setAttributeNode(divClass);

        
        let newInput = document.createElement('input');
        let type = document.createAttribute('type');
        let name = document.createAttribute('name');
        let placeholder = document.createAttribute('placeholder');
        type.value = 'text';
        name.value = 'vaihtoehto' + i;
        placeholder.value = 'Vaihtoehto ' + i
        newInput.setAttributeNode(type);
        newInput.setAttributeNode(name);
        newInput.setAttributeNode(placeholder);

        newDiv.appendChild(newInput);

        document.getElementById('choices').appendChild(newDiv);


}
</script>








