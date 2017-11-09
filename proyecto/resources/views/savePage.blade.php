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
    <script src="js/ranking.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="body">

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

    <div class="row card_center">
        <div class="card">
            <div class="card-content">
                <h3 class="centrar_texto"><strong>Juegos Guardados</strong></h3>
                <br> 
                <div class="table">
                    <table class="responsive-table highlight bordered">
                        <thead class="highlight">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre de sorteo</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Fecha</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $contador = 1;
                            ?>
                            @foreach($lista as $guardado)

                                <tr>
                                    <td><?php echo $contador ?></td>
                                    <td>
                                        <div class="table_imagen"><img src="{{$guardado->logo}}" alt=""></div>
                                        <div class="table_centrar_texto">{{$guardado->nombreSorteo}}</div>
                                    </td>
                                    <td>{{$guardado->nombreUsuario}}</td>
                                    <td>{{$guardado->fecha}}</td>       
                                    <td>                                        
                                        <form method="post"  action="/saveGamesShow" accept-charset="UTF-8">
                                            <input type="hidden" name="nombre" value ="{{$guardado->nombreSorteo}}">
                                            <button style="width: 75%;"  class="waves-effect waves-light btn input-field widthButtonInput">Ver más iformación</button>
                                        </form>
                                    </td>
                                </tr>  
                                <?php
                                    $contador = $contador + 1;
                                ?>
                            @endforeach
                        </tbody>
                    </table>  
            
                </div>
            </div>
        </div>
    </div>

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