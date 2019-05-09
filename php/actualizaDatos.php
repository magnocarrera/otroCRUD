<?php

  include "../conexion.php";
  $conexion = conexion();

?>
<?php
    $id = $_POST['ide'];
    $name = $_POST['nombrese'];
    $lastname = $_POST['apellidose'];
    $age = $_POST['edade'];

    $sql="UPDATE user set nombres=$name,
                          apellidos=$lastname,
                          edad=$age
                where id='$id'";

    echo $resultado=mysqli_query($conexion,$sql);
?>