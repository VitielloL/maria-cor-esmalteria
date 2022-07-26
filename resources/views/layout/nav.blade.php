<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maria Cor Esmalteria</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{asset('plugins/fontawesome-free/css/all.min.css')}}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{asset('puglins/overlayScrollbars/css/OverlayScrollbars.min.css')}}>
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href={{asset('dist/css/adminlte.min.css')}}>
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble img-circle elevation-3" src={{asset("storage/logo.jpg")}} alt="Maria Cor Esmalteria" height="250" width="250">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a style="text-transform:uppercase; font-weight:bold;" href='{{route('cliente')}}' class="nav-link">{{auth()->user()->name}}</a>
      </li>
    </ul>

    <!-- Fullscreen -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu dropdown-menu-right">
                <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                    @csrf
                    <button type="submit" class="btn">
                        <i class="fas fa-arrow-left mr-2"></i> Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('cliente')}}" class="brand-link">
      <img src={{asset("storage/logo.jpg")}} alt="Maria Cor Esmalteria" class="brand-image img-circle elevation-3" style="opacity:1.8">
      <span class="brand-text font-weight-light"><i>Maria Cor Esmalteria</i></span>
    </a>

    <div class="sidebar">
        <div class="form-inline" style="margin-top: 5px;">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active" style="background-color: #D9A911">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Agenda
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item  menu-open">
                    <a href='' class="nav-link">
                      <i class="nav-icon fas fa-user-plus"></i>
                      <p>Add Cliente na Agenda</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href='{{route('cliente')}}' class="nav-link">
                      <i class="nav-icon fas fa-list-alt"></i>
                      <p>Agenda</p>
                    </a>
                  </li>
                </ul>
              </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active" style="background-color: #FFC052">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item  menu-open">
                <a href='' class="nav-link">
                  <i class="nav-icon fas fa-user-plus"></i>
                  <p>Novo Cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='{{route('cliente')}}' class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>Lista dos Clientes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item  menu-open">
            <a href="#" class="nav-link active" style="background-color: #C593E7">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Colaboradores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='' class="nav-link">
                  <i class="nav-icon fas fa-plus-square"></i>
                  <p>Novo Colaborador</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='' class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>Lista dos Colaboradores</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item  menu-open">
            <a href="#" class="nav-link active" style="background-color:#F39BEC ">
              <i class="nav-icon fas fa-highlighter"></i>
              <p>
                Materiais
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='' class="nav-link">
                  <i class="nav-icon fas fa-plus-square"></i>
                  <p>Novo Material</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='' class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>Lista dos Materiais</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item  menu-open">
            <a href="#" class="nav-link active" style="background-color: #D9A9BF">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Serviços
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='' class="nav-link">
                  <i class="nav-icon fas fa-plus-square"></i>
                  <p>Novo Serviço</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='' class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>Lista dos Serviços</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item  menu-open">
            <a href="#" class="nav-link active" style="background-color: #D9A98E">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Ordem de Serviço
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href='' class="nav-link">
                  <i class="nav-icon fas fa-plus-square"></i>
                  <p>Nova OS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='' class="nav-link">
                  <i class="nav-icon fas fa-list-alt"></i>
                  <p>Lista de OS</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        @yield('conteudo')
      </div>
    </section>
  </div>

<!-- jQuery -->
<script src={{asset('plugins/jquery/jquery.min.js')}}></script>
<!-- Bootstrap -->
<script src={{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{asset('dist/js/adminlte.js')}}></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src={{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}></script>
<script src={{asset('plugins/raphael/raphael.min.js')}}></script>
<script src={{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}></script>
<script src={{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}></script>

<!-- jQuery-mask -->
<script src={{asset('plugins/jquery-mask/jquery.mask.min.js')}}></script>

@yield('scripts')
</body>
</html>
