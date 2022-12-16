<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM habitaciones order by id desc";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registrar Info</title>
        <!-- <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--    Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>


        <!-- <style>
        table.dataTable thead {
            background: linear-gradient(to right, #0575E6, #00F260);
            color:white;
        }
    </style>  -->



        <link rel="stylesheet" href="./css/style.css">
        <!-- <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css"> -->
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
    </head>
    <body>
            <div class="container mt-5">
                
                <!-- <div class="container"> -->
                
                    <div class="row"> 
                    <h1>Hoteles Decameron Cartagena</h1>
                        <div class="col-lg-12">
                        <!-- <div class="col-md-3"> -->
                            <h2>Asignar Habitacion</h2>
                                <form id="formulario2" name="formulario2" method="POST" autocomplete="off">

                                    <!-- <input type="text" class="form-control mb-3" id="cod_registro" name="cod_registro" placeholder="Codigo Registro" autocomplete="off"> -->
                                    <input type="hidden" id="ocupacion" name="ocupacion" value="NO">
                                    <input type="hidden" id="hotel" name="hotel" value="CARTAGENA">
                                    <!-- <input type="text" class="form-control mb-3" id="nombre_cliente" name="nombre_cliente" class="req" placeholder="Nombre Cliente" autocomplete="off"> -->
                                    <select name="select" class="form-control mb-3" id="tipo_habitacion" name="tipo_habitacion">
                                        <option selected>Tipo de Habitacion</option>
                                        <option value="ESTANDAR">Estandar</option>
                                        <option value="JUNIOR">Junior</option>
                                        <option value="SUITE">Suite</option>
                                    </select>
                                    <select name="select" class="form-control mb-3" id="tipo_acomodacion" name="tipo_acomodacion">
                                        <option selected>Tipo de Acomodacion</option>
                                        <option value="SENCILLA">Sencilla</option>
                                        <option value="DOBLE">Doble</option>
                                        <option value="TRIPLE">Triple</option>
                                        <option value="CUADRUPLE">Cuadruple</option>
                                    </select>
                                    <!-- <input type="text" id="direccion" name="direccion" class="form-control mb-3" placeholder="direccion" autocomplete="off">
                                    <input type="text" id="telefono" name="telefono" class="form-control mb-3" placeholder="telefono" autocomplete="off"> -->
                                    <!-- <input type="text" class="form-control mb-3" name="dni" placeholder="Dni"> -->
                                    <!-- <input type="text" id="correo" name="correo" class="form-control mb-3" placeholder="Correo" autocomplete="off"> -->
                                    <!-- <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres"> -->
                                    <!-- <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos"> -->
                                    
                                    <!-- <input type="submit" class="btn btn-primary"> -->
                                    <!-- <button type="button" id="enviar_dato" name="enviar_dato" class="btn btn-primary" style="cursor:pointer" method="post" action="insertar.php" onclick="enviar_form2();">Enviar Datos</button> -->

                                    <button type="button" id="enviar_dato2" name="enviar_dato2" class="btn btn-primary" style="cursor:pointer" method="post" action="insertar.php" onclick="enviar_form2();">Enviar Data2</button>

                                    <!-- <div class="form-group2" action="Enviar.php" method="post">
                                    <input id="enviar_dato" class="btn btn-primary btn-block btn-lg" type="button" value="Calcular" style="cursor:pointer" method="post" onclick="enviar_form1();">
                                    </div> -->

                                    <a href="./index.php">
                                        <button type="button" id="inicio"  name="inicio" class="btn btn-primary" style="cursor:pointer">Inicio</button>
                                    </a>
                                    </form>
                        </div>

                        <div class="col-lg-12">
                        <!-- <div class="col-md-8"> OLD-->
                           <!-- <table class="table"> OLD-->
                           <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                                <!-- <table class="table" class="table-success table-striped">  -->
                                <!-- <thead  > OLD-->
                                <thead class="text-center">
                                    <tr>
                                        <th >Habitacion Nro</th>
                                        <th >Hotel</th>
                                        <th >Tipo Hab</th>
                                        <th >Acomodacion</th>
                                        <th >Ocupada</th>
                                        <th >Fecha Ult Proceso</th>
                                        <th >Boton1</th>
                                        <th >Boton2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['hotelposeedor']?></th>
                                                <th><?php  echo $row['tipoHabitacion']?></th>
                                                <th><?php  echo $row['tipoAcomodacion']?></th>
                                                <th><?php  echo $row['ocupada']?></th>
                                                <th><?php  echo $row['fechaUltimoProceso']?></th>
                                                
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                                

                            </table>
                        </div>
                    </div>
                </div> 
                     
            </div>
            <script src="./js/index2.js"></script>

            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <!-- <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script> -->
      
    <script>
      $(document).ready(function(){
         $('#tablaUsuarios').DataTable(); 
      });
    </script>
            
    </body>
</html>