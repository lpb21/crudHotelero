<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];
//echo $id;

$sql1="SELECT * FROM habitaciones WHERE id ='$id'";
$query=mysqli_query($con,$sql1);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        <title>Actualizar</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                <input type="text" class="form-control mb-3" name="tipoHabitacion" placeholder="tipoHabitacion" value="<?php echo $row['tipoHabitacion']  ?>">
                                <input type="text" class="form-control mb-3" name="tipoAcomodacion" placeholder="tipoAcomodacion" value="<?php echo $row['tipoAcomodacion']  ?>">
                                <input type="text" class="form-control mb-3" name="ocupada" placeholder="Ocupada SI o NO" value="<?php echo $row['ocupada']  ?>">

                                <!-- <select name="select" class="form-control mb-3" id="tipo_habitacion" placeholder="Ocupada SI o NO" name="tipo_habitacion">
                                        <option  selected>valor Original <?php echo $row['ocupada']  ?></option>
                                        <option value="ESTANDAR">NO</option>
                                        <option value="JUNIOR">SI</option>                                       
                                </select> -->
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>