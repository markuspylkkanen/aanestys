<?php 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "db.php";
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $stmt = $conn->prepare("SELECT id, pwd FROM users where email = ?;");
    $stmt->bind_param("s", $email);

    if ($stmt->execute() === TRUE) {
    
        $stmt->bind_result($id, $hash);
        $stmt->fetch();

        if (password_verify($pwd, $hash)) {
            $_SESSION["user"] = $email;
            header('Location: index.php');
        } else {
            echo 'Invalid password.';
        } 


    } else {
        echo "Haku ei onnistu";
    }
    
    
    

} 

?>
<h3> Rekisteröinti onnistui, voit nyt kirjautua sisään</h3> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br>

<form class="form-inline" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label for="email">Sähköposti:</label>
    <input type="email" class="form-control" id="email" name="email">

    <label for="pwd">Salasana:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">

    <button type="submit" name="submit" class="btn btn-primary">Kirjaudu</button>
</form>

