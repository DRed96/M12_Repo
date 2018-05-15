<nav class="navbar navbar-default navbar-static-top navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" role="navigation"/>
        <!-- Posat per millorar l'accesibilitat de la pàgina -->
        <span class="sr-only">Barra de navegació princial</span>
      </button>
      <a class="navbar-brand" href="#">( >^w^)><(^-^<)</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

          <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown">
          <img src="{{url('index.jpg')}}"
                 class="profile-image img-profile img-circle">
          </a>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown">
              <img src="http://placehold.it/30x30" alt="Profile picture"
                class="img-circle special-img"> Username <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-cog"></i>Account</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-sign-out"></i>Sign-out</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar esdeveniment">
        </div>
        <button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>
      </form>
    </div>
  </div>
</nav>
<!-- <div id="mySidenav" class="sidenav">
    <a href="{{url('/abrirCarpeta/personal')}}">Personal</a>
    <a href="{{url('/CU_42_GestionarUsuaris')}}">Gestionar Usuaris</a>
    <a href="{{url('/CU_36_GestionarGrups')}}">Gestionar Grups</a>
    <a href="{{url('/mostar_workflows')}}">Workflows</a>
    <a href="{{url('/consultarLogs')}}">Consultar Logs</a>
    <a href="#">Notificacions</a>
    <a href="#">Contact</a>
</div>  -->

<!-- <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script> -->
