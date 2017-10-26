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
</head>
<body class="body">

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
        <table style="width:100%">
          <tr>
            <th>Firstname</th>
            <th>Lastname</th> 
            <th>Age</th>
          </tr>
          <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
          </tr>
          <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
          </tr>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>80</td>
          </tr>
        </table>    
   
        <div class="modal-content" id="modalBoxCreateTeam" style="margin-left: 30%;">
            <div class="modal-header">
                <span class="close" onclick="closeModalCreate()">&times;</span>
                <h5>Crear Equipo</h5>
            </div>
            <form method="post"  action="http://localhost:8000/create" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="form">
                        <ul>
                            <legend><span class="number">1</span>Información</legend><br>                                
                            <li>
                                <label for="name">Nombre:</label>
                                <input type="text" name="nameIns" placeholder="Digite el nombre" id="nameIns"/>
                            </li>                       
                            <br>
                            <br>
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
                            <button type="submit" class="btn waves-effect waves-light" style="width: 150px; height: 50px; float: right;margin-top: 5%;margin-left: 5%;">Aceptar</button>                                
                        </ul>
                    </div>                                                            
                </div>
            </form>            
        </div>                        
    
        <div class="modal-content" id="modalBoxUpdate" style="margin-left: 30%;">
            <div class="modal-header">
                <span class="close" onclick="closeModalUpdate()">&times;</span> <h5>Actualizar Equipo</h5>                  
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
                            <button type="submit" class="btn waves-effect waves-light" style="width: 150px; height: 50px; float: right;margin-top: 5%;margin-left: 5%;">Aceptar</button>                                
                        </ul>
                    </div>                                                            
                </div>
            </form>            
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

        function openModalUpdate(nombreE){            
            var item= $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: 'updateElements',
                data: {nombreE : nombreE},
                success: function() {
                    console.log("Success");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Error: " + errorThrown); 
                } 
            });
            alert(typeof(item));
            alert(item.nombreEquipo);            
            document.getElementById('categorieIns').selectedIndex= item.idConfederacion;
            document.getElementById('nameIns').value=item.nombreEquipo;
            document.getElementById('pointIns').value=item.puntos;
            document.getElementById('flagIns').value=item.bandera;
            
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