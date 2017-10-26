<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Control Producto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">



        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/plantilla.css" rel="stylesheet">
        <link href="css/table.css" rel="stylesheet">                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>       
    </head>
    <style type="text/css">

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

.button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}




     /*Button create*/
    #floating-button{
        width: 55px;
        height: 55px;
        border-radius: 100%;
        background: black;
        position: fixed;
        right: 30px;
        top: 150px;
        cursor: pointer;
        box-shadow: 0px 2px 5px #666;
      }
      #floating-button:active{
        background: white;
        opacity: 0.5;
      }
      .plus:active{
          color: black;
      }
      
      .plus{
        color: white;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        display: block;
        text-align: center;
        padding: 0;
        margin: 0;
        line-height: 55px;
        font-size: 38px;
        font-family: 'Roboto';
        font-weight: 300;
        animation: plus-out 0.3s;
        transition: all 0.3s;
      }
      
      #container-floating{
        position: fixed;
        width: 70px;
        height: 70px;
        bottom: 30px;
        right: 30px;
        z-index: 50px;
      }
      
      #container-floating:hover{
        height: 400px;
        width: 90px;
        padding: 30px;
      }
      
      #container-floating:hover .plus{
        animation: plus-in 0.15s linear;
      }
      
      @keyframes plus-in{
          from {opacity: 0; transform: rotateZ(180deg);}
          to {opacity: 1; transform: rotateZ(0deg);}
      }
      
      @keyframes plus-out{
          from {opacity: 0; transform: rotateZ(180deg);}
          to {opacity: 1; transform: rotateZ(0deg);}
      }
      


      /* Modal box */

      .modal {
        display: none; 
        position: fixed;
        z-index: 1; 
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%;
        overflow: auto; 
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4); 

        border: 1px solid black
    }

    .modal-content {
        border: 1px solid red;
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 40%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0} 
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,.close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        padding: 2px 16px;
        background-color: black;
        color: white;
    }

    .modal-body {
        padding: 2px 16px;
        background-color: white;
        height: 450px;
    }

    .modal-footer {
        padding: 20px;
        background-color: white;
    }

   
    </style>        
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

        
        <div id="modalBoxUpdate" style="display: none;">            
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
        
            
        <button onclick="openModalUpdate()">Update</button>
        <div id="container-floating">
                        <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create"
                         onclick="openModalCreate()">
                            <p class="plus">+</p>
                        </div>
                </div>


    <script>                        
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