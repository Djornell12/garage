<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>garage create klant2</title>
</head>
<body>
<h1>garage create klant 2</h1>
<p>
    een klant toevoegen aan de tabel
    klant in de database garage.
</p>
<?php

$klantid = Null;
$klantnaam     = $_POST["klantnaamvak"];
$klantadres    = $_POST["klantadresvak"];
$klantpostcode = $_POST["klantpostcodevak"];
$klantplaats   = $_POST['klantplaatsvak'];

require_once 'gar-connect.php';

$sql = $conn->prepare("INSERT INTO klant VALUES (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");

$sql->execute(["klantid"  =>$klantid, "klantnaam"  =>$klantnaam, "klantadres"   =>$klantadres, "klantpostcode"  =>$klantpostcode, "klantplaats"  =>$klantplaats]);
echo "de klant is toegevoegd <br />";
echo "<a href='gar-menu.php'> terug neer het menu</a>";



    ?>
</body>
</html>