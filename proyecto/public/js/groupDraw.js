var list_Bombo_1 = []; 
var list_Bombo_2 = [];
var list_Bombo_3 = [];
var list_Bombo_4 = [];

var listaSeleccionados = [
    {'nombreEquipo':'equipo_1_prueba','puntos':0,'bandera':'../img/imagenes_ranking/4_Argentina.png'},
    {'nombreEquipo':'equipo_2','puntos':400,'bandera':'../img/imagenes_ranking/25_Suecia.png'},
    {'nombreEquipo':'equipo_3','puntos':100,'bandera':'../img/imagenes_ranking/40_Bosnia_Herzegovina.png'},
    {'nombreEquipo':'equipo_4','puntos':50,'bandera':'../img/imagenes_ranking/38_Serbia.png'},
    {'nombreEquipo':'equipo_5','puntos':70,'bandera':'../img/imagenes_ranking/24_Eslovaquia.png'},
    {'nombreEquipo':'equipo_6','puntos':60,'bandera':'../img/imagenes_ranking/52_Ghana.png'},
    {'nombreEquipo':'equipo_7','puntos':800,'bandera':'../img/imagenes_ranking/62_Republica_de_Corea.png'},
    {'nombreEquipo':'equipo_8','puntos':1000,'bandera':'../img/imagenes_ranking/25_Suecia.png'},
    {'nombreEquipo':'equipo_9','puntos':800,'bandera':'../img/imagenes_ranking/28_Tunez.png'},
    {'nombreEquipo':'equipo_10','puntos':10,'bandera':'../img/imagenes_ranking/79_Benin.png'},
    {'nombreEquipo':'equipo_11','puntos':1500,'bandera':'../img/imagenes_ranking/71_Albania.png'},
    {'nombreEquipo':'equipo_12','puntos':9000,'bandera':'../img/imagenes_ranking/70_Uganda.png'},
    {'nombreEquipo':'equipo_13','puntos':88,'bandera':'../img/imagenes_ranking/74_Mali.png'},
    {'nombreEquipo':'equipo_14','puntos':2500,'bandera':'../img/imagenes_ranking/75_Sudafrica.png'},
    {'nombreEquipo':'equipo_15','puntos':2300,'bandera':'../img/imagenes_ranking/68_Eslovenia.png'},
    {'nombreEquipo':'equipo_16','puntos':500,'bandera':'../img/imagenes_ranking/1_Alemania.png'},
    {'nombreEquipo':'equipo_17','puntos':2100,'bandera':'../img/imagenes_ranking/2_Brasil.png'},
    {'nombreEquipo':'equipo_18','puntos':500,'bandera':'../img/imagenes_ranking/25_Suecia.png'},
    {'nombreEquipo':'equipo_19','puntos':0,'bandera':'../img/imagenes_ranking/8_Espana.png'},
    {'nombreEquipo':'equipo_20','puntos':2,'bandera':'../img/imagenes_ranking/10_Peru.png'},
    {'nombreEquipo':'equipo_21','puntos':5,'bandera':'../img/imagenes_ranking/11_Suiza.png'},
    {'nombreEquipo':'equipo_22','puntos':850,'bandera':'../img/imagenes_ranking/33_Turquia.png'},
    {'nombreEquipo':'equipo_23','puntos':44,'bandera':'../img/imagenes_ranking/22_Costa_Rica.png'},
    {'nombreEquipo':'equipo_24','puntos':96,'bandera':'../img/imagenes_ranking/44_Japon.png'},
    {'nombreEquipo':'equipo_25','puntos':100,'bandera':'../img/imagenes_ranking/55_Burkina_Faso.png'},
    {'nombreEquipo':'equipo_26','puntos':57,'bandera':'../img/imagenes_ranking/66_Guinea.png'},
    {'nombreEquipo':'equipo_27','puntos':700,'bandera':'../img/imagenes_ranking/16_Mexico.png'},
    {'nombreEquipo':'equipo_28','puntos':850,'bandera':'../img/imagenes_ranking/40_Bosnia_Herzegovina.png'},
    {'nombreEquipo':'equipo_29','puntos':1200,'bandera':'../img/imagenes_ranking/50_Bolivia.png'},
    {'nombreEquipo':'equipo_30','puntos':110,'bandera':'../img/imagenes_ranking/48_Marruecos.png'},
    {'nombreEquipo':'equipo_31','puntos':555,'bandera':'../img/imagenes_ranking/36_Paraguay.png'}
]; //se debe borrar; ES LA LISTA DE LOS 32 PAISES
var organizerTeam = {'nombreEquipo':'prueba','puntos':5000,'bandera':'../img/imagenes_ranking/40_Bosnia_Herzegovina.png'}; //se debe borrar, es el equipo organizador

var list_position_Bombo_1 = []; 
var list_position_Bombo_2 = [];
var list_position_Bombo_3 = [];
var list_position_Bombo_4 = []; 



var listFinalChart = [];


var contTeamsInBombo = 8;
var activeBombo = 1;

var dirImage = '../img/bombo/bombo_';


//random position
var numRandom;
var randomPositionTeam;
var randomTeam;


function listOrder(){
   
    listaSeleccionados.sort(function(a, b) {
        return parseFloat(a.puntos) - parseFloat(b.puntos);
    });
    listaSeleccionados.reverse();
    listaSeleccionados.splice(0, 0, organizerTeam);
    obtainList('1');
    obtainList('2');
    obtainList('3');
    obtainList('4');
    obtainListPosition();
    resetVariables();
    console.log(list_Bombo_1);
    console.log(list_Bombo_2);
    console.log(list_Bombo_3);
    console.log(list_Bombo_4);
}
function obtainListPosition(){
    list_position_Bombo_1 = ['1_A','1_B','1_C','1_D','1_E','1_F','1_G','1_H'];
    list_position_Bombo_2 = ['2_A','2_B','2_C','2_D','2_E','2_F','2_G','2_H'];
    list_position_Bombo_3 = ['3_A','3_B','3_C','3_D','3_E','3_F','3_G','3_H'];
    list_position_Bombo_4 = ['4_A','4_B','4_C','4_D','4_E','4_F','4_G','4_H'];
}
function resetVariables(){
    contTeamsInBombo = 8;
    activeBombo = 1;
    listFinalChart = [];
}

function obtainList(bombo){
    if(bombo == '1'){
        list_Bombo_1 = listaSeleccionados.slice(0, 8);
    }
    else if(bombo == '2'){
        list_Bombo_2 = listaSeleccionados.slice(0, 8);
    }
    else if(bombo == '3'){
        list_Bombo_3 = listaSeleccionados.slice(0, 8);
    }
    else{
        list_Bombo_4 = listaSeleccionados.slice(0, 8);
    }
    listaSeleccionados = listaSeleccionados.slice(8);
    
}


function movementBombo(){
    if(contTeamsInBombo == 0){
        contTeamsInBombo = 8;
        activeBombo = activeBombo + 1;
    }
    if(activeBombo <= 4){
        if(activeBombo == 1){
            $('#loading_img_T1').addClass( "loading_img" ).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){
                $('#loading_img_T1').removeClass( "loading_img" );
            });
            $('#loading_img_P1').addClass( "loading_img" ).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){
                $('#loading_img_P1').removeClass( "loading_img" );
            });
        }
        else if(activeBombo == 2){
            $('#loading_img_T2').addClass( "loading_img" ).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){
                $('#loading_img_T2').removeClass( "loading_img" );
            });
            $('#loading_img_P2').addClass( "loading_img" ).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){
                $('#loading_img_P2').removeClass( "loading_img" );
            });
        }
        else if(activeBombo == 3){
            $('#loading_img_T3').addClass( "loading_img" ).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){
                $('#loading_img_T3').removeClass( "loading_img" );
            });
            $('#loading_img_P3').addClass( "loading_img" ).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){
                $('#loading_img_P3').removeClass( "loading_img" );
            });
        }
        else{
            $('#loading_img_T4').addClass( "loading_img" ).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){
                $('#loading_img_T4').removeClass( "loading_img" );
            });
            $('#loading_img_P4').addClass( "loading_img" ).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function(){
                $('#loading_img_P4').removeClass( "loading_img" );
            });
        }
        changeImages();
    }
    else{
        //habilitar boton guardar
    }

    
}
function changeImages(){

    contTeamsInBombo = contTeamsInBombo - 1;

    if(activeBombo == 1){
        $('#loading_img_T1').attr("src",dirImage + contTeamsInBombo + '.jpg');
        $('#loading_img_P1').attr("src",dirImage + contTeamsInBombo + '.jpg');
    }
    else if(activeBombo == 2){
        $('#loading_img_T2').attr("src",dirImage + contTeamsInBombo + '.jpg');
        $('#loading_img_P2').attr("src",dirImage + contTeamsInBombo + '.jpg');
    }
    else if(activeBombo == 3){
        $('#loading_img_T3').attr("src",dirImage + contTeamsInBombo + '.jpg');
        $('#loading_img_P3').attr("src",dirImage + contTeamsInBombo + '.jpg');
    }
    else{
        $('#loading_img_T4').attr("src",dirImage + contTeamsInBombo + '.jpg');
        $('#loading_img_P4').attr("src",dirImage + contTeamsInBombo + '.jpg');
    }
    addTeamChart();
}

function addTeamChart(){
    
    if(activeBombo == 1){
        if(contTeamsInBombo + 1 == 8){
            console.log("entrooooo");
            //position
            randomPositionTeam = list_position_Bombo_1[0];
            list_position_Bombo_1.splice(0, 1);
            //team
            numRandom = Math.floor(Math.random() * list_Bombo_1.length); 
            randomTeam = organizerTeam;
            list_Bombo_1.splice(0, 1);
        }
        else{
            console.log("ddd");
            //position
            numRandom = Math.floor(Math.random() * list_position_Bombo_1.length); 
            randomPositionTeam = list_position_Bombo_1[numRandom];
            list_position_Bombo_1.splice(numRandom, 1);
            //team
            numRandom = Math.floor(Math.random() * list_Bombo_1.length); 
            randomTeam = list_Bombo_1[numRandom];
            list_Bombo_1.splice(numRandom, 1);
        }
    }
    else if(activeBombo == 2){
        //position
        numRandom = Math.floor(Math.random() * list_position_Bombo_2.length); 
        randomPositionTeam = list_position_Bombo_2[numRandom];
        list_position_Bombo_2.splice(numRandom, 1);

        //team
        numRandom = Math.floor(Math.random() * list_Bombo_2.length); 
        randomTeam = list_Bombo_2[numRandom];
        list_Bombo_2.splice(numRandom, 1);
    }
    else if(activeBombo == 3){
        //position
        numRandom = Math.floor(Math.random() * list_position_Bombo_3.length); 
        randomPositionTeam = list_position_Bombo_3[numRandom];
        list_position_Bombo_3.splice(numRandom, 1);
        //team
        numRandom = Math.floor(Math.random() * list_Bombo_3.length); 
        randomTeam = list_Bombo_3[numRandom];
        list_Bombo_3.splice(numRandom, 1);
    }
    else{
        //position
        numRandom = Math.floor(Math.random() * list_position_Bombo_4.length); 
        randomPositionTeam = list_position_Bombo_4[numRandom];
        list_position_Bombo_4.splice(numRandom, 1);
        //team
        numRandom = Math.floor(Math.random() * list_Bombo_4.length); 
        randomTeam = list_Bombo_4[numRandom];
        list_Bombo_4.splice(numRandom, 1);
    }

    console.log(list_Bombo_1);
    console.log(list_Bombo_2);
    console.log(list_Bombo_3);
    console.log(list_Bombo_4);


    listFinalChart.push({'name': randomTeam.nombreEquipo,'position':randomPositionTeam});

    fillChart();
}

function fillChart(){

    $('#' + randomPositionTeam).append( "<img class='imageTable' src='"+randomTeam.bandera+"' alt=''>" );
    $('#' + randomPositionTeam).append("<p class='textTable'>"+randomTeam.nombreEquipo+"</p>");
    changeDialogValues();

}
function changeDialogValues(){
    $('#dialogNameTeam').text(randomTeam.nombreEquipo);
    $('#dialogPosition').text(randomPositionTeam);
    $('#dialogImgTeam').attr('src',randomTeam.bandera);
    dialog();
    verficateEnd();
}

function dialog(){
    $( "#dialog" ).dialog({
        modal: true,
        autoOpen: false,
        title: "Equipo seleccionado",
        width: 400,
        height: 400,
        draggable: false
    });
    setTimeout(function(){
        $('#dialog').dialog('open');
      }, 1000);
    
}
function verficateEnd(){
    if(list_Bombo_4.length==0){
        $('#ButtonSaveChart').css("display",'block');
    }
}
