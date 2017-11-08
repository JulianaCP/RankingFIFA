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
    .classTablita{
        margin-left: 20%;
        margin-right: 20%;
    } 

    th{
        background-color: #0B614B;
        color: white;
    }

    td{
        width: 25%;
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

    <div class="row card_center">
        <div class="card">
            <div class="card-content">
                <h3 class="centrar_texto"><strong>Información de juego</strong></h3>
                <br> 
                <div class="classTablita">
                    <table>
                        <thead>
                        <tr>
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                        </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td id="1_A"></td>
                                <td id="1_B"></td>
                                <td id="1_C"></td>
                                <td id="1_D"></td>
                            </tr>
                            <tr>
                                <td id="2_A"></td>
                                <td id="2_B"></td>
                                <td id="2_C"></td>
                                <td id="2_D"></td>
                            </tr>
                            <tr>
                                <td id="3_A"></td>
                                <td id="3_B"></td>
                                <td id="3_C"></td>
                                <td id="3_D"></td>
                            </tr>
                            <tr>
                                <td id="4_A"></td>
                                <td id="4_B"></td>
                                <td id="4_C"></td>
                                <td id="4_D"></td>
                            </tr>
                        </tbody>
                    </table>

                    <table>
                        <thead>
                            <tr>
                                <th>E</th>
                                <th>F</th>
                                <th>G</th>
                                <th>H</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td id="1_E"></td>
                                <td id="1_F"></td>
                                <td id="1_G"></td>
                                <td id="1_H"></td>
                            </tr>
                            <tr>
                                <td id="2_E"></td>
                                <td id="2_F"></td>
                                <td id="2_G"></td>
                                <td id="2_H"></td>
                            </tr>
                            <tr>
                                <td id="3_E"></td>
                                <td id="3_F"></td>
                                <td id="3_G"></td>
                                <td id="3_H"></td>
                            </tr>
                            <tr>
                                <td id="4_E"></td>
                                <td id="4_F"></td>
                                <td id="4_G"></td>
                                <td id="4_H"></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>  
        </div>
    </div>

    <script type="text/javascript">
        var arrayJS=<?php echo json_encode($lista);?>;
        for (var i =0; i< arrayJS.length;i++){
            var isIn= document.getElementById(arrayJS[i].posicion);
            
            if(isIn != null){
                 var code="<div class='table_imagen'><img src='"+arrayJS[i].bandera+"'></div>"+
                    "<div class='table_centrar_texto'>"+arrayJS[i].nombreEquipo+"</div>";
                    if (arrayJS[i].activado== "1") {
                       code= code+ "<div class='table_centrar_texto'>Activado</div>";
                    }
                    else{
                        code= code+"<div class='table_centrar_texto'>Desactivado</div>";
                    }
                isIn.innerHTML=code;                
            }
        }
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
    <script>
        $(document).ready(function(){
            var value = $("#idConfereacionTeam").val();
            $("#categorieInsU").val(value);
        });
        
        
    
    </script>
</body>
</html>