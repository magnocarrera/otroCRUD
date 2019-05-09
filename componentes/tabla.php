<?php

  include "../conexion.php";
  $conexion = conexion();

?>

<div class="row">
  <div class="col-sm-12">
    <h2>Tabla Dinamica CRUD</h2>
        <table class="table table-hover table-condensed table-bordered">
          <caption>
            <button class="btn btn-primary" data-toggle="modal" data-target="#Nuevo">REGISTRO NUEVO
                <span class="glyphicon glyphicon-plus"></span>
            </button>
          </caption>
              <tr>
                <td>#</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Edad</td>
                <td>Editar</td>
                <td>Borrar</td>
              </tr>
              <?php

                $sql="SELECT id,nombres,apellidos,edad from user";
                $resultado=mysqli_query($conexion,$sql);
                while($ver=mysqli_fetch_row($resultado)){

                    $datos=$ver[0]."||".
                           $ver[1]."||".
                           $ver[2]."||".
                           $ver[3];
              ?>
              <tr>
                <td><?php echo $ver[0] ?></td>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[3] ?></td>
                <td>
                    <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" 
                    data-target="#Editar" onclick="agregaform('<?php echo $datos ?>')"></button>
                </td>
                <td>
                    <button class="btn btn-danger glyphicon glyphicon-remove"></button>
                </td>
              </tr>
              <?php
            }
              ?>
       </table>
  </div>
</div>