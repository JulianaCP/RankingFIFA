<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Control Producto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/plantilla.css" rel="stylesheet">
        <link href="css/table.css" rel="stylesheet">                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style type="text/css">
    /*table*/
    .tableBox{
        overflow-x:auto;
    }

    .tableHead{
        background-color: black;
        color: white
    }
    .tableHead tr,th{
        padding: 1%;
    }

    .tableBody tr td{
        border-bottom: 1px solid black;
        text-align: center;
        padding: 1%;
        border-color: #D8D8D8;
    }
    .tableBody tr td img{
        width: 50px;
        height: 50px;
    }

    .imgClass{
        width: 50px;
        height: 50px;
    }


     /*Button create*/
    #floating-button{
        width: 55px;
        height: 55px;
        border-radius: 100%;
        background: black;
        position: fixed;
        right: 30px;
        top: 70px;
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
        width: 50%;
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
        height: 400px;
    }

    .modal-footer {
        padding: 20px;
        background-color: white;
    }


    /*formulario*/
    .form{
        overflow: auto;
        padding-bottom: 1%;
        float: left;
        width: 50%;
    }
    .form ul {
        list-style-type:none;
        list-style-position:outside;
        margin:0px;
        padding:0px;
    }
    .form li{
        padding:12px; 
        border-bottom:1px solid #eee;
        position:relative;
    }
    .form h4{
        border-bottom:1px solid #777;
    }

    label {
        width:150px;
        margin-top: 3px;
        display:inline-block;
        float:left;
        padding:3px;
    }
    input {
        height:20px; 
        width:220px; 
        padding:5px 8px;
        border:1px solid #aaa;
        box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
        border-radius:2px;
    }
    select {
        width:220px; 
        padding:5px 8px;
        border:1px solid #aaa;
        box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
        border-radius:2px;
    }
    textarea {
        padding:8px; width:300px;
        border:1px solid #aaa;
        box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
        border-radius:2px;

    }

    input:focus,  textarea:focus {
        background: #fff; 
        border:1px solid #555; 
        box-shadow: 0 0 3px #aaa;
    } 

    button:active {
        border: 1px solid #20911e;
        background-color: darkgreen;         
    }

    </style>

    <body> 
        <div id="modalBoxCreateProduct" class="modal">            
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
                                <h4>Digite los datos</h4>
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
                            </ul>
                        </div>                                    
                        <div class="modal-footer">
                            <button type="submit">Aceptar</button>
                        </div>                            
                    </div>
                </form>            
            </div>                    
        </div>
        <div id="container-floating">
                        <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create"
                         onclick="openModalCreate()">
                            <p class="plus">+</p>
                        </div>
                </div>


    <script>                
        function openModalCreate(){            
            var modal = document.getElementById('modalBoxCreateProduct');
            modal.style.display = "block";
        }
        function closeModalCreate(){            
            var modal = document.getElementById('modalBoxCreateProduct');
            modal.style.display = "none";            

            $("#nameInput").val("");
            $("#descriptionInput").val("");
            $("#priceInput").val("");
            $("#amountInput").val(1);
            $("#categorieInput").val("woman")

        }
    </script>
    </body>
</html>