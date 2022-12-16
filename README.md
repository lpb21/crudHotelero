# crudHotelero

Este es un sistema basico que permite el ingreso de habitaciones de diferentes categorias a un hotel de una ubicacion especifica

## Comenzando 🚀

Las siguientes instrucciones te orientaran y explicaran el desarrollo paso a paso

### Pre-requisitos 📋

```
- Php 7 o superior
- Servidor de tipo web local como Xampp (en caso de que sea una maquina local)
- Navegadores como Chrome o Firefox
- Un editor de codigo
```

### Instalación 🔧

```
- En primer paso se procede a dar click en el boton de 'start' del rpograma xampp en la seccion que dice 'Apache' y 'MySQL'
- Se descarga el archivo .zip y se descomprime en la carpeta 'C:\xampp\htdocs\'
- Se procede a ejecutar las consultas del archivo Consultas.sql hasta la linea nro 13 las cuales crearan la base de datos que 
 usara el desarrollo
- Se teclea en la barra 'http://localhost/HotelesDECAMERON/index.php' y alli tendremos ya listo el desarrollo corriendo en nuestra 
    maquina local
```


## Probando el desarrollo ⚙️
```
* En la pagina de inicio tendremos la opcion de seleccionar varios Hoteles_
* En este caso solo tendremos permitido selecionar el Hotel de Cartagena ya que en el fue que se centro el desarrollo_
* Si se intenta seleccionar otra ubicacion diferente, se arrojara una alerta de error ya que el sistema cuenta con las 
    validaciones para ello

* En la siguiente ventana tendremos la opcion de ingresar las habitaciones con 2 botones de tipo select para asi evitar el error 
    humano y escribir registros erroneos
* Tambien se cuenta con 2 botones los cuales 1 envia la informacion y la guarda y el otro nos redirecciona a la pantalla de 
    inicio y seleccionar otra ubicacion de hotel en caso de que hubieran mas hoteles activados

* Una vez ingresado el 1er registro se nos mostrara en forma de tabla, la cual cuenta con:_ 
    -Un boton de buscar en caso en caso de querer filtrar algun registro en especial
    -Un selector en caso de querer mostrar mas de 10 registros
    -Un boton de editar en caso de querer editar algun registro ya ingresado
    -Un boton de eliminar para eliminar el registro que consideremos
```


### Explicacion de la codificación ⌨️
```
* Todo realmente comienza en el archivo Enviar.php en el cual se centro el desarrollo, en este por medio de una consulta se 
    muestran los registros encontrados en la BD, si no muestra nada es por que es necesario empezar a alimentar la base de datos.
* Al iniciar a ingresar registros,en el campo de 'Tipo de Habitacion' solo se podra seleccionar 3 valores: 'Estandar', 'Junior' 
    y 'Suite'.
* En el campo de 'Tipo de Acomodacion' solo se podran seleccionar los valores de: 'Sencilla', 'Doble', 'Triple' y 'Cuadruple'.
* El sistema cuenta con diferentes validaciones las cuales verifican que los datos seleccionados por el usuario sean los correctos, 
    estas validaciones on las siguientes:
    - Si el tipo de habitación es Estándar: la acomodación debe ser Sencilla o Doble, en caso de seleccionar un valor diferente 
     el sistema arroja una alerta al usuario indicandole lo que esta erroneo.
    - Si el tipo de habitación es Junior: la acomodación debe ser Triple o Cuádruple, en caso de seleccionar un valor diferente 
     el sistema arroja una alerta al usuario indicandole lo que esta erroneo.
    - Si el tipo de habitación es Suite: la acomodación debe ser Sencilla, Doble o Triple, en caso de seleccionar un valor diferente 
     el sistema arroja una alerta al usuario indicandole lo que esta erroneo.

* Cada registro ingresado cuenta con un id el cual es el diferenciador
* Al ingresar la informacion el sistema tambien valida la cantidad de registros realizados de cierta cantidad de habitaciones, 
  lo explico a continuacion:
    - Si se ingresa un registro adicional a los 25 registrados previamente de habitacion estandar con tipo de acomodacion sencilla, 
     el sistema arrojara un error indicandole al usuario que de ese tipo no se permiten mas registros.
    - Si se ingresa un registro adicional a los 12 registrados previamente de habitacion junior con tipo de acomodacion triple, 
     el sistema arrojara un error indicandole al usuario que de ese tipo no se permiten mas registros.
    - Si se ingresa un registro adicional a los 5 registrados previamente de habitacion estandar con tipo de acomodacion doble, 
     el sistema arrojara un error indicandole al usuario que de ese tipo no se permiten mas registros.
    - Si se ingresa un registro adicional a los 42 registros permitidos , el sistema arrojara un error indicandole al usuario 
     que debe editar algun registro ya ingresado
*El sistema valida que si por alguna razon se crearon registros vacios, los elimina y devuelve el contador a su registro anterior
```

## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [Visual Studio Code](https://code.visualstudio.com/download) - El Editor de codigo usado
* [XAMPP](https://maven.apache.org/) - Distribución de Apache que contiene MariaDB, PHP, MySQL


## Versionado 📌

Use [GIT](https://github.com/) pero en realidad solo realize un commit de subida.

## Autor ✒️

* **David Leonardo Parra** - *crudHotelero* - [lpb21](https://github.com/lpb21)
