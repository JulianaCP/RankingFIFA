<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorteo</title>
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"/>
    <link type="text/css" rel="text/javascript" href="materialize/js/materialize.min.js"/>
    <link rel="stylesheet" href="css/ranking.css">    
    <link rel="stylesheet" href="css/style.css">   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plantilla.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">                
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="body">
    <div id="modalBoxCreateTeam" class="modal">            
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModalCreate()">&times;</span>
                <h3>Crear Equipo</h3>
            </div>
            <form method="post"  action="http://localhost:8000/create" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="form">
                        <ul>
                            <legend><span class="number">1</span>Información</legend>                                
                            <li>
                                <label for="name">Nombre:</label>
                                <input type="text" name="nameIns" placeholder="Digite el nombre" id="nameIns"/>
                            </li>                       

                            <li>
                                <label for="price">Puntos:</label>
                                <input type="number" name="pointIns" placeholder="Digite los puntos" id="pointIns"/>
                            </li>                                                     
                            <li>
                                <label for="categorieIns">Confederacion:</label>
                                <select id="categorieIns" name="categorieIns">
                                    <option value="1" selected>CAF</option>
                                    <option value="2">CONCACAF</option>
                                    <option value="3">CONMEBOL</option>
                                    <option value="4">OFC</option>
                                    <option value="5">AFC</option>
                                    <option value="6">UEFA</option>         
                                </select>
                            </li>
                            <input type="file" id="flagIns" name="flagIns">
                            <button type="submit" class="button" style="width: 150px; height: 50px; float: right;margin-top: 2%;margin-left: 50%;">Aceptar</button>                                
                        </ul>
                    </div>                                                            
                </div>
            </form>            
        </div>                    
    </div>        

        
    <div id="modalBoxUpdate" class="modal">            
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModalUpdate()">&times;</span> <h3>Actualizar Equipo</h3>                  
            </div>
            <form method="post"  action="http://localhost:8000/update" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="form">
                        <ul>
                            <legend><span class="number">1</span>Información</legend>                                
                            <li>
                                <label for="name">Nombre:</label>
                                <input type="text" name="nameInsU" placeholder="Digite el nombre" id="nameInsU"/>
                            </li>                       

                            <li>
                                <label for="price">Puntos:</label>
                                <input type="number" name="pointInsU" placeholder="Digite los puntos" id="pointInsU"/>
                            </li>                                                     
                            <li>
                                <label for="categorieInsU">Confederacion:</label>
                                <select id="categorieInsU" name="categorieInsU">
                                    <option value="1" selected>CAF</option>
                                    <option value="2">CONCACAF</option>
                                    <option value="3">CONMEBOL</option>
                                    <option value="4">OFC</option>
                                    <option value="5">AFC</option>
                                    <option value="6">UEFA</option>         
                                </select>
                            </li>
                            <input type="file" id="flagInsU" name="flagInsU">
                            <button class="button" type="submit" style="width: 150px; height: 50px; float: right;margin-top: 2%;margin-left: 50%;">Aceptar</button>                                
                        </ul>
                    </div>                                                            
                </div>
            </form>            
        </div>                    
    </div>
    


    <nav class="nav_color">
        <div class="nav-wrapper">
        <a href="/ranking" class="brand-logo nav_logo">FIFA</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/ranking">Ranking</a></li>
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
                            <form action="/ranking/check">
                                <input type="checkbox" onClick="change(this.id)" checked="checked" class="filled-in" id="{{$equipo->nombreEquipo}}"/>
                                <label for="{{$equipo->nombreEquipo}}">Habilitado</label>
                            </form>
                        @endif
                        @if ($equipo->activado == 0)
                            <form action="/ranking/check">
                                <input type="checkbox" onClick="change(this.id)" class="filled-in" id="{{$equipo->nombreEquipo}}"/>
                                <label for="{{$equipo->nombreEquipo}}">Habilitado</label>
                            </form>
                        @endif
                    </td>
                    <td>
                        <button>Editar</button>

                    </td>
                </tr>  
                <?php
                    $contador = $contador + 1;
                ?>
            @endforeach
            </tbody>
        </table>  
    
    </div>
    
    <div id="container-floating">
        <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create"
         onclick="openModalCreate()">
            <p class="plus">+</p>
        </div>
    </div>
    
    <script>
        function change(idEquipo){
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: 'ranking/enableTeam',
                data: {id : idEquipo},
                success: function() {
                    console.log("Success");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Error: " + errorThrown); 
                } 
            })
        }
        function openModalCreate(){            
            var modal = document.getElementById('modalBoxCreateTeam');
            modal.style.display = "block";
        }
        function closeModalCreate(){            
            var modal = document.getElementById('modalBoxCreateTeam');
            modal.style.display = "none";            

            $("#nameIns").val("");
            $("#pointIns").val(0);
            $("#categorieIns").val("");
            $("#flagIns").val("");
            

        }
        function openModalUpdate(){            
            var modal = document.getElementById('modalBoxUpdate');
            modal.style.display = "block";
        }
        function closeModalUpdate(){            
            var modal = document.getElementById('modalBoxUpdate');
            modal.style.display = "none";            

            $("#nameIns").val("");
            $("#pointIns").val(0);
            $("#categorieIns").val("");
            $("#flagIns").val("");            
        }        
    </script>     
   
</body>
</html>