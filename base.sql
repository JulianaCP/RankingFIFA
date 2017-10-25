create database proyecto_web_dos

use proyecto_web_dos


CREATE TABLE Equipo(
	nombre VARCHAR(100) PRIMARY KEY,
	puntos int NOT NULL,
	bandera VARCHAR(100) NOT NULL,
	activado BIT NOT NULL,
	confederacion INT NOT NULL
)


create table prueba(
	valor int
);

insert into prueba(valor) values(5);

select * from prueba