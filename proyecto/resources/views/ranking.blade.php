<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>RANKING PAGE</h1>
    @foreach($listaEquipos as $equipo)

        <fieldset class="scheduler-border">
            {{ 'Nombre: "'.$equipo->nombre.'"'}}   			       					
	    </fieldset>

      
    @endforeach
</body>
</html>