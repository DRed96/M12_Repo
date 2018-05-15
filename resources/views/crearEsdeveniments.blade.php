<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Crear esdeveniment</title>

    </head>
    <body>

		<div class="form-group">
        	<label for="title">Nom esdeveniment</label>
            <input type="text" name="nom" id="nom" class="form-control" required value="{{$esdeveiment->nom}}">
        </div>

		<div class="form-group">
        	<label for="title">Lloc esdeveniment</label>
            <input type="file" name="lloc" id="lloc" class="form-control" required value="{{$esdeveiment->lloc}}">
        </div>

		<div class="form-group">
        	<label for="title">Data esdeveniment</label>
            <input type="file" name="lloc" id="lloc" class="form-control" required value="{{$esdeveiment->data}}">
        </div>

		<div class="form-group">
        	<label for="title">Descripcio esdeveniment</label>
            <input type="file" name="lloc" id="lloc" class="form-control" required value="{{$esdeveiment->descripcio}}">
        </div>

		<div class="form-group">
        	<label for="title">Franja edat esdeveniment</label>
            <input type="file" name="lloc" id="lloc" class="form-control" required value="{{$esdeveiment->minimedat}}">
        </div>
	
    </body>
</html>
