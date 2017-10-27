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
            <li><a href="/ranking">Ranking</a></li>
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
                                <input placeholder="Placeholder" name="nombreEquipo" id="nombreEquipo" type="text">
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="input-field" >
                                <input placeholder="Placeholder" name="pointsTeam" id="pointsTeam" type="number">
                            </div>
                        </div>

                        <div class="row">
                            <label for="categorieInsU">Confederacion:</label>
                            <select id="categorieInsU" name="categorieInsU" class="select_correction input-field">
                                <option value="1" selected>CAF</option>
                                <option value="2">CONCACAF</option>
                                <option value="3">CONMEBOL</option>
                                <option value="4">OFC</option>
                                <option value="5">AFC</option>
                                <option value="6">UEFA</option>         
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
    </form>
</body>
</html>