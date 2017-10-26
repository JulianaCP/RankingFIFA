<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorteo</title>
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"/>
    <link type="text/css" rel="stylesheet" href="materialize/js/materialize.min.js"/>
    <link rel="stylesheet" href="css/ranking.css">    
    <link rel="stylesheet" href="css/style.css">   
</head>
<body class="body">
    
    <nav class="nav_color">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo nav_logo">FIFA</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/loginAction">Ranking</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
        </div>
    </nav>
    <br>    
    <h3 class="centrar_texto"><strong>Ranking</strong></h3>
    <div class="table">
        <table class="responsive-table highlight bordered">
            <thead class="highlight">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Equipo</th>
                    <th scope="col">Puntos</th>
                    <th scope="col">Confederación</th>
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
                        <input type="checkbox" class="filled-in" id="filled-in-box"/>
                        <label for="filled-in-box">Habilitado</label>
                    </td>
                </tr>  
                <?php
                    $contador = $contador + 1;
                ?>
            @endforeach
            </tbody>
        </table>  
    
    </div>

</body>
</html>