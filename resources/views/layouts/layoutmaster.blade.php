<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title')</title>

    <meta name="description"
          content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->
    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">
    <style>
        .titulo-master {
            color: #1f6fb2;
        }
    </style>
    {{--####################### ESTILOS PARA LLENAR ###############################--}}
    @yield('styles')
</head>
<body>
<div class="titulo-master">ALGUNO DE LOS CODIGOS COMO ESTO ESTARÁN EN TODO LADO (MASTER)</div>
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
    {{--TRES RAYITAS  DE LA CABECERA ->  ESTA A LA ESQUINA DERECHA PUNTA--}}
    @component('componentes.1SideOverlay(lineasderarriba)')
        @include('componentes.1_A_SideHeader')
        @include('componentes.1_B_SideContent')
        HOLA MUNDO
    @endcomponent
    {{--SIDE BAR PARA LAS OPCIONES DE PAGINAS--}}
    @include('componentes.2Sidebar(btnizqopcionspags)')
    {{--CABECERA -> ESTA SEARCH, NAME USER, LOGOUT--}}
    @include('componentes.3Header(search,nameusermoreperfil,logout)')
    <!-- Main Container -->
    <main id="main-container">
        {{--Hero Cuadro de bienvenida para administrador dashboard--}}
        @include('componentes.4_A_Hero(cuadradobienvenidaadmin)')
        <!-- Page Content -->
        <div class="content content-narrow">
{{--            --}}{{--tablas, ordenes registradas--}}{{--
            @include('componentes.4_B_3_TablasOrdenes')
            --}}{{--Stats, Cuatro tarjetas informacion resumida--}}{{--
            @include('componentes.4_B_1_Stats(cuatrotarjetasinforesumen)')
            --}}{{--charts, informacin resumida--}}{{--
            @include('componentes.4_B_2_DashboardCharts(graficosinforesumen)')--}}
            @yield('content')
            @yield('scripts')
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
    {{--footer--}}
    @include('componentes.5Footer')
    @yield('footer')
    {{--Apps Modal--}}
    @include('componentes.6AppModal(ventanafoltante)')
</div>
<!-- END Page Container -->
<script src="assets/js/oneui.core.min.js"></script>
<script src="assets/js/oneui.app.min.js"></script>
<!-- Page JS Plugins -->
<script src="assets/js/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Page JS Code -->
<script src="assets/js/pages/be_pages_dashboard.min.js"></script>
</body>
</html>
