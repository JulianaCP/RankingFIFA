    var contador= 0;
    var playP= false;
    var winners=[];
    var provisionalList= [];        
    var provisionalListUEFA=[];
    var listTeamsUEFA= [    
    ];
    var listTeams= [
        ];

    function next(){        
        alert(winners.length);
        var list1 = JSON.stringify(winners);        
        localStorage.setItem("listTeams",list1);                 
    }

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

                winners.push(provisionalListUEFA[i]);
            }
            else if ($player1> $player2) {
                document.getElementsByClassName("tdClassUEFA")[i].innerHTML= "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";

                document.getElementsByClassName("tdClassUEFA")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";
                winners.push(provisionalListUEFA[i]);
            }
            else{
                document.getElementsByClassName("tdClassUEFA")[i].innerHTML=  "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";

                document.getElementsByClassName("tdClassUEFA")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";
                winners.push(provisionalListUEFA[i+1]);
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
                winners.push(provisionalList[i]);
            }
            else if ($player1> $player2) {
                document.getElementsByClassName("tdClass")[i].innerHTML= "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";

                document.getElementsByClassName("tdClass")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";
                winners.push(provisionalList[i]);
            }
            else{
                document.getElementsByClassName("tdClass")[i].innerHTML=  "GOLES: "+$player1.toString()+"<br>"+
                    "<strong style= 'color: red;'>PERDEDOR</strong>";

                document.getElementsByClassName("tdClass")[i+1].innerHTML= "GOLES: "+$player2.toString()+"<br>"+
                    "<strong style= 'color: green;'>GANADOR</strong>";
                winners.push(provisionalList[i+1]);
            }   
        }
        console.log(winners);
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
