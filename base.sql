create database proyecto_web_dos

use proyecto_web_dos

CREATE TABLE Confederacion(
	id INT IDENTITY PRIMARY KEY,
	nombre VARCHAR(50)
);

CREATE TABLE Equipo(
	nombre VARCHAR(100) PRIMARY KEY,
	puntos int NOT NULL,
	bandera VARCHAR(100) NOT NULL,
	activado BIT NOT NULL,
	idConfederacion INT NOT NULL,
	CONSTRAINT FK_idConfederacion_Equipo FOREIGN KEY(idConfederacion) REFERENCES Confederacion ON DELETE CASCADE ON UPDATE CASCADE	
)	



INSERT INTO Confederacion(nombre)
	VALUES
		('CAF'),
		('CONCACAF'),
		('CONMEBOL'),
		('OFC'),
		('AFC'),
		('UEFA');


select * from Confederacion


INSERT INTO Equipo(nombre,puntos,bandera,activado,idConfederacion)
	VALUES
		('Alemania',1631,'img/imagenes_ranking/1_Alemania.png',1,6),
		('Brasil',1619,'img/imagenes_ranking/2_Brasil.png',1,3),
		('Portugal',1446,'img/imagenes_ranking/3_Portugal.png',1,6),
		('Argentina',1145,'img/imagenes_ranking/4_Argentina.png',1,3),
		('Bélgica',1333,'img/imagenes_ranking/5_Belgica.png',1,6),
		('Polonia',1323,'img/imagenes_ranking/6_Polonia.png',1,6),
		('Francia',1226,'img/imagenes_ranking/7_Francia.png',1,6),
		('España',1218,'img/imagenes_ranking/8_España.png',1,6),
		('Chile',1173,'img/imagenes_ranking/9_Chile.png',1,3),
		('Peru',1160,'img/imagenes_ranking/10_Peru.png',1,3),
		('Suiza',1134,'img/imagenes_ranking/11_Suiza.png',1,6),
		('Inglaterra',1116,'img/imagenes_ranking/12_Inglaterra.png',1,6),
		('Colombia',1095,'img/imagenes_ranking/13_Colombia.png',1,3),
		('Gales',1072,'img/imagenes_ranking/14_Gales.png',1,6),
		('Italia',1066,'img/imagenes_ranking/15_Italia.png',1,6),
		('México',1060,'img/imagenes_ranking/16_Mexico.png',1,2),
		('Uruguay',1034,'img/imagenes_ranking/17_Uruguay.png',1,3),
		('Croacia',1013,'img/imagenes_ranking/18_Croacia.png',1,6),
		('Dinamarca',1001,'img/imagenes_ranking/19_Dinamarca.png',1,6),
		('Países Bajos',931,'img/imagenes_ranking/20_Paises_Bajos.png',1,6);


INSERT INTO Equipo(nombre,puntos,bandera,activado,idConfederacion)
	VALUES
		('Islandia',920,'img/imagenes_ranking/21_Islandia.png',1,6),
		('Costa Rica',914,'img/imagenes_ranking/22_Costa_Rica.png',1,2),
		('Irlanda del Norte',889,'img/imagenes_ranking/23_Irlanda_del_Norte.png',1,6),
		('Eslovaquia',885,'img/imagenes_ranking/24_Eslovaquia.png',1,6),
		('Suecia',872,'img/imagenes_ranking/25_Suecia.png',1,6),
		('República de Irlanda',866,'img/imagenes_ranking/26_Republica_De_Irlanda.png',1,6),
		('EEUU',843,'img/imagenes_ranking/27_EEUU.png',1,2),
		('Tunez',834,'img/imagenes_ranking/28_Tunez.png',1,1),
		('Escocia',821,'img/imagenes_ranking/29_Escocia.png',1,6),
		('Egipto',818,'img/imagenes_ranking/30_Egipto.png',1,1),
		('Ucrania',818,'img/imagenes_ranking/31_Ucrania.png',1,6),
		('Senegal',815,'img/imagenes_ranking/32_Senegal.png',1,1),
		('Turquia',807,'img/imagenes_ranking/33_Turquía.png',1,6),
		('Iran',784,'img/imagenes_ranking/34_Iran.png',1,5),
		('RD del Congo',751,'img/imagenes_ranking/35_RD_Del_Congo.png',1,1),
		('Paraguay',750,'img/imagenes_ranking/36_Paraguay.png',1,3),
		('Bulgaria',750,'img/imagenes_ranking/37_Bulgaria.png',1,6),
		('Serbia',748,'img/imagenes_ranking/38_Serbia.png',1,6),
		('Austria',745,'img/imagenes_ranking/39_Austria.png',1,6),
		('Bosnia y Herzegovina',744,'img/imagenes_ranking/40_Bosnia_Herzegovina.png',1,6);

INSERT INTO Equipo(nombre,puntos,bandera,activado,idConfederacion)
	VALUES
		('Nigeria',721,'41_Nigeria.png',1,1),
		('Camerún',718,'42_Camerún.png',1,1),
		('Australia',714,'43_Australia.png',1,5),
		('Japón',711,'44_Japon.png',1,5),
		('Rumanía',705,'45_Rumania',1,6),
		('República Checa',699,'46_República_Checa.png',1,6),
		('Grecia',682,'47_Grecia.png',1,6),
		('Marruecos',680,'48_Marruecos.png',1,1),
		('Panamá',670,'49_Panama.png',1,2),
		('Bolivia',664,'50_Bolivia.png',1,3);



SELECT * FROM Equipo