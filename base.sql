create database proyecto_web_dos


CREATE TABLE Confederacion(
	id INT IDENTITY PRIMARY KEY,
	nombre VARCHAR(50)
);

use proyecto_web_dos

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



INSERT INTO Equipo(nombre,puntos,bandera,activado,confederacion)
	VALUES
			('Venezuela',663,'img/imagenes_ranking/51_Venezuela.png',1,'CONMEBOL'),
			('Ghana',651,'img/imagenes_ranking/52_Ghana.png',1,'CAF'),
			('Hungría',642,'img/imagenes_ranking/53_Hungria.png',1,'UEFA'),
			('Montenegro',640,'img/imagenes_ranking/54_Montenegro.png',1,'UEFA'),
			('Burkina Faso',639,'img/imagenes_ranking/55_Burkina_Faso.png',1,'CAF'),
			('Haití',627,'img/imagenes_ranking/56_Haiti.png',1,'CONCACAF'),
			('RP China',626,'img/imagenes_ranking/57_RP_China.png',1,'CONCACAF'),
			('Noruega',620,'img/imagenes_ranking/58_Noruega.png',1,'UEFA'),
			('Jamaica',614,'img/imagenes_ranking/59_Jamaica.png',1,'CONCACAF'),
			('Ecuador',608,'img/imagenes_ranking/60_Ecuador.png',1,'CONMEBOL'),
			('Costa de Marfil',600,'img/imagenes_ranking/61_Costa_De_Marfil.png',1,'CAF'),
			('República de Corea',588,'img/imagenes_ranking/62_Republica_De_Corea.png',1,'AFC'),
			('Arabia Saudí',576,'img/imagenes_ranking/63_Arabia_Saudi.png',1,'AFC'),
			('Cabo Verde',568,'img/imagenes_ranking/64_Cabo_Verde.png',1,'CAF'),
			('Rusia',563,'img/imagenes_ranking/65_Rusia.png',1,'UEFA'),
			('Guinea',552,'img/imagenes_ranking/66_Guinea.png',1,'CAF'),
			('Argelia',540,'img/imagenes_ranking/67_Argelia.png',1,'CAF'),
			('Eslovenia',524,'img/imagenes_ranking/68_Eslovenia.png',1,'UEFA'),
			('Honduras',510,'img/imagenes_ranking/69_Honduras.png',1,'CONCACAF'),
			('Uganda',503,'img/imagenes_ranking/70_Uganda.png',1,'CAF'),
			('Albania',498,'img/imagenes_ranking/71_Albania.png',1,'UEFA'),
			('Emiratos Árabes Unidos',488,'img/imagenes_ranking/72_Emiratos_Arabes_Unidos.png',1,'AFC'),
			('Mali',488,'img/imagenes_ranking/73_Mali.png',1,'CAF'),
			('Finlandia',473,'img/imagenes_ranking/74_Finlandia.png',1,'UEFA'),
			('Sudáfrica',473,'img/imagenes_ranking/75_Sudafrica.png',1,'CAF'),
			('Uzbekistán',470,'img/imagenes_ranking/76_Uzbekistan.png',1,'AFC'),
			('Siria',450,'img/imagenes_ranking/77_Siria.png',1,'AFC'),
			('Zambia',450,'img/imagenes_ranking/78_Zambia.png',1,'CAF'),
			('Benín',438,'img/imagenes_ranking/79_Benin.png',1,'CAF'),
			('Irak',429,'img/imagenes_ranking/80_Irak.png',1,'AFC'),
			('Estonia',429,'img/imagenes_ranking/81_Estonia.png',1,'UEFA'),
			('Israel',420,'img/imagenes_ranking/82_Israel.png',1,'UEFA'),
			('Trinidad y Tobago',419,'img/imagenes_ranking/83_Trinidad_Y_Tobago.png',1,'CONCACAF'),
			('Palestina',418,'img/imagenes_ranking/84_Palestina.png',1,'AFC'),
			('ARY de Macedonia',410,'img/imagenes_ranking/85_Ary_De_Macedonia.png',1,'UEFA'),
			('Chipre',409,'img/imagenes_ranking/86_Chipre.png',1,'UEFA'),
			('Libia',407,'img/imagenes_ranking/87_Libia.png',1,'CAF'),
			('Guinea-Bissáu',403,'img/imagenes_ranking/88_Guinea_Bissau.png',1,'CAF'),
			('Curazao',402,'img/imagenes_ranking/89_Curazao.png',1,'CONCACAF'),
			('Armenia',392,'img/imagenes_ranking/90_Armenia.png',1,'UEFA'),
			('Bielorrusia',391,'img/imagenes_ranking/91_Bielorrusia.png',1,'UEFA'),
			('Gabón',384,'img/imagenes_ranking/92_Gabón.png',1,'CAF'),
			('Luxemburgo',368,'img/imagenes_ranking/93_Luxemburgo.png',1,'UEFA'),
			('Congo',367,'img/imagenes_ranking/94_Congo.png',1,'CAF'),
			('Islas Feroe',363,'img/imagenes_ranking/95_Islas_Feroe.png',1,'UEFA'),
			('Canadá',1631,'img/imagenes_ranking/96_Canada.png',1,'CONCACAF'),
			('El Salvador',1631,'img/imagenes_ranking/97_El_Salvador.png',1,'CONCACAF'),
			('Qatar',1631,'img/imagenes_ranking/98_Qatar.png',1,'AFC'),
			('Sierra Leona',1631,'img/imagenes_ranking/99_Sierra_Leona.png',1,'CAF'),
			('Líbano',1631,'img/imagenes_ranking/100_Libano.png',1,'AFC');

