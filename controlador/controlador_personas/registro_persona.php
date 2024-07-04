<!--Aqui vamos a realizar los procesos de programacion (CRUD, Calculos, etc)-->
<?php
    if(!empty($_POST['btnregistrar'])){

        if(!empty($_POST["cedula"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"] and !empty($_POST["direccion"])) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){

         $cedula=$_POST['cedula'];
         $nombre=$_POST['nombre'];
         $apellido=$_POST['apellido'];
         $direccion=$_POST['direccion'];
         $fecha=$_POST['fecha'];
         $correo=$_POST['correo'];

         $sql=$conexion->query("INSERT INTO  personas (id,nombre,apellido,direccion,fecha,correo)
         VALUES ('$cedula', '$nombre','$apellido','$direccion','$fecha','$correo')");

        if($sql=1){
            echo'<div class="alert alert-success">Persona registrada</div>';
        }else {
            echo'<div class="alert alert-sucess">Persona no registrada</div>';
        }


        }

    }

?>