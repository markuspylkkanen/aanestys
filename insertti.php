<?php

include "db.php";

// Tarkista tuletko lomakkeelta

// Tarkista onko tiedot oikein

// salasanan hash password_hash() -funktiolla
if (filter_has_var(INPUT_POST, 'submit')){

    // email tsekkaus

    // salasanan tsekkaus

    $email = $_POST['email'];
    $pwd = $_POST['pwd']; 

    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT); 


    // Prepared statement

$stmt = $conn->prepare("INSERT INTO users (email, pwd) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $hashed_pwd);

    if ($stmt->excecute() === TRUE) 
    {
        header('Location: location.php');
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();

}