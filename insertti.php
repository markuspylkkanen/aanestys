<?php

include "db.php";

// Tarkista tuletko lomakkeelta

// Tarkista onko tiedot oikein

// salasanan hash password_hash() -funktiolla
if (filter_has_var(INPUT_POST, 'submit')){
     
    $email = $_POST['email'];
    $pwd = $_POST['pwd']; 

    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT); 

    $sql = "INSERT INTO users (email, pwd) VALUES ('$email','$hashed_pwd')";

    if ($conn->query($sql) === TRUE) 
    {
        header('Location: location.php');
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}