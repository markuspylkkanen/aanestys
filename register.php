<html>
<head>
	<title>Rekisteröinti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<p> Rekisteröidy! <p>

<?php if (isset($_GET['msg'])):?>
  <p class="alert alert-danger"><?php echo $_GET['msg']; ?></p>
<?php endif; ?>

<br>
<form class="form-inline" action="insertti.php" method="post">
  <label for="email">Sähköposti:</label>
  <input type="email" class="form-control" id="email" name="email">
  
  <label for="pwd">Salasana:</label>
  <input type="password" class="form-control" id="pwd" name="pwd">
  
  <div class="form-check"></div>

  <button type="submit" name="submit" class="btn btn-primary">Luo tili</button>

</form>
</body>
</html>