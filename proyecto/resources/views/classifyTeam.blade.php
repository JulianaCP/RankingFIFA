<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="../js/groupDraw.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 

    <title>Sorteo</title>

    <link rel="stylesheet" href="../css/style.css"> 
    <link rel="stylesheet" href="../css/classifyTeam.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" rel="stylesheet"/>
    <link type="text/css" rel="text/javascript" href="../materialize/js/materialize.min.js"/>


    <!--dialog/-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    <nav class="nav_color">
        <div class="nav-wrapper">
        <a href="/ranking" class="brand-logo nav_logo">FIFA</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/repechage">Sorteo</a></li>
            <li><a href="/saveGames">juegos guardados</a></li>
            <li><a href="/ranking">Ranking</a></li>
            <li><?php session_start(); echo $_SESSION['fullName'] ?></li>
            <li><a href="/">Cerrar Sesión</a></li>
        </ul>
        </div>
    </nav>
    <div id="ButtonSaveChart" style="display: none">
        <br>
        <a href="/saveNewGameView" class="waves-effect waves-light btn positionButtonRight">Guardar Resultados</a>

    </div>


    <div class="row card_center_bombo_page">
        <div class="card " >
            <div class="card-content centrarInput_bombo_page ">
                <div class="centrarInput_bombo_page">
                    <h4 class="centrar_texto"><strong>Resultado Sorteo Grupos</strong></h4>
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
                </div>
                <div class="centrarInput_bombo_page">

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


    <div id="dialog" title="Basic dialog" style="display: none">
        <img src="../img/copa.png" id="dialogImg"><br>
        <div style="text-align:center">
            
            <h4 id="dialogNameTeam"></h4>
            <img src="" alt="" id="dialogImgTeam"><br><br>
            <h4 id="dialogPosition"></h4>
            <h5 id="dialogTitleFIFA">FIFA</h5>
        </div>


    </div>
    
        <div class="row card_center mdRadius">
            <div class="card" >
                
                <div class="centrarInput bomboCardBackground">
                <h4 class="centrar_texto" style="color:black;"><strong>Sorteo Grupos</strong></h4>
                    <div class="card-content centrarInput bomboCardBackground">
                        <img src="../img/bombo/bombo_8_O.jpg" alt="" id="loading_img_T1" class="bombo_size responsive-img" >
                        <img src="../img/bombo/bombo_8.jpg" alt="" id="loading_img_T2" class="bombo_size responsive-img" >
                        <img src="../img/bombo/bombo_8.jpg" alt="" id="loading_img_T3" class="bombo_size responsive-img" >
                        <img src="../img/bombo/bombo_8.jpg" alt="" id="loading_img_T4" class="bombo_size responsive-img" >

                        <br>
                        <div class="centrarInput">

                            <img src="../img/fifa.jpg" alt="" class="bombo_size_logo"><br>
                            <button onclick="movementBombo()" class="waves-effect waves-light btn widthButtonInput">Obtener</button>
                    
                        </div>
                        <br>
                        <img src="../img/bombo/bombo_8.jpg" alt="" id="loading_img_P1" class="bombo_size responsive-img" >
                        <img src="../img/bombo/bombo_8.jpg" alt="" id="loading_img_P2" class="bombo_size responsive-img" >
                        <img src="../img/bombo/bombo_8.jpg" alt="" id="loading_img_P3" class="bombo_size responsive-img" >
                        <img src="../img/bombo/bombo_8.jpg" alt="" id="loading_img_P4" class="bombo_size responsive-img" >
                
                    </div>
                </div>
            </div>
        </div>

        
    <script>
        listOrder();
    </script>
</body>
</html>