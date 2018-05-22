@extends('layouts.masterLayout')

@section('content')
<link href="{{ asset('css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('js/moment.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    moment().format();
</script>

        <form id="sign_up_form" class="form" method="POST" action="/registrarse">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" requirTMP="False"/>
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" requirTMP="False"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" requirTMP="False"/>
            </div>
            <div class="form-group">
                <label for="email2">Confirm email</label>
                <input type="email" class="form-control" id="email2" name="email2" placeholder="Confirm email" requirTMP="False"/>
            </div>
            <div >
                <!-- class="col-sm-6" -->
                <div class="form-group">
                    <label for="name">Birthdate</label>
                    <div class='input-group date'>
                        <input match="[]" type='text' class="form-control" id='birthdatePicker' name="birthdatePicker" requirTMP="False"/>
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
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" requirTMP="False" />
            </div>
            <div class="form-group">
                <label for="password2">Confirm password</label>
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password" requirTMP="False"/>
            </div>
            <!-- TODO: CHANGE DDBB -->
            <div class="form-group">
                <label for="email">Gender</label>
                <div class="row" style="padding-left:1.45em">
                      <label class="radio-inline">
                        <input type="radio" name="gender" id="radioMale" value="Male" requirTMP="False">
                        Male
                      </label>
                    <!-- <div class="col-md-1"> -->
                      <label class="radio-inline">
                        <input type="radio" name="gender" id="radioFemale" value="Female">
                        Female
                      </label>
                    <!-- </div> -->
                    <!-- <div class="col-md-1"> -->
                      <label class="radio-inline">
                        <input type="radio" name="gender" id="radioOther" value="Other">
                        Other
                      </label>
                    <!-- </div> -->
                </div>
            </div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LcBUFoUAAAAAGe1CZSlBrU8YOP3iwks_lng6BGx"></div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@stop
