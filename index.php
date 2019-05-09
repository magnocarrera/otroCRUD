<!DOCTYPE hmtl>
<html lang="es">
<head>
<title>Pagina Principal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="librerias/bootstrap-3.4.1/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">

<script src="librerias/jquery-3.4.1.min.js"></script>
<script src="librerias/bootstrap-3.4.1/js/bootstrap.js"></script>
<script src="librerias/alertifyjs/alertify.js"></script>
</head>
<body>

    <div class="container">
        <div id="tabla"></div>
    </div>


<!-- Modal Nuevo Registro -->
<div class="modal fade" id="Nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Nuevo Registro</h4>
      </div>

      <div class="modal-body">
        <label>Nombres</label>
        <input type="text" name="" id="nombres" class="form-control input-sm">
        <label>Apellidos</label>
        <input type="text" name="" id="apellidos" class="form-control input-sm">
        <label>Edad</label>
        <input type="text" name="" id="edad" class="form-control input-sm">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
          Agregar
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Editar Registro -->
<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Editar Registro</h4>
      </div>

      <div class="modal-body">
        <label>ID</label>
        <input type="text" name="" id="ide" class="form-control input-sm">
        <label>Nombres</label>
        <input type="text" name="" id="nombrese" class="form-control input-sm">
        <label>Apellidos</label>
        <input type="text" name="" id="apellidose" class="form-control input-sm">
        <label>Edad</label>
        <input type="text" name="" id="edade" class="form-control input-sm">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>  

<script src="js/funciones.js"></script>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('componentes/tabla.php');
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){;
            nombres=$('#nombres').val();
            apellidos=$('#apellidos').val();
            edad=$('#edad').val();
            agregardatos(nombres,apellidos,edad);
        });

        $('#actualizadatos').click(function(){
              actualizaDatos();
        });
    });
</script>

