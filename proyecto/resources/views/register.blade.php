<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"/>
    <link type="text/css" rel="text/javascript" href="../materialize/js/materialize.min.js"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css">     
</head>
<body>
<form method="post"  action="http://localhost:8000/register/done" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  

        <div class="row card_center">
            <div class="card">
                <div class="card-content centrarInput ">
                    <h3 class="centrar_texto"><strong>Registrarse</strong></h3>
                    <div class="centrarInput">
                        <div>
                            <div class="input-field col s4">
                                <input id="name" name="name" type="text"
                                placeholder="Nombre" class="black_letter">
                            </div>
                            <div class="input-field col s4">
                                <input id="firstSurname" name="firstSurname" type="text"
                                placeholder="Primer Apellido" class="black_letter">
                            </div>
                            <div class="input-field col s4">
                                <input id="secondSurname" name="secondSurname" type="text"
                                placeholder="Segundo Apellido" class="black_letter">
                            </div>
                        </div>

                        <div class="input-field col s12">
                            <input id="age" name="age" type="number"
                            placeholder="Edad" class="black_letter">
                        </div>
                        <div class="input-field col s12">
                                <input id="username" name="username" type="text"
                                placeholder="Nombre de usuario" class="black_letter">
                            </div>
                        <div class="input-field col s12">
                            <input id="password" name="password" type="password"
                            placeholder="Contraseña" class="black_letter">
                        </div>
                        <div class="input-field col s12">
                            <input id="confirmPassword" name="confirmPassword" type="password"
                            placeholder="Confirmar contraseña" class="black_letter">
                        </div>
                        <div class="row">
                            <button class="waves-effect waves-light btn input-field widthButtonInput">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form> 
</body>
</html>