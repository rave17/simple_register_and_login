<?php
require "conect.php";

$name       = $_POST['name'];
$lastname   = $_POST['lastname'];
$email      = $_POST['email'];
$username   = $_POST['username'];
$pass       = password_hash($_POST['pass'], PASSWORD_BCRYPT);


$insertar = "INSERT INTO datos (nombre, apellido, mail, username, password) VALUES ('$name', '$lastname', '$email', '$username', '$pass')";

$query = mysqli_query($conectar, $insertar);

if($query){
    echo require("../welcome.php");
} else {
    echo "Error!";
}

?>