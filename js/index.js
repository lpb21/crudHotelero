function enviar_form1() {

    //var enviar = document.getElementById('enviar_dato');
    //var numero1 = document.getElementById('numero1').value
    //var numero2 = document.getElementById('numero2').value
    var opcion = document.getElementById('opcion').value
    //var resultado = document.getElementById('resultado').value;

    if (opcion == "") {
        //swal reemplaza el alert y hace el llamado a los objetos de la libreria SweetAlert
        swal('Oooops!', 'seleccione algo pendejo', 'error');
        opcion.focus();
        return false;
    } else if (opcion == "Selecciona Tu Hotel") {
        swal('Oooops!', 'Debes seleccionar una operacion', 'error');
        opcion.focus();
        return false;
    } else if (opcion !== "Cartagena") {
        swal('Oooops!', 'Selecciona Crtagena por el momento, por favor', 'error');
        opcion.focus();
        return false;
    } else {
        opcion = document.formulario.opcion.value;

        $.ajax({
            url: 'Enviar.php',
            method: 'POST',

            data: {
                opcion: opcion,
            },
            success: function(response) {
                console.log(response);
                console.log("redirigido a Enviar.php");
                swal('success', 'Datos calculados correctamente', 'success');
                window.location = 'Enviar.php';
            },
            error: function() {
                swal('Error', 'Error en el procesamiento de datos', 'error');
            }
        });
    }
}

function formulario2() {

    //var enviar = document.getElementById('enviar_dato');
    var tipo_acomodacion = document.getElementById('tipo_acomodacion').value
    var tipo_habitacion = document.getElementById('tipo_habitacion').value
    var ocupacion = document.getElementById('ocupacion').value
    var hotel = document.getElementById('hotel').value;

    if (tipo_habitacion == "Tipo de Habitacion") {
        //swal reemplaza el alert y hace el llamado a los objetos de la libreria SweetAlert
        swal('error', 'Esta vacio', 'error');
        opcion.focus();
        return false;
    } else if (tipo_habitacion == "") {
        swal('Oooops!', 'Esta vacio', 'error');
        opcion.focus();
        return false;
    } else {
        tipo_habitacion = document.formulario2.opcion.value;

        $.ajax({
            url: 'insertar.php',
            method: 'POST',

            data: {
                tipo_habitacion: tipo_habitacion,
            },
            success: function(response) {
                console.log(response);
                //console.log("redirigido a Enviar.php");
                swal('success', 'Datos calculados correctamente', 'success');
                window.location.reload();
            },
            error: function() {
                swal('Error', 'Error en el procesamiento de datos', 'error');
            }
        });
    }
}