<?php

  require_once "../conexion.php";
  $conexion = conexion();

    $name = $_POST['nombres'];
    $lastname = $_POST['apellidos'];
    $age = $_POST['edad'];

    $sql="INSERT INTO user (nombres,apellidos,edad) VALUES ('$name','$lastname','$age')";

    echo $resultado=mysqli_query($conexion,$sql);
?>

