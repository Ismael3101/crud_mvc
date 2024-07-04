<?php
$id=$_GET["id"];
include"../../modelo/conexion.php";
$sql=$conexion->query("select *from personas where ID=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center p-3">HOLA MUNDO</h1>
        <div class="container-fluid row">
        <form  class="col-4 p-3 m-auto" method="post" >
            <h3 class="text-center text-secundary">MODIFICAR DE PERSONAS</h3>
            <input type="hidden"name="id" value="<?=$_GET["id"] ?>">
            <?php 
            include "../../controlador/controlador_personas/modificar.php";
            while($datos=$sql->fetch_object()){ ?>
              

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                <input type="text" class="form-control" name="nombre" value="<?=$datos->nombre ?>">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">APELLIDO</label>
                <input type="text" class="form-control" name="apellido" value="<?=$datos->apellido ?>">
            </div>
            

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DIRECCION</label>
                <input type="text" class="form-control" name="direccion" value="<?=$datos->direccion ?>" >
            </div>
            

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">FECHA DE NACIMIENTO</label>
                <input type="date" class="form-control" name="fecha" value="<?=$datos->fecha ?>" >
            </div>
            

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CORREO</label>
                <input type="email" class="form-control" name="correo" value="<?=$datos->correo ?>" > 
            </div>  


                  <?php  }
            ?>
    
       
            
            
            <button type="submit" class="btn btn-primary"name="btnregistrar" value="ok">MODIFICAR</button>
            </form>
</body>
</html>
    
    
    