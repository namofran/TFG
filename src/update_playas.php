<?php 
//Primero, obtenemos la opción seleccinada que ha sido enviada mediante la llamada AJAX

$selectedOption = $_POST['option'];

//Luego, hacemos un update de la base de datos utilizando ese valor
$sql = "UPDATE playas SET value = value + 1 WHERE name = '$selectedOption'";
mysqli_query($conn,$sql);
?>