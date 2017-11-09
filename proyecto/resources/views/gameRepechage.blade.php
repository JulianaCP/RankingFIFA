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
                                <a href="/classify-team" onclick="next()" style="display: none;" class="waves-effect waves-light btn input-field widthButtonInput" id="buttonNext">Siguiente</a>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <script src="js/play.js"></script>
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