
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
        <form id="sign_up_form" method="POST" action="/crearEsdeveniment">

        {{ csrf_field() }}
        <div class="form-group">
        	<label for="title">Nom Grup</label>
			<input type="text" class="form-control" id="nomGrup" name="nomGrup" placeholder="Nom" required/>
        </div>

		<div class="form-group">
        	<label for="title">Descripcio Grup</label>
            <input type="text" class="form-control" id="descripcioGrup" name="descripcioGrup" placeholder="Descripcio" required/>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@stop
