<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorteo</title>
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"/>
    <link type="text/css" rel="text/javascript" href="../materialize/js/materialize.min.js"/>
    <link rel="stylesheet" href="css/ranking.css">    
    <link rel="stylesheet" href="css/style.css">   
        
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/selectTeams.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head><body class="body">
    <nav class="nav_color">
        <div class="nav-wrapper">
        <a href="/ranking" class="brand-logo nav_logo">FIFA</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/repechage">Sorteo</a></li>
            <li><a href="/saveGames">juegos guardados</a></li>
            <li><a href="/ranking">Ranking</a></li>
            <li><?php session_start(); echo $_SESSION['fullName'] ?></li>
            <li><a href="">Cerrar Sesión</a></li>
        </ul>
        </div>
    </nav>
    <br> 
    <br>     
    
    <a href="/playRepechage" style="visibility: hidden;"  class="waves-effect waves-light btn positionCreateButton"  id="button">Ir a repechaje</a>

    <div class="row card_center">        
        <div class="card">
            <div class="card-content">            
                <h3 class="centrar_texto"><strong>Seleccionar 38 equipos</strong><p id="number">0</p></h3>                
                <select onchange="changeTable()" id="categorieInsU" name="categorieInsU" class="select_correction input-field">
                    <option value="1">CAF</option>
                    <option value="2">CONCACAF</option>
                    <option value="3">CONMEBOL</option>
                    <option value="4">OFC</option>         
                    <option value="5">AFC</option>
                    <option value="6">UEFA</option>
                    <option value="7">Organizador</option>         
                </select>
                <br>
                <div class="table">
                    <table class="responsive-table highlight bordered" id="tableBody">
                    </table>              
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">        

        function changeTable(){                         
            var actual= document.getElementById("categorieInsU").value;
            var arrayJS= <?php echo json_encode($listaEquipos);?>    
            var variable= "<thead class='highlight'>"+
                            "<tr>"+
                                "<th scope='col'>#</th>"+
                                "<th scope='col'>Equipo</th>"+
                                "<th scope='col'>Puntos</th>"+
                                "<th scope='col'>Confederación</th>"+
                                "<th scope='col'></th>"+
                                "<th scope='col'></th>"+
                            "</tr>"+
                        "</thead>";              
            var counter= 1;            
            for (var i =0; i< arrayJS.length;i++) {                
                if (arrayJS[i].activado== 1 && parseInt(actual)== arrayJS[i].idConfederacion || arrayJS[i].activado== 1 &&
                    parseInt(actual)== 7) {                                        
                    var stringObject=JSON.stringify(arrayJS[i]);
                    variable= variable+
                    "<tr>"+                 
                        "<td>"+counter+"</td>"+
                        "<td>"+
                            "<div class='table_imagen'><img src='"+arrayJS[i].bandera+"'></div>"+
                            "<div class='table_centrar_texto'>"+arrayJS[i].nombreEquipo+"</div>"+
                        "</td>"+
                        "<td>"+arrayJS[i].puntos+"</td>"+
                        "<td>"+arrayJS[i].nombreConfederacion+"</td>"+
                        "<td>"+
                            "<input type='checkbox' onClick='selectTeam("+stringObject+","+counter+")' class='filled-in' id='"+arrayJS[i].nombreEquipo+"'/>"+
                            "<label for='"+arrayJS[i].nombreEquipo+"' class='label'>No seleccionado</label>                     "+
                        "</td>"+                        
                    "</tr> "; 
                    counter= counter+1;
                }                    
            }               
            document.getElementById("tableBody").innerHTML= variable;
            if(parseInt(actual)!= 7){
                isSelectedNowInTheList();
            }
            else{
                OrganizatorSelectedNow();
            }

        }
        changeTable();
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