
<?php
include("conexion.php");
error_reporting(0);
$con2=conectar();

$hotel=$_POST['hotel'];
$ocupacion=$_POST['ocupacion'];
echo $ocupacion;
$tipo_habitacion=$_POST['tipo_habitacion'];
echo $tipo_habitacion;
$tipo_acomodacion=$_POST['tipo_acomodacion'];
$fecha = date("Y-m-d H:i:s");
$tabla = "habitaciones";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php

function consultas(){
    $ConsultaSQL4 = "SELECT * FROM habitaciones WHERE hotelposeedor = '';";

    //$Result4 = $con2->query($ConsultaSQL4);
    $Result4 = mysqli_query(conectar(),$ConsultaSQL4);
    $CantidadResultados4 = $Result4->num_rows;
    //echo $CantidadResultados4;
    if ($CantidadResultados4 > 0) {
        $ConsultaSQL5 = "DELETE FROM habitaciones WHERE hotelposeedor = ''";
        $query5 = mysqli_query(conectar(),$ConsultaSQL5);

        $ConsultaSQL6 = "alter table habitaciones AUTO_INCREMENT=0;";
        $Result6 = mysqli_query(conectar(),$ConsultaSQL6);
        //echo "se borro el registro";
    }
}
function swalerror(){
    echo "<script>
                swal({
                    title: 'ERROR!',
                    text: 'No se pueden realizar mas registros',
                    icon: 'error',
                    button: 'error!',                   
                    }).then(function() {
                    window.location = 'Enviar.php';
                    });
                    </script>";
}
function swalCheck(){
    echo "<script>
                swal({
                    title: 'HECHO!',
                    text: 'Registro Realizado!',
                    icon: 'success',
                    button: 'OK!',
                  }).then(function() {
                    window.location = 'Enviar.php';
                    });
                </script>";
}
function swalErrorFull(){
    echo "<script>
                swal({
                    title: 'ERROR!',
                    text: 'NO es posible adicionar mas registros, edita alguno ya ingresado',
                    icon: 'error',
                    button: 'error!',                   
                    }).then(function() {
                    window.location = 'Enviar.php';
                    });
                    </script>";
}

try{
    $ConsultaSQL = "SELECT * FROM habitaciones WHERE id is not null and hotelPoseedor = 'CARTAGENA' and tipoHabitacion = 'ESTANDAR' AND tipoAcomodacion = 'SENCILLA';";
    $ConsultaJunior = "SELECT * FROM habitaciones WHERE id is not null and hotelPoseedor = 'CARTAGENA' and tipoHabitacion = 'JUNIOR' AND tipoAcomodacion = 'TRIPLE';";
    $ConsultaEstdr = "SELECT * FROM habitaciones WHERE id is not null and hotelPoseedor = 'CARTAGENA' and tipoHabitacion = 'ESTANDAR' AND tipoAcomodacion = 'DOBLE';";
    $ConsultaGral = "SELECT * from habitaciones;";

    $Result1 = $con2->query($ConsultaSQL);
    $ResultJunior = $con2->query($ConsultaJunior);
    $ResultEstdr = $con2->query($ConsultaEstdr);
    $ResultGral = $con2->query($ConsultaGral);

    $CantidadResultadosSencilla = $Result1->num_rows;
    $CantidadResultadosJunior = $ResultJunior->num_rows;
    $CantidadResultadosEstdr = $ResultEstdr->num_rows;
    $CantidadResultadosGral = $ResultGral->num_rows;

     //echo $CantidadResultadosSencilla."\n";
     //echo $CantidadResultadosJunior."\n";
     //echo $CantidadResultadosEstdr."\n";
     //echo $CantidadResultadosGral."\n";
     //echo $tipo_habitacion."\n";
    if ($CantidadResultadosSencilla >= 0 && $CantidadResultadosSencilla <= 24){
        $ConsultaSQL3 = "INSERT INTO habitaciones (hotelposeedor, tipoHabitacion, tipoAcomodacion, fechaUltimoProceso, ocupada) VALUES('$hotel','$tipo_habitacion','$tipo_acomodacion','$fecha','$ocupacion');"; 
        mysqli_query(conectar(),$ConsultaSQL3);
        //echo "entro al insert 1ro";
        consultas();
        swalCheck();
    }else if($CantidadResultadosJunior >= 0 && $CantidadResultadosJunior <=11){
        $ConsultaSQL3 = "INSERT INTO habitaciones (hotelposeedor, tipoHabitacion, tipoAcomodacion, fechaUltimoProceso, ocupada) VALUES('$hotel','$tipo_habitacion','$tipo_acomodacion','$fecha','$ocupacion');"; 
        $query3= mysqli_query(conectar(),$ConsultaSQL3);
        //echo "entro al insert JUNIOR";
        consultas();
        swalCheck();
    }else if ($CantidadResultadosEstdr >= 0 && $CantidadResultadosEstdr <= 4) {           
        $ConsultaSQL3 = "INSERT INTO habitaciones (hotelposeedor, tipoHabitacion, tipoAcomodacion, fechaUltimoProceso, ocupada) VALUES('$hotel','$tipo_habitacion','$tipo_acomodacion','$fecha','$ocupacion');"; 
        $query3= mysqli_query(conectar(),$ConsultaSQL3);
        //echo "entro al insert DOBLE";
        consultas();
        swalCheck();
    } else if ($CantidadResultadosGral > 42) { 
        //echo "entro al ERROR GENERAL";          
        consultas();
        swalErrorFull();
              
    } else {
            swalErrorFull();            
            }                
                mysqli_close($con2);
             }catch (\Exception $e) {
                 echo 'Se presentó un inconveniente al procesar la información. Actualiza la pagina e intenta nuevamente';
             }
            
            // if($con2){
            //     Header("Location: Enviar.php");
                
            // }else {
            // }
?>
<!--  

if($query){
    Header("Location: index.php");
    
}else {
}
?>
*/