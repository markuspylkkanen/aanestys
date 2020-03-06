<?php
if (isset($_GET['target'])){
    $id = $_GET['id'];
    $target = $_GET['target'];
    echo "<p>poistetaan id $id kohteesta $target</p>";
}

if (isset($_POST['target'])){
    $id = $_POST['id'];
    $target = $_POST['target'];
    echo "<p>poistetaan id $id kohteesta $target</p>";
}

?>
<form method="post" action="getesim.php">
    <input type="hidden" name="id" value="100">
    <input type="hidden" name="target" value="vote">
    <input type="submit" value="poista kysymys">
</form>

<p><a href="getesim.php?id=100&target=vote">Poista</a></p>
