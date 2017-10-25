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

