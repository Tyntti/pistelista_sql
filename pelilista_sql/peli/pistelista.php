<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pistelista</title>

    <style>
    table, th, td {
      border: 1px, solid black;
      border-collapse: collapse;
    }
      th, td {
        padding: 5px;
      }
    </style>
  </head>
  <body onload="loadXMLDoc()">

<!-- <h1>Parhaimmat pelaajat</h1>
<table id="näytäLista"></table>

<!-- <script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "lista.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Pisteet</th><th>Nimi</th></tr>";
  var x = xmlDoc.getElementsByTagName("LISTA");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("PISTEET")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("NIMI")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("näytäLista").innerHTML = table;
}
</script> --> 

<?php 
require('db.php');

$sql = "SELECT nimi, pisteet FROM highscores";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<ul>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<li>" .$row["nimi"]. " " .$row["pisteet"]. "</li>";
  }
  echo "</ul>";
}
?>


  </body>
</html>
