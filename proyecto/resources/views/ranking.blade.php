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
</head>
<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
        </div>
    </nav>
            
<h1>RANKING PAGE</h1>
    <div class="table">
        <table class="responsive-table highlight bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>
            <tbody>
            @foreach($listaEquipos as $equipo)
                <tr>
                    <td>1</td>
                    <td>
                        <div class="table_imagen"><img src="{{$equipo->bandera}}" alt=""></div>
                        <div>{{$equipo->nombre}}</div>
                        
                    
                    </td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>  
            @endforeach
            </tbody>
        </table>  
    
    </div>

</body>
</html>