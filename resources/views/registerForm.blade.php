@extends('layouts.masterLayout')

@section('content')
<script src="{{ asset('js/moment.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
<script>
    moment().format();
</script>

<div>
    <form id="sign_up_form" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
        </div>
        <div class="form-group">
            <label for="email2">Confirm email</label>
            <input type="email" class="form-control" id="email2" name="email2" placeholder="Confirm email" />
        </div>
        <div class="form-group">
            <label for="name">Birthdate</label>
            <div class='input-group date' id='birthdatePicker'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#birthdatePicker').datetimepicker();
                });
            </script>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
        </div>
        <div class="form-group">
            <label for="password2">Confirm password</label>
            <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password" />
        </div>
        <!-- TODO: CHANGE DDBB -->
        <div class="form-group">
            <label for="email">Gender</label>
            <div class="radio">
              <label>
                <input type="radio" name="gender" id="radioMale" value="Male" checked>
                Male
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="gender" id="radioFemale" value="Female">
                Female
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="gender" id="radioOther" value="Other">
                Other
              </label>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
        </div>
    </form>


</div>
@stop
