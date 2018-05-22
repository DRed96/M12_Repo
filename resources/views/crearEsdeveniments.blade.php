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
        	<label for="title">Nom esdeveniment</label>
			<input type="text" class="form-control" id="nomEsdeveniment" name="nomEsdeveniment" placeholder="Nom" required/>
        </div>

		<div class="form-group">
        	<label for="title">Lloc esdeveniment</label>
            <input type="text" class="form-control" id="llocEsdeveniment" name="llocEsdeveniment" placeholder="Lloc" required/>
        </div>

		<div class="form-group">
                <label for="name">Data Esdeveniment</label>
                <div class='input-group date'>
                    <input match="[]" type='text' class="form-control" id='birthdatePicker' name="birthdatePicker" required/>
                    <span class="input-group-addon">
                        <i class="fas fa-calendar-alt"></i>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
            $(function () {
                $('#birthdatePicker').datetimepicker({
                    viewMode: 'years',
                    format: 'YYYY-MM-DD'
                });
            });
            </script>
        </div>

		<div class="form-group">
        	<label for="title">Descripcio esdeveniment</label>
            <input type="text" class="form-control" id="descripcioEsdeveniment" name="descripcioEsdeveniment" placeholder="Descripcio" required/>
        </div>
		
		<div class="form-group">
        	<label for="title">Etiquetes esdeveniment</label>
            <input type="text" class="form-control" id="etiquetesEsdeveniment" name="etiquetesEsdeveniment" placeholder="Etiquetes" required/>
		
		<div class="form-group">
        	<label for="title">Participants esdeveniment</label>
            <input type="text" class="form-control" id="participantsEsdeveniment" name="Esdeveniment" placeholder="Participants" required/>
        </div>
		
		<div class="form-group">
        	<label for="title">Periodicitat esdeveniment</label>
            <input type="text" class="form-control" id="periodicitatEsdeveniment" name="periodicitatEsdeveniment" placeholder="Periodicitat" required/>
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@stop
