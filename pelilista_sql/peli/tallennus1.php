<?php
require('db.php');
$nimi = $_POST ['nimi'];
$pisteet = $_POST ['pisteet'];
$mysqldate = date ('Y-m-d H:i:s', $phpdate);
$phpdate = strtotime($mysqldate);
$sql = "INSERT INTO highscores (nimi, pisteet)
VALUES ('$nimi', '$pisteet')";

if (mysqli_query($con, $sql)) {
    header('Location: peli.html');
}


mysqli_close($con);
?>