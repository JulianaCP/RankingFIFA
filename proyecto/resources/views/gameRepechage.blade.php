<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sorteo</title>
</head>
<style type="text/css">
    .classDivSelectLeft{        
        margin-right: 50%;        
    }
    .classDivSelectRight{        
        margin-left: 50%;        
    }
    .classDivContent{
       height: 450px;  
       overflow-y: scroll;
    }
    .classImage{
        height: 45px;
        width: 70px;
    }    
</style>
<body>
    <nav class="nav_color">
        <div class="nav-wrapper">
        <a href="/ranking" class="brand-logo nav_logo">FIFA</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/ranking">Ranking</a></li>
            <li><?php session_start(); echo $_SESSION['fullName'] ?></li>
            <li><a href="">Cerrar Sesión</a></li>
        </ul>
        </div>
    </nav>
    <br>        
    <div class="row card_center">
            <div class="card">
                <div class="card-content centrarInput ">                
                    <h3 class="centrar_texto"><strong>Repechaje</strong></h3>
                    <hr>
                    
                    <h5 class="centrar_texto">CONFEDERACIONES</h5>
                    <div class="centrarInput">                        
                        <div class="input-field col s6">
                            <div class="classDivContent">
                                <table class="responsive-table highlight bordered">
                                    <tbody id="tableBodySelectTeams">       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6"  style="margin-bottom: 10%">
                                <table class="responsive-table highlight bordered" id="tableBody">
                                    <tbody id="tableBodyVs1">                      
                                    </tbody>
                                </table>
                            </div>
                        </div>                        
                    </div>
                    <div class="row">
                        <hr>
                        <h5 class="centrar_texto">UEFA</h5>
                        <div class="centrarInput">   
                            <div class="input-field col s6">
                                <div class="classDivContent">
                                    <table class="responsive-table highlight bordered">
                                        <tbody id="tableBodySelectTeamsUEFA">       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6"  style="margin-bottom: 10%">
                                    <table class="responsive-table highlight bordered" id="tableBody">
                                        <tbody id="tableBodyVs1UEFA">                      
                                        </tbody>
                                    </table>
                                </div>
                            </div>     
                            <div class="row">
                                <button onclick="play()" class="waves-effect waves-light btn input-field widthButtonInput" id="button">Jugar</button>  
                                <a href="/updateTeam/{{$equipo->nombreEquipo}}" style="display: none;" class="waves-effect waves-light btn input-field widthButtonInput" id="buttonNext">Siguiente</a>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    

<script type="text/javascript">
    var contador= 0;
    var playP= false;
    var winners=[];
    var provisionalList= [];        
    var provisionalListUEFA=[];
    var listTeamsUEFA= [    
    ];
    var listTeams= [
        ];

    function getGlobalList(){        
        winners= JSON.parse(localStorage.listTeams);                
        listGlobalRep= JSON.parse(localStorage.listRepechege);        
        for(var i= 0; i < listGlobalRep.length; i++){
            if(listGlobalRep[i].idConfederacion == 6){
                listTeamsUEFA.push(listGlobalRep[i]);
            }
            else{
                listTeams.push(listGlobalRep[i]);
            }

        }
    }

    function findUserToDelete(team){            
        for(var i= 0; i< provisionalList.length; i++){                
            if (provisionalList[i].nombreEquipo == team.nombreEquipo){
                provisionalList.splice(i, 1);
                return;
            }
        }
        for (var i = 0; i < listTeams.length; i++) {
            if (listTeams[i].nombreEquipo == team.nombreEquipo){
                listTeams.splice(i, 1);                    
                return;
            }
        }
    }

    function findUserToDeleteUEFA(team){            
        for(var i= 0; i< provisionalListUEFA.length; i++){
            if (provisionalListUEFA[i].nombreEquipo == team.nombreEquipo){
                provisionalListUEFA.splice(i, 1);
                return;
            }
        }
        for (var i = 0; i < listTeamsUEFA.length; i++) {
            if (listTeamsUEFA[i].nombreEquipo == team.nombreEquipo){
                listTeamsUEFA.splice(i, 1);                    
                return;
            }
        }
    }        

    function playUEFA(){
        for (var i = 0; i<provisionalListUEFA.length; i= i+2) {
            $player1= Math.floor(Math.random() * 11);
            $player2= Math.floor(Math.random() * 11);
            if ($player2 == $player1) {
                $player1= $player1+1;                
                document.getElementsByClassName("tdClassUEFA")[i].innerHTML= "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";

                document.getElementsByClassName("tdClassUEFA")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";

                winners.push($player1);
            }
            else if ($player1> $player2) {
                document.getElementsByClassName("tdClassUEFA")[i].innerHTML= "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";

                document.getElementsByClassName("tdClassUEFA")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";
                winners.push($player2);
            }
            else{
                document.getElementsByClassName("tdClassUEFA")[i].innerHTML=  "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";

                document.getElementsByClassName("tdClassUEFA")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";
                winners.push($player1);
            }   
        }              
    }

    function play(){  
        playP= true;
        playUEFA();
        for (var i = 0; i<provisionalList.length; i= i+2) {            
            $player1= Math.floor(Math.random() * 11);
            $player2= Math.floor(Math.random() * 11);
            if ($player2 == $player1) {
                $player1= $player1+1;                
                document.getElementsByClassName("tdClass")[i].innerHTML= "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";

                document.getElementsByClassName("tdClass")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";
                winners.push($player1);
            }
            else if ($player1> $player2) {
                document.getElementsByClassName("tdClass")[i].innerHTML= "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";

                document.getElementsByClassName("tdClass")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";
                winners.push($player2);
            }
            else{
                document.getElementsByClassName("tdClass")[i].innerHTML=  "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";

                document.getElementsByClassName("tdClass")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";
                winners.push($player1);
            }   
        }              
        document.getElementById("button").style.display= "none";
        document.getElementById("buttonNext").style.display= "block";
    }

    function addToVs(element,object){            
        findUserToDelete(object);
        provisionalList.push(object);
        changeTable();
    }

    function quitOfVs(element,object){                        
        if (playP) {
            return;
        }
        findUserToDelete(object);
        listTeams.push(object);
        changeTable();
    }

    function addToVsUEFA(element,object){            
        findUserToDeleteUEFA(object);
        provisionalListUEFA.push(object);
        changeTableUEFA();
    }

    function quitOfVsUEFA(element,object){                        
        if (playP) {
            return;
        }        
        findUserToDeleteUEFA(object);
        listTeamsUEFA.push(object);
        changeTableUEFA();
    }

    function changeTable(){                         
        var variable= "";           
        var variable2= "";           
        for (var i =0; i< listTeams.length;i++) {                
            var stringObject=JSON.stringify(listTeams[i]);                
            variable= variable+
            "<tr>"+                                     
                "<td onclick= 'addToVs(this,"+stringObject+")'>"+
                    "<div class='table_imagen'><img src='"+listTeams[i].bandera+"' class= 'classImage'></div>"+
                    "<div class='table_centrar_texto'>"+listTeams[i].nombreEquipo+"</div>"+
                "</td>"+
            "</tr> "; 
        }                       
        var j= 0;
        for(; j<provisionalList.length;j= j+2){
            var stringObject=JSON.stringify(provisionalList[j]);
            variable2= variable2+ 
            "<tr>"+
            "<td onclick= 'quitOfVs(this,"+stringObject+")'>"+
                "<div class='table_imagen'><img src='"+provisionalList[j].bandera+"' class= 'classImage'></div>"+
                "<div class='table_centrar_texto'>"+provisionalList[j].nombreEquipo+"</div><div class='tdClass'></div>"+
            "</td>"+
            "<td><strong>VS</strong></td>";
            if(j+1 < provisionalList.length){
                stringObject=JSON.stringify(provisionalList[j+1]);
                variable2= variable2+
                "<td onclick= 'quitOfVs(this,"+stringObject+")'>"+
                    "<div class='table_imagen'><img src='"+provisionalList[j+1].bandera+"' class= 'classImage'></div>"+
                    "<div class='table_centrar_texto'>"+provisionalList[j+1].nombreEquipo+"</div><div class='tdClass'></div>"+
                "</td>";                        
            }
            else{
                variable2= variable2+                    
                "<td>"+
                    "<div class='table_imagen'><img src='img/pregunta.png' class= 'classImage'></div>"+
                    "<div class='table_centrar_texto'>Sin asignar</div>"+
                "</td>";                           
            }
            variable2= variable2+"</tr> "; 
        }    
        for (; j< 4;j= j+2) {                     
            
            variable2= variable2+
            "<td>"+
                "<div class='table_imagen'><img src='img/pregunta.png' class= 'classImage'></div>"+
                "<div class='table_centrar_texto'>Sin asignar</div>"+
            "</td>"+
            "<td><strong>VS</strong></td>"+
                "<td>"+
                    "<div class='table_imagen'><img src='img/pregunta.png' class= 'classImage'></div>"+
                    "<div class='table_centrar_texto'>Sin asignar</div>"+
                "</td>"+
                "</tr> "; 
        }                                   
        document.getElementById("tableBodySelectTeams").innerHTML= variable;
        document.getElementById("tableBodyVs1").innerHTML= variable2;
        
        if (provisionalList.length >=4 && provisionalListUEFA.length >= 8) {            
            document.getElementById("button").style.display= "block";
        }
        else{
            document.getElementById("button").style.display= "none";   
        }
    }
    

    function changeTableUEFA(){                         
        var variable= "";           
        var variable2= "";                   
        for (var i =0; i< listTeamsUEFA.length;i++) {                
            var stringObject=JSON.stringify(listTeamsUEFA[i]);                
            variable= variable+
            "<tr>"+                                     
                "<td onclick= 'addToVsUEFA(this,"+stringObject+")'>"+
                    "<div class='table_imagen'><img src='"+listTeamsUEFA[i].bandera+"' class= 'classImage'></div>"+
                    "<div class='table_centrar_texto'>"+listTeamsUEFA[i].nombreEquipo+"</div>"+
                "</td>"+
            "</tr> "; 
        }                               
        var j= 0;
        for(; j<provisionalListUEFA.length;j= j+2){
            var stringObject=JSON.stringify(provisionalListUEFA[j]);
            variable2= variable2+ 
            "<tr>"+
            "<td onclick= 'quitOfVsUEFA(this,"+stringObject+")'>"+
                "<div class='table_imagen'><img src='"+provisionalListUEFA[j].bandera+"' class= 'classImage'></div>"+
                "<div class='table_centrar_texto'>"+provisionalListUEFA[j].nombreEquipo+"</div><div class='tdClassUEFA'></div>"+
            "</td>"+
            "<td><strong>VS</strong></td>";
            if(j+1 < provisionalListUEFA.length){
                stringObject=JSON.stringify(provisionalListUEFA[j+1]);
                variable2= variable2+
                "<td onclick= 'quitOfVsUEFA(this,"+stringObject+")'>"+
                    "<div class='table_imagen'><img src='"+provisionalListUEFA[j+1].bandera+"' class= 'classImage'></div>"+
                    "<div class='table_centrar_texto'>"+provisionalListUEFA[j+1].nombreEquipo+"</div><div class='tdClassUEFA'></div>"+
                "</td>";                        
            }
            else{
                variable2= variable2+                    
                "<td>"+
                    "<div class='table_imagen'><img src='img/pregunta.png' class= 'classImage'></div>"+
                    "<div class='table_centrar_texto'>Sin asignar</div>"+
                "</td>";                           
            }
            variable2= variable2+"</tr> "; 
        }    
        for (; j< 8;j= j+2) {                     
            
            variable2= variable2+
            "<td>"+
                "<div class='table_imagen'><img src='img/pregunta.png' class= 'classImage'></div>"+
                "<div class='table_centrar_texto'>Sin asignar</div>"+
            "</td>"+
            "<td><strong>VS</strong></td>"+
                "<td>"+
                    "<div class='table_imagen'><img src='img/pregunta.png' class= 'classImage'></div>"+
                    "<div class='table_centrar_texto'>Sin asignar</div>"+
                "</td>"+
                "</tr> "; 
        }                                   
        document.getElementById("tableBodySelectTeamsUEFA").innerHTML= variable;
        document.getElementById("tableBodyVs1UEFA").innerHTML= variable2;

        if (provisionalList.length >=4 && provisionalListUEFA.length >= 8) {
            document.getElementById("button").style.display= "block";
        }
        else{
            document.getElementById("button").style.display= "none";   
        }
    }
    getGlobalList();
    changeTable();
    changeTableUEFA();
</script>
    <footer class="page-footer footer_color">
        <div style="text-align:center;">
            <h5 class="white-text">FIFA</h5>        
            <p >Para más información visíte:</p>
            <a href="http://es.fifa.com/fifa-world-ranking/ranking-table/men/index.html">Fifa World Ranking</a>
        </div>    
        <div class="container">
            <div class="row">
                <div class="col l6 s12">                
                    
                </div>
            </div>
        </div>                           
        <div style="text-align:center;">
            Copyright© 1994 - 2017 FIFA. Reservados todos los derechos            
            <br>
            <br>            
        </div>
    </footer>    
</body>
</html>