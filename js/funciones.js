
function agregardatos(nombres,apellidos,edad){
    cadena="nombres=" + nombres + "$apellidos=" + apellidos + "$edad=" + edad;
        
    $.ajax({
        type:"POST",
        url:"../php/agregarDatos.php",
        data:cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('../componentes/tabla.php');
                alertify.success("Registro nuevo exitoso");
            }else{
                alertify.error("Imposible hacer conexion con la base de datos");
            }
        }
    });

}

function agregaform(datos){

    d=datos.split('||');

    $('#ide').val(d[0]);
    $('#nombrese').val(d[1]);
    $('#apellidose').val(d[2]);
    $('#edade').val(d[3]);
    
}

function actualizaDatos(){
    id=$('#ide').val();
    nombres=$('#nombrese').val();
    apellidos=$('#apellidose').val();
    edad=$('#edade').val();

    cadena= "id=" + id +
            "$nombres=" + nombres + 
            "$apellidos=" + apellidos + 
            "$edad=" + edad;

            $.ajax({
                type:"POST",
                url:"../php/actualizaDatos.php",
                data:cadena,
                success:function(r){
                    if(r==1){
                        $('#tabla').load('componentes/tabla.php');
                        alertify.success("Actualizado con exito");
                    }else{
                        alertify.error("Imposible hacer conexion con la base de datos");
                    }
                }
            });
}