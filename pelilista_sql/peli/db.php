<?php 
$con = mysqli_connect("localhost", "root", "", "pistelista");

if (mysqli_connect_errno()) {
    echo "Yhdistäminen epäonnistui". mysqli_connect_error();
    }
?>