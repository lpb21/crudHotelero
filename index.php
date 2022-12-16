<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>Hoteles Decameron</title>
  <!-- <link rel="stylesheet" href="./css/normalize.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch&family=Kanit:wght@300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <div class="container">
    <h1>Hoteles Decameron</h1>
    <form id="formulario" name="formulario" autocomplete="off">
      <!-- <div class="form-group">
        <input type="text" class="form-control" id="numero1" placeholder="Primer numero">
      </div> -->
      <!-- <div class="form-group">
        <input type="text" class="form-control" id="numero2" placeholder="Segundo numero">
      </div> -->
      <div class="form-group">
        <select class="custom-select" id="opcion">
          <option selected>Selecciona Tu Hotel</option>
          <option value="Cartagena">Cartagena</option>
          <option value="Barranquilla">Barranquilla</option>
          <option value="Medellin">Medellin</option>
          <option value="Bucaramanga">Bucaramanga</option>
        </select>
      </div>
      <!-- <div class="form-group" id="resultado">
        <input type="number" class="form-control" id="resultado" placeholder="Resultado" readonly>
      </div> -->

      <!-- <div class="form-group">
        <button type="reset" class="btn btn-danger btn-block btn-lg">Limpiar</button>
      </div> -->
</br>
    <button type="button" id="enviar_dato" name="enviar_dato" class="btn btn-primary" style="cursor:pointer" method="post" action="insertar.php" onclick="enviar_form1();">Enviar Datos</button>
      <!-- <div class="form-group2" action="Enviar.php" method="post">
        <input id="enviar_dato" class="btn btn-primary btn-block btn-lg" type="button" value="Calcular" style="cursor:pointer" method="post" onclick="enviar_form1();">
        </div> -->
    </form>
  </div>
  </di>



<!-- /*
$numero1 =$_POST["numero1"];
$numero2 =$_POST["numero2"];
$opcion =$_POST["opcion"];
$fecha = date("Y-m-d H:i:s");
$resultado =$_POST["resultado"];

$ConsultaSQL= "SELECT FROM bdcalcRayco.OPERACIONES WHERE FECHA IS NOT NULL ORDER BY ID = '".$cedula."' ORDER BY PKEST_NCODIGO ASC limit 10;";

*/ -->

  <script src="./js/index.js"></script>
</body>

</html>