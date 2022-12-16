
create database HotelesDecameron;
use HotelesDecameron;
CREATE TABLE `habitaciones`(
    id int(11) NOT NULL AUTO_INCREMENT,
    hotelposeedor varchar(100) DEFAULT NULL,
    tipoHabitacion varchar(100) DEFAULT NULL,
    tipoAcomodacion varchar(100) DEFAULT NULL,
    fechaUltimoProceso datetime DEFAULT NULL,
    ocupada varchar(50) DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

-- consulta para seleccionar todos los registros ordenador por el hotel poseedor de las
-- habitaciones ordenados en orden descendente
SELECT * FROM hotelesdecameron.habitaciones order by hotelposeedor desc;
-- consulta para seleccionar todos las habitaciones tipo edstandar con acomodacion sencilla
SELECT * FROM habitaciones WHERE id is not null and hotelPoseedor = 'CARTAGENA' and tipoHabitacion = 'ESTANDAR' AND tipoAcomodacion = 'SENCILLA';
-- consulta para contar el total de registros ingresados
SELECT count(hotelposeedor) FROM habitaciones WHERE id is not null;
-- consulta para seleccionar las habitaciones tipo junior con acomodacion triple
SELECT * FROM habitaciones WHERE id is not null and hotelPoseedor = 'CARTAGENA' and tipoHabitacion = 'JUNIOR' AND tipoAcomodacion = 'TRIPLE';
-- consulta para seleccionar el total de habitaciones de tipo junior
SELECT * FROM habitaciones WHERE tipoHabitacion = 'JUNIOR';
-- consulta para contar el total de habitaciones de tipo junior
SELECT COUNT(tipoHabitacion) FROM habitaciones WHERE tipoHabitacion = 'JUNIOR';
-- consulta para seleccionar todas las habitaciones de tipo estandar con acomodacion doble
SELECT * FROM habitaciones WHERE tipoHabitacion = 'ESTANDAR' AND tipoAcomodacion = 'DOBLE';
-- consulta para contar el total de habitaciones de tipo estandar con acomodacion doble
SELECT COUNT(tipoHabitacion) FROM habitaciones WHERE tipoHabitacion = 'ESTANDAR' AND tipoAcomodacion = 'DOBLE';