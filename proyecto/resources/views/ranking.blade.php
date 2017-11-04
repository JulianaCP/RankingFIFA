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
            <li><a href="/repechage">Repechaje</a></li>
            <li><a href="/ranking">Ranking</a></li>
            <li><?php session_start(); echo $_SESSION['fullName'] ?></li>
            <li><a href="">Cerrar Sesión</a></li>
        </ul>
        </div>
    </nav>

    <br> 
    <br>   
    <a href="/createTeam" class="waves-effect waves-light btn positionCreateButton">Crear Equipo</a>

    <div class="row card_center">
        <div class="card">
            <div class="card-content">
                <h3 class="centrar_texto"><strong>Ranking</strong></h3>
                <br> 
                <div class="table">
                    <table class="responsive-table highlight bordered">
                        <thead class="highlight">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Equipo</th>
                                <th scope="col">Puntos</th>
                                <th scope="col">Confederación</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $contador = 1;
                            ?>
                            @foreach($listaEquipos as $equipo)

                                <tr>
                                    <td><?php echo $contador ?></td>
                                    <td>
                                        <div class="table_imagen"><img src="{{$equipo->bandera}}" alt=""></div>
                                        <div class="table_centrar_texto">{{$equipo->nombreEquipo}}</div>
                                        
                                    
                                    </td>
                                    <td>{{$equipo->puntos}}</td>
                                    <td>{{$equipo->nombreConfederacion}}</td>
                                    <td>
                                        @if ($equipo->activado == 1)
                                            <input type="checkbox" onClick="change(this.id)" checked="checked" class="filled-in" id="{{$equipo->nombreEquipo}}"/>
                                            <label for="{{$equipo->nombreEquipo}}">Habilitado</label>
                                        @endif
                                        @if ($equipo->activado == 0)
                                            <input type="checkbox" onClick="change(this.id)" class="filled-in" id="{{$equipo->nombreEquipo}}"/>
                                            <label for="{{$equipo->nombreEquipo}}">Habilitado</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/updateTeam/{{$equipo->nombreEquipo}}" class="">Editar</a>
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