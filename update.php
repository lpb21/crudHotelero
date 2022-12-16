<?php
error_reporting(0);
include("conexion.php");
$con=conectar();


$id=$_POST['id'];
$tipoHabitacion=$_POST['tipoHabitacion'];
$tipoAcomodacion=$_POST['tipoAcomodacion'];
$ocupada=$_POST['ocupada'];


$sql="UPDATE hotelesdecameron.habitaciones SET tipoHabitacion='$tipoHabitacion',tipoAcomodacion='$tipoAcomodacion',ocupada='$ocupada' WHERE id='$id';";
//echo $sql;
$query=mysqli_query($con,$sql);

     if($query){
        Header("Location: Enviar.php");
     }
?>