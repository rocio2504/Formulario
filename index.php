<?php
echo " Formulario"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=   , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
     <!-- link: https://getbootstrap.com/docs/5.0/getting-started/introduction/   -->
    <script src="main.js"></script>
</head>
<body>
   <br>
<div class="container" style="max-width: 650px; min-width: 400px;">
  <div class="card">
    <h2 class="card-header text-center">formulario de Registro</h2>
    <div class="card-body">
     // <form id="myForm" onsubmit="return validar()" >
      <form method="post" action="guardar.php" id="myform"  enctype="multipart/form-data" onsubmit="return validar()" >
        <div class="form-group">
          <legend>Datos de la Cuenta</legend>
          <label for="user">Usuario:</label>
          <input type="text" class="form-control" id="user" placeholder="Usuario">
          <label for="email">Correo Electronico:</label>
          <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com">
          <label for="Pass1">Contraseña:</label>
          <input type="password" class="form-control" id="pass1" placeholder="Contraseña">
          <label for="pass2">Rep. Contraseña:</label>
          <input type="password" class="form-control" id="pass2" placeholder="Repetir Contraseña">
          <label for="codipos">Código Postal:</label>
          <input type="text" class="form-control" id="codipos" placeholder="Codigo Postal">
        </div>

        <div class="form-group">
          <legend>Datos Personales</legend>
          <label for="sexo">Sexo:</label>
          <input type="radio" id="sexo" name="sexo"> Masculino
          <input type="radio" id="sexo" name="sexo"> Femenino <br>
          <label for="ciudad">Ciudad:</label>      
            <select class="form-control" id="ciudad">
              <option value="Lota">Seleccionar</option>
              <option value="Lota">Lota</option>
              <option value="Coronel">Coronel</option>
              <option value="concepción">Concepción</option>
            </select>  
            <input type="file" name="archivo_transferir" id="archivo_transferir" accept="application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, image/jpeg, image/png, image/bmp" class="input-file" size="5120" />
                            <br><label id="lbl_archivo" name="lbl_archivo" style="color: red; font-weight: bold; display: none;width: 250px;"></label>
                            <p style="font-size: 11px; color: #FA5858;margin-top: 10px">Seleccione un archivo con formato (pdf,doc,docx,xls,xlsx,jpg,png,bmp) menor a 5MB</p>
            
          <label for="terminos">Legalidades:</label><br>
          <input type="checkbox" id="terminos"> Acepto los términos y condiciones          
        </div>
        <input type="submit" class="btn btn-success" id="boton" value="Registrar">
        <input type="reset" class="btn btn-danger" id="boton" value="Reiniciar">
      </form>
    </div>
  </div>
</div>
</body>
</html>
