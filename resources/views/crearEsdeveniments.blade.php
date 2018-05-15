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
            <input type="text" name="nomEsdeveniment" id="nomEsdeveniment" class="form-control" required value="{{$esdeveiment->nom}}">
        </div>

		<div class="form-group">
        	<label for="title">Lloc esdeveniment</label>
            <input type="text" name="llocEsdeveniment" id="llocEsdeveniment" class="form-control" required value="{{$esdeveiment->lloc}}">
        </div>

		<div class="form-group">
        	<label for="title">Data esdeveniment</label>
            <input type="text" name="dataEsdeveniment" id="dataEsdeveniment" class="form-control" required value="{{$esdeveiment->data}}">
        </div>

		<div class="form-group">
        	<label for="title">Descripcio esdeveniment</label>
            <input type="text" name="descripcioEsdeveniment" id="descripcioEsdeveniment" class="form-control" required value="{{$esdeveiment->descripcio}}">
        </div>
		
		<div class="form-group">
        	<label for="title">Etiquetes esdeveniment</label>
            <input type="text" name="etiquetesEsdeveniment" id="etiquetesEsdeveniment" class="form-control" required value="{{$esdeveiment->etiquetes}}">
		
		<div class="form-group">
        	<label for="title">Participants esdeveniment</label>
            <input type="text" name="participantsEsdeveniment" id="participantsEsdeveniment" class="form-control" required value="{{$esdeveiment->participants}}">
        </div>
		
		<div class="form-group">
        	<label for="title">Periodicitat esdeveniment</label>
            <input type="text" name="periodicitatEsdeveniment" id="periodicitatEsdeveniment" class="form-control" required value="{{$esdeveiment->periodicitat}}">
			
			
        </div>
	
    </body>
</html>
