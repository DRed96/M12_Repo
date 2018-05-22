@extends('layouts.masterLayout')

@section('content')
<link href="{{ asset('css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/moment.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    moment().format();
</script>

<div>
    <form id="sign_up_form" method="POST" action="{{ action(UsersController@crearEsdeveniment ) }}">
        {{ csrf_field() }}
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


        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@stop
