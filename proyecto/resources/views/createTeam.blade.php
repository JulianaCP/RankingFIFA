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
    
    <form method="post"  action="http://localhost:8000/createTeam/done" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  

        <div class="row card_center">
            <div class="card">
                <div class="card-content centrarInput ">
                    <h3 class="centrar_texto"><strong>Crear Equipo</strong></h3>
                    <div class="centrarInput">
                        <div class="row">
                            <div class="input-field ">
                                <input placeholder="Nombre" name="nombreEquipo" id="nombreEquipo" type="text">
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="input-field" >
                                <input placeholder="Puntos" name="pointsTeam" id="pointsTeam" type="number">
                            </div>
                        </div>

                        <div class="row">
                            <label for="categorieInsU">Confederacion:</label>
                            <select id="categorieInsU" name="categorieInsU" class="select_correction input-field">
                                <?php
                                    $contador = 1;
                                ?>    
                                @foreach($listConfederations as $confederacy)
                                    <option value="<?php echo $contador ?>">{{$confederacy->nombreConfederacion}}</option>

                                    <?php
                                        $contador = $contador + 1;
                                    ?>
                                @endforeach          
                            </select>
                        </div>
                        <div class="row">
                            <div>
                                <input class="input-field" type="file" id="flagInsU" name="flagInsU">
                            </div>
                        </div>
                        <div class="row">
                            <button class="waves-effect waves-light btn input-field widthButtonInput">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>   

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