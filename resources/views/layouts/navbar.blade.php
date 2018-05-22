<?php session_start() ?>
<nav id="navbarTop" class="navbar navbar-default navbar-static-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" role="navigation"/>
          <!-- Posat per millorar l'accesibilitat de la pàgina -->
          <span class="sr-only">Barra de navegació princial</span>
          <i class="fas fa-bars"></i>
      </button>

      <a class="navbar-brand" href="#">Logo</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Events <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-plus"></i>Create event</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-sign-out"></i>My events</a></li>
              <li><a href="#"><i class="fa fa-sign-out"></i>Confirmed events</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Groups <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-plus"></i>Create group</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-sign-out"></i>My Groups</a></li>
          </ul>
        </li>
        <li>
          <form class="navbar-form" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Look for anything">
            </div>
            <button type="submit" class="btn btn-default">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </button>
          </form>
        </li>

        @if(isset($_SESSION['idUsuari']))
        <li class="dropdown">
          <a id="profile-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="http://placehold.it/45x45" alt="Profile picture"
                class="img-circle special-img">
                Username
                <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-cog"></i>Account</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-sign-out"></i>Sign-out</a></li>
          </ul>
        </li>
        @else
        <li style="padding-right:0.5em">
            <button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modalLogin">
                Accedir
            </button>
        </li>

        @endif
      </ul>
    </div>
  </div>
</nav>

@if(!(isset($_SESSION['idUsuari'])))
    @include('modals.mLogin')
@endif
<!--
<div id="mySidenav" class="sidenav">
    <a href="{{url('/abrirCarpeta/personal')}}">Personal</a>
    <a href="{{url('/CU_42_GestionarUsuaris')}}">Gestionar Usuaris</a>
    <a href="{{url('/CU_36_GestionarGrups')}}">Gestionar Grups</a>
    <a href="{{url('/mostar_workflows')}}">Workflows</a>
    <a href="{{url('/consultarLogs')}}">Consultar Logs</a>
    <a href="#">Notificacions</a>
    <a href="#">Contact</a>
</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script> -->
