<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dfeea3707c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
        <h1 class="text-center p-3">REGISTRO</h1>
        <div class="container-fluid row">
        <form  class="col-4 p-3" method="post">
            <h3 class="text-center text-secundary">REGISTRO DE PERSONAS</h3>
          <!--Sirve para llamar a la conexion y al controlador
          ../../ -> retrocede directorios
          -->
    <?php 
    include "../../modelo/conexion.php";
    include "../../controlador/controlador_personas/registro_persona.php";
    ?>
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CEDULA</label>
                <input type="text" class="form-control" name="cedula">
            </div>
            


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">APELLIDO</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DIRECCION</label>
                <input type="text" class="form-control" name="direccion">
            </div>
            

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">FECHA DE NACIMIENTO</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CORREO</label>
                <input type="email" class="form-control" name="correo">
            </div>
            
            
            <button type="submit" class="btn btn-primary"name="btnregistrar" value="ok">REGISTRAR</button>
            </form>
            <div class="col-8 p-4">

            <table class="table">
  <thead>
    <tr>
      <th scope="col">CEDULA</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">FECHA NACIMIENTO</th>
      <th scope="col">CORREO</th>
      <th scope="col"></th>


    </tr>
  </thead>
  <tbody>
    <?php
    include"../../modelo/conexion.php";
    $sql=$conexion->query("select *from personas");
    while($datos=$sql->fetch_object()){?>
        <tr>
      <td><?= $datos->id ?></td>
      <td><?= $datos->nombre ?></td>
      <td><?= $datos->apellido ?></td>
      <td><?= $datos->direccion ?></td>
      <td><?= $datos->fecha ?></td>
      <td><?= $datos->correo ?></td>


      <td>
        <a href="modificar.php?id=<?= $datos->id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
      </td>
    </tr>
    <?php }

    ?>
    
    
    
  </tbody>
</table>

            </div>
        </div>
</body>
</html>