var CAF=5;
var CONCACAF= 4;
var CONMEBOL= 5;
var OFC= 1;
var AFC= 5;      
var UEFA=17;
var Organizador=1;
var lista= [];   
var organizadorSelected;     
var repechajeList=[];            
var totalLarge= 0;

/*it serves to deselect a team*/
function desSelectTeam(valueP, nombre){            
    findUserToDelete(nombre.nombreEquipo);
    var actual= document.getElementById("categorieInsU").value;
    if (valueP == 1) {                                   
        CAF= CAF+1;                      
    }                        
    else if (parseInt(actual)== 2) {                    
        CONCACAF= CONCACAF+1;
    }            
    else if (parseInt(actual)== 3) {                    
        CONMEBOL= CONMEBOL+1;
    }            
    else if (parseInt(actual)== 4) {                    
        OFC= OFC+1;                 
    }            
    else if (parseInt(actual)== 5) {                    
        AFC= AFC+1;
    }            
    else if (parseInt(actual)== 6) {                    
        UEFA= UEFA+1;
    }       
    else if (parseInt(actual)== 7) {                    
        Organizador= Organizador+1;                    
    }                
}

/*it found a team in the list and delete it*/
function findUserToDelete(user){            
    for(var i= 0; i< lista.length; i++){                
        if (lista[i].nombreEquipo == user){                              
            lista.splice(i, 1);
            return;
        }
    }
    for (var i = 0; i < repechajeList.length; i++) {
        if (repechajeList[i].nombreEquipo == user){                     
            repechajeList.splice(i, 1);                    
            return;
        }
    }
}

/*it found a team in the list*/
function findUser(user){            
    for(var i= 0; i< lista.length; i++){                
        if (lista[i].nombreEquipo == user){                              
            return true;
        }
    }
    for (var i = 0; i < repechajeList.length; i++) {
        if (repechajeList[i].nombreEquipo == user){                                                    
            return true;
        }
    }
    return false;
}

/*show error message to the user*/
function errorMessage(checkboxInput, menssage){    
    swal(

      'ERROR...',
      menssage,
      'error'
    );            
    totalLarge= totalLarge-1;
    checkboxInput.checked=false;
}

/*serves to select a team*/
function selectTeam(nombre,counter){                                                        
    var actual= document.getElementById("categorieInsU").value;
    var checkboxInput= document.getElementById(nombre.nombreEquipo);                        
    
    var valueP= parseInt(actual);                                    
    var buton= document.getElementById("button");                        
    
    if(checkboxInput.checked){                
        totalLarge= totalLarge+1;
        if (valueP == 1) {                
           if (CAF <= 0){
                errorMessage(checkboxInput,"Ya se han seleccionado todos los posibles equipos!");       
                return;
            }
            else{
                CAF= CAF-1;                                          
                document.getElementsByClassName("label")[counter-1].innerHTML= "Seleccionado";                        
                lista.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
            }
        }                        
        else if (parseInt(actual)== 2) {
            if(CONCACAF== 1){
                CONCACAF= CONCACAF-1;
                repechajeList.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
                document.getElementsByClassName("label")[counter-1].innerHTML= "Repechaje";
            }
            else if (CONCACAF <= 0){
                errorMessage(checkboxInput,"Ya se han seleccionado todos los posibles equipos!");       
                return;
            }else{
                CONCACAF= CONCACAF-1;
                document.getElementsByClassName("label")[counter-1].innerHTML= "Seleccionado";
                lista.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
            }
        }            
        else if (parseInt(actual)== 3) {
            if(CONMEBOL== 1){
                CONMEBOL= CONMEBOL-1;
                repechajeList.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
                document.getElementsByClassName("label")[counter-1].innerHTML= "Repechaje";
            }
            else if (CONMEBOL <= 0){
                errorMessage(checkboxInput,"Ya se han seleccionado todos los posibles equipos!");       
                return;
            }
            else{
                CONMEBOL= CONMEBOL-1;
                document.getElementsByClassName("label")[counter-1].innerHTML= "Seleccionado";
                lista.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
            }
        }            
        else if (parseInt(actual)== 4) {
            if(OFC== 1){
                OFC= OFC-1;
                repechajeList.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
                document.getElementsByClassName("label")[counter-1].innerHTML= "Repechaje";
            }
            else if (OFC <= 0){
                errorMessage(checkboxInput,"Ya se han seleccionado todos los posibles equipos!");       
                return;
            }
            else{
                OFC= OFC-1;
                document.getElementsByClassName("label")[counter-1].innerHTML= "Seleccionado";
                lista.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
            }
        }            
        else if (parseInt(actual)== 5) {
            if(AFC== 1){
                AFC= AFC-1;
                repechajeList.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
                document.getElementsByClassName("label")[counter-1].innerHTML= "Repechaje";
            }
            else if (AFC <= 0){
                errorMessage(checkboxInput,"Ya se han seleccionado todos los posibles equipos!");       
                return;
            }
            else{
                AFC= AFC-1;   
                document.getElementsByClassName("label")[counter-1].innerHTML= "Seleccionado";
                lista.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
            }
        }            
        else if (parseInt(actual)== 6) {
            if(UEFA <=8 && UEFA >0){
                UEFA= UEFA-1;
                repechajeList.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
                document.getElementsByClassName("label")[counter-1].innerHTML= "Repechaje";
            }
            else if (UEFA <= 0){
                errorMessage(checkboxInput,"Ya se han seleccionado todos los posibles equipos!");       
                return;
            }
            else{
                UEFA= UEFA-1;
                document.getElementsByClassName("label")[counter-1].innerHTML= "Seleccionado";
                lista.push(
                {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter});
            }
        }       
        else if (parseInt(actual)== 7) {            
            if(findUser(nombre.nombreEquipo)){
                errorMessage(checkboxInput,"Este elemento ya ha sido seleccionado previamente!");
                return;
            }
            if(Organizador== 1){                
                Organizador= Organizador-1;                        
                organizadorSelected= {nombreEquipo: nombre.nombreEquipo,
                puntos: nombre.puntos,
                bandera: nombre.bandera,
                activado: nombre.activado,
                idConfederacion: nombre.idConfederacion,
                count: counter};             
                document.getElementsByClassName("label")[counter-1].innerHTML= "Seleccionado";
                    
            }
            else if (Organizador <= 0){
                errorMessage(checkboxInput,"Ya se han seleccionado todos los posibles equipos!");       
                return;
            }
        }                                                       
    }
    else{
        document.getElementsByClassName("label")[counter-1].innerHTML= "No seleccionado";
        checkboxInput.checked=false;
        desSelectTeam(valueP, nombre);
        totalLarge= totalLarge-1;
    }                        
    document.getElementById("number").innerHTML= totalLarge.toString();

    if(totalLarge == 38){

        button.style.visibility= "visible";
        var list1 = JSON.stringify(lista);
        var list2 = JSON.stringify(repechajeList);
        var org = JSON.stringify(organizadorSelected);

        localStorage.setItem("listTeams",list1);         
        localStorage.setItem("listRepechege",list2); 
        localStorage.setItem("organizador", org);              
    }
    else{
        button.style.visibility= "hidden";   
        localStorage.clear();
    }
}        

/*serves to verify if an organizer has already been selected previously*/
function OrganizatorSelectedNow(){
    if(organizadorSelected != null){
        var checkboxInput= document.getElementById(organizadorSelected.nombreEquipo);                
        if (checkboxInput!=null){                                       
            checkboxInput.checked=true;                                        
            document.getElementsByClassName("label")[organizadorSelected.count-1].innerHTML= "Seleccionado";
        }    
    }
}

/*it serves to verify if an element has already been selected previously*/
function isSelectedNowInTheList(){                        
    for(var i= 0; i< lista.length; i++){                
        var checkboxInput= document.getElementById(lista[i].nombreEquipo);                
        if (checkboxInput!=null){                                       
            checkboxInput.checked=true;                                        
            document.getElementsByClassName("label")[lista[i].count-1].innerHTML= "Seleccionado";
        }
    }
    for (var i = 0; i < repechajeList.length; i++) {
        var checkboxInput= document.getElementById(repechajeList[i].nombreEquipo);
        if (checkboxInput!=null){                                       
            checkboxInput.checked=true;                    
            document.getElementsByClassName("label")[repechajeList[i].count-1].innerHTML= "Repechaje";
        }
    }
}
