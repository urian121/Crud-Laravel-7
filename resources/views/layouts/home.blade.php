<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Prueba - viajemo.com @yield('title')</title>

    <!-- Favicon-->
    <link rel="icon" href="{{ asset('images/favicon.jpg') }}" type="image/x-icon">
    @include('layouts.css')

    <style type="text/css" media="screen">
        .material-icons:hover{
            cursor: pointer;
            color: #F44336;
        }
    </style>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Por Favor espere...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->


    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

        <!-- Menu Horizontal -->
        @include('layouts.menuHorizontal')
        <!-- Fin del Menu Horizontal -->
        <section>


        <!-- Menu -->
        @include('layouts.menuVertical')
        <!--Fin del Menu-->
    </section>



        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->

    <section class="content">
        <div class="container-fluid">

            @yield('content')




        </div>
    </section>


  @include('layouts.js')

  @yield('scriptspaginacion')  <!--esto significa que puedo llamar esta seccion de script en una pagina en particuar y no en todas---->


@yield('funcionesajax')
</body>

</html>
