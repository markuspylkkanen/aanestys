<?php

include "db.php";

if (filter_has_var(INPUT_POST, 'submit')){

        
 // Lisää äänestys vote-tauluun

// Ota id talteen

// Lisää vaihtoehdot opito-tauluun (silmukassa)

        $stmt = $conn->prepare("INSERT INTO vote (aihe) VALUES (?)");
        $stmt->bind_param("s");

         if ($stmt->execute() === TRUE) {
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Luo äänestys </title> 
</head>
<body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h4> Voit tällä sivulla luoda äänestyksen! </h4>

<form action="vote.php" method="post">

        <div class="form-group">
                <label for="kysymys">Äänestyksen aihe:</label>
                <input type="text" name="kysymys">
        </div>
        
        
    
        <div class="form-group">
                <input type="text" name="vaihtoehto" placeholder="Vaihtoehto 1">
        
                <a href="#" onclick="addChoice()">Lisää vaihtoehtoja</a>
                
        </div>

        <div id="choices">

        </div>
        
        <button class="btn btn-primary" class="button">Tallenna</button>
        

</form>
  
    

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

</body>
</html>






