<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
  require_once("nav.php");
?>

<div class='container'>
  <h2>Ingresar usuario:</h2>
  <form action=<?php echo FRONT_ROOT . "home/Register" ?> method="post">
    <div class="row">
      <div class="col-lg-4">
        <div class="form-group">
          <label for = "">Nombre</label>
          <input type="text" name ="firstName" value="" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for = "">Apellido</label>
          <input type="text" name ="lastName" value="" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for = "">DNI</label>
          <input type="text" name ="dni" value="" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for = "">Fecha de nacimiento</label>
          <input type="date" name ="birthDate" value="" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for = "">Sexo</label> <br>
          <input type="radio" name="gender" value="M" id="masculino" class="col-lg-2">
          <label for="masculino">Masculino</label>
          
          <input type="radio" name="gender" value="F" id="femenino" class="col-lg-2">
          <label for="femenino">Femenino</label>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for = "">Telefono</label>
          <input type="text" name ="phone" value="" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for = "">Email</label>
          <input type="text" name ="email" value="" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for = "">Nombre de usuario</label>
          <input type="text" name ="username" value="" class="form-control">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for = "">Password</label>
          <input type="password" name ="password" value="" class="form-control">
        </div>
      </div>
      <br>
      <div>
        <button type="submit">Registrarme</button>
      </div>

      
    </div>
    <!---<table>
      <tr>
        <td>Nombre</td>
        <td><input type="text" name="Nombre" placeholder="Nombre" value="" required></td>
        <td>Nombre</td>
        <td><input type="text" name="nombre" placeholder="Nombre" value=""></td>
        <td>Precio</td>
        <td><input type="text" name="precio" placeholder="Precio" value=""></td>
      </tr>
      <tr>
        <td colspan="3"> <button type="submit">Registro</button> </td>
        
      </tr>
    </table>--->



  </form>
</div>

</body>
</html>