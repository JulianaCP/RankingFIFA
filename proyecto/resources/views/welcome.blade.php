<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"/>
        <link type="text/css" rel="text/javascript" href="../materialize/js/materialize.min.js"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Laravel</title>
        <link type="text/css" rel="stylesheet" href="../css/welcome.css"> 
        <link type="text/css" rel="stylesheet" href="../css/style.css"> 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>    
    <body>           
        <div class="flex-center position-ref full-height">            
            <div class="divPrincipal">
                <div class="content content_padding">
                    <div class="title m-b-md">
                        FIFA                        
                    </div>
                    <form method="post"  action="http://localhost:8000/validateLogin" accept-charset="UTF-8">                        
                        <div class="input-field">
                            <input id="user_name" name="user_name" type="text" value="{{$username}}"
                            placeholder="Nombre de Usuario" class="black_letter">

                        </div>
                        <div class="input-field">
                            <input id="contrasenna" name="contrasenna" type="text" value="{{$password}}"
                            placeholder="Contraseña" class="black_letter">

                        </div>
                        <button class="waves-effect waves-light btn input-field widthButtonInput" style="height: 50px; width: 250px;">Ingresar</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    </form>
                    <br>
                    <a href="/register">¿No esta regitrado? Registrarse</a>
                </div>
            </div>            
        </div>
    </body>
</html>
