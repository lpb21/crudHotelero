function enviar_form2() {

    //var enviar = document.getElementById('enviar_dato');
    var tipo_acomodacion = document.getElementById('tipo_acomodacion').value
    var tipo_habitacion = document.getElementById('tipo_habitacion').value
    var ocupacion = document.getElementById('ocupacion').value
    var hotel = document.getElementById('hotel').value;

    if (tipo_habitacion == "Tipo de Habitacion") {
        //swal reemplaza el alert y hace el llamado a los objetos de la libreria SweetAlert
        swal('Oooops!', 'Selecciona el tipo de Habitacion', 'error');
        tipo_habitacion.focus();
        return false;
    } else if (tipo_habitacion == "ESTANDAR" && tipo_acomodacion== "TRIPLE") {
        swal('Oooops!', 'El tipo de acomodacion para Estandar solo puede ser Sencilla o Doble', 'error');
        //opcion.focus();
        return false;
    } else if (tipo_habitacion == "ESTANDAR" && tipo_acomodacion== "CUADRUPLE") {
        swal('Oooops!', 'El tipo de acomodacion para Estandar solo puede ser Sencilla o Doble', 'error');
        //opcion.focus();
        return false;
    } else if (tipo_habitacion == "JUNIOR" && tipo_acomodacion == "SENCILLA") {
        swal('Oooops!', 'El tipo de acomodacion para Junior solo puede ser Triple o Cuadruple', 'error');
        //opcion.focus();
        return false;
    } else if (tipo_habitacion == "JUNIOR" && tipo_acomodacion == "DOBLE") {
        swal('Oooops!', 'El tipo de acomodacion para Junior solo puede ser Triple o Cuadruple', 'error');
        //opcion.focus();
        return false;
    } else if (tipo_habitacion == "SUITE" && tipo_acomodacion == "CUADRUPLE") {
        swal('Oooops!', 'El tipo de acomodacion para Suite solo puede ser Sencilla, Doble o Triple', 'error');
        //opcion.focus();
        return false;
    } else if (tipo_acomodacion == "Tipo de Acomodacion") {
        swal('Oooops!', 'Selecciona el Tipo de Acomodacion', 'error');
        tipo_acomodacion.focus();
        return false;  
    } else {
        tipo_habitacion = document.formulario2.tipo_habitacion.value;
        tipo_acomodacion = document.formulario2.tipo_acomodacion.value;
        //console.log(hotel);

        $.ajax({
            url: 'insertar.php',
            method: 'POST',

            data: {
                tipo_habitacion: tipo_habitacion,
                tipo_acomodacion: tipo_acomodacion,
                ocupacion: ocupacion,
                hotel: hotel
                
            },

            
             success: function(response) {
                console.log(response);
                console.log("envio de datos");
                $('#resultado').html(response);
                //console.log("redirigido a Enviar.php");
                //swal('success', 'Datos calculados correctamente', 'success');
                document.formulario2.reset();
                window.location= 'insertar.php';
                setTimeout
                //window.location= 'Enviar.php';
            },
            error: function() {
                swal('Error', 'Error en el procesamiento de datos', 'error');
            }
        });
    }
}
