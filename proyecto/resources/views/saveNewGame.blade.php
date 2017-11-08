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
            <li><?php session_start(); echo $_SESSION['fullName'] ?></li>
            <li><a href="">Cerrar Sesión</a></li>
        </ul>
        </div>
    </nav>
    <br>
    
    <form method="post"  action="/saveNewGame" accept-charset="UTF-8">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
        <div class="row card_center">
            <div class="card">
                <div class="card-content centrarInput ">
                    <h3 class="centrar_texto"><strong>Guardar Sorteo</strong></h3>
                    <div class="centrarInput">
                        <div class="row">
                            <div class="input-field ">
                                <input placeholder="Nombre del sorteo" name="nombre" id="nombre" type="text">
                            </div>
                        </div>                    
                        
                        <div class="row">
                            <div>
                                Logo: <input class="input-field" type="file" id="logo" name="logo">
                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" name="list" id="list">
                            <button class="waves-effect waves-light btn input-field widthButtonInput">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>   
    <script type="text/javascript">
        var lista= [{posicion:'1_A',nombreEquipo:'Alemania'},
                    {posicion:'2_A',nombreEquipo:'Canadá'},
                    {posicion:'3_A',nombreEquipo:'Brasil'},
                    {posicion:'4_A',nombreEquipo:'Bélgica'}];

        function getList(){
            var list1 = JSON.stringify(lista);              
            document.getElementById("list").value= list1;
        }
        getList();
    </script>
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