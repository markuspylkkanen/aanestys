<?php

include "db.php";

$sql = "INSERT INTO users (id, email, pwd)
VALUES ('$email', '$pwd',)";

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