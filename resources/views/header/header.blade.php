<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Caisse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

   {{--  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/f/f8/Logo_M%C3%A9diaspaul.png"> --}}

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
    <link href="{{asset('assets/plugins/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/fixedHeader.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('assets/plugins/datatables/scroller.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">



    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS v5.2.1 -->

</head>

<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="index.html" class="logo text-primary m-2 p-1 d-flex align-items-end">
                            {{-- <img src="assets/images/logo-light.png" class="logo-lg" alt="" height="26">
                            <img src="assets/images/logo-sm.png" class="logo-sm" alt="" height="28"> --}}

                            <h2> NRMONDE.</h2>
                        </a>
                    </div>
                    <!-- End Logo-->

                    <div class="menu-extras topbar-custom navbar p-0">

                        <ul class="mb-0 nav navbar-right ml-auto list-inline">


                            <li class="list-inline-item notification-list d-none d-sm-inline-block">
                                <a href="#" id="btn-fullscreen"
                                    class="waves-effect waves-light notification-icon-box"><i
                                        class="fas fa-expand"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-img"
                                        class="rounded-circle">
                                    <span class="profile-username">
                                        {{Auth::user()->email}} <span class="mdi mdi-chevron-down font-15"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">

                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <a href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();" class="dropdown-item">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>

                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom bg-dark">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="{{route('dashboard')}}"><i class="ti-home"></i> Tableau de bord</a>
                            </li>
                             <li class="has-submenu">
                                <a href="{{-- {{ route('') }} --}}"><i class="ti-panel"></i> Affectations</a>
                            </li>
                            <li class="has-submenu">
                                <a href="{{-- {{route('operation.rapport')}} --}}"><i class="ti-briefcase"></i> Rapports </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-files"></i> Agents </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="{{route('agent.create')}}">Ajouter un agent</a></li>
                                            <li><a href="{{route('agent.index')}}">Listes agents</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li class="has-submenu">
                                <a href="#"><i class="ti-settings"></i> Confirugations <i
                                        class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                           {{--  <li><a href="{{ route('centre.index') }}">Centre D'intérêt</a></li> --}}
                                            <li><a href="{{ route('adresse.index') }}">Adresses</a></li>
                                            <li><a href="{{-- {{ route('compte.index') }} --}}">Catégories</a></li>
                                            <li><a href="{{-- {{ route('compte.index') }} --}}">Structures</a></li>
                                            <li><a href="{{-- {{ route('compte.index') }} --}}">Fonctions</a></li>
                                            <li><a href="{{-- {{ route('compte.index') }} --}}">Formations</a></li>

                                            <li><a href="/Taux">Taux</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->
