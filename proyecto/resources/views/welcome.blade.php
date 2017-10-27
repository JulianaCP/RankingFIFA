<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .divPrincipal{
                background-color: white;
                height: 400px;
                width: 500px;
                border-color: black;
                border-radius: 10px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
             body{
                    background:#8ba987 url('img/fondo.jpg') no-repeat center center;
                    background-size:100% 100%;
                }
        </style>
    </head>    

    <body>           
        <div class="flex-center position-ref full-height">            
            <div class="divPrincipal">
                <div class="content">
                    <br>
                    <br>
                    <div class="title m-b-md">
                        FIFA                        
                    </div>
                    <h5 style="color: black;">Para ingresar presione el siguiente botón</h5>
                    <br>
                    <form method="post"  action="http://localhost:8000/ranking" accept-charset="UTF-8">                        
                        <button class="waves-effect waves-light btn input-field widthButtonInput" style="height: 50px; width: 250px;">Ingresar</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>            
        </div>
    </body>
</html>
