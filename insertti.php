<?php

include "db.php";

// Tarkista tuletko lomakkeelta

// Tarkista onko tiedot oikein


if (filter_has_var(INPUT_POST, 'submit')){

    

    
    
    $email = $_POST['email'];
    $pwd = $_POST['pwd']; 
    
    if (strlen($pwd) < 8) {
        $msg = 'Salasanan pitää olla vähintään 8 merkkiä pitkä';
        header('Location: register.php?msg='.$msg);
        die();
    }

    $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT); 

    $stmt = $conn->prepare("INSERT INTO users (email, pwd) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashed_pwd);

    if ($stmt->execute() === TRUE) 
    {
        header('Location: login.php');
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();

}