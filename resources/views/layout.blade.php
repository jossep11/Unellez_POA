<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
    
   
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    

    <script src="{{asset ('js/plugin/webfont/webfont.min.js')}}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ["{{asset ('css/app.css')}}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    @yield('css')
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset ('css/atlantis.min.css') }}">
    <link rel="stylesheet" href="{{asset ('css/atlantis.css') }}">
    <link rel="stylesheet" href="{{asset ('css/styles.css') }}">
   

    <title>Test1 </title>
</head>

<body>
    <div class="wrapper">

        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="index.html" class="logo">
                    <img src="{{asset('img/logo.svg')}}" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>

                <button class="topbar-toggler more"><i class="fas fa-ellipsis-v"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                 
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    
                
                 
                 
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>Hizrian</h4>
                                                <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">My Balance</a>
                                        <a class="dropdown-item" href="#">Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <div class="sidebar sidebar-style-2" data-background-color="dark2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Hizrian
                                    {{--The next line show the user's name conected--}}
                                    {{-- <span class="user-level">{{$user = auth()->user()->name}}</span>--}}
                                <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a class="text-align-center" href="" >
                                <i class="fas fa-home"></i>
                            <p class="ProcesoAnalitico">Proceso Analitico <br> Organizacional</p>
                            </a>
                       
                        </li>

                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>


                        {{-- @role('S_Admin|viewer') --}}
                                                  
                    <li class="nav-item ">
                        <a href="/debilidades">
                            <i class="fas fa-minus-circle"></i>
                            <p>Debilidades</p>
                            <span class="caret"></span>
                        </a>

                    </li>

             
                    <li class="nav-item">
                        <a href="/oportunidades">
                            <i class="fas fa-magic"></i>
                            <p>Oportunidades</p>
                            <span class="caret"></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/fortaleza">
                            <i class="fas fa-dumbbell"></i>
                            <p>Fortalezas</p>
                            <span class="caret"></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/amenazas">
                            <i class="fas fa-exclamation-triangle"></i>
                            <p>Amenazas</p>
                            <span class="caret"></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#sidebarLayouts">
                            <i class="fas fa-envelope"></i>
                            <p>Bandeja de entrada</p>
                            <span class="caret"></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/matrizdafo">
                            <i class="far fa-chart-bar"></i>
                            <p>MatrizDAFO</p>
                            <span class="caret"></span>
                        </a>
                    </li>


                        {{-- @endrole --}}

          

                    </ul>
                </div>
            </div>
        </div>
        <div class="main-panel">


            <div class="content">
                @yield('contenido')


            </div>
        </div>

    </div>

    <!--   Core JS Files   -->

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   --}} 
   
    <script src="{{asset('js/core/popper.min.js')}}"></script>
    <script src="{{asset('js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{asset('js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    {{-- <script src="{{asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script> --}}

    <!-- Chart Circle -->
    <script src="{{asset('js/plugin/chart-circle/circles.min.js')}}"></script>


    <!-- Datatables -->
    <script src="{{asset('js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

   
    <!-- Sweet Alert -->
    <script src="{{asset('js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Atlantis JS -->
    <script src="{{asset('js/atlantis.js')}}"></script>

    <script src="{{asset('js/IdentificadorIndex.js')}}"></script>    
    
    <script src="{{asset('js/validation.js')}}"></script>   
    <script src="{{asset('js/Jp.js')}}"></script>   


</body>

</html>