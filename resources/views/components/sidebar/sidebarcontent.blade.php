<!-- Side Navigation -->
<div class="content-side content-side-full">
    <ul class="nav-main">
        @include('components.sidebar.parts.dashboard')
        {{--##############  @/ ###############--}}
        {{--############## /@  ###############--}}

        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-control-play"></i>
                <span class="nav-main-link-name">SECCION 1</span>
            </a>
            <ul class="nav-main-submenu">
                {{--############### @/ ###############--}}
                <li class="nav-main-heading">Indepnedientes</li>
                @include('components.sidebar.parts.independientesvehiculo')
                <li class="nav-main-heading">Vehiculos</li>
                @include('components.sidebar.parts.vehiculomodule')
                <li class="nav-main-heading">Documentos de Propiedad</li>
                @include('components.sidebar.parts.documentospropiedad')
                <li class="nav-main-heading">Iamgenes de Perfil</li>
                @include('components.sidebar.parts.imagenesperfil')
                <li class="nav-main-heading">Documentos Renovables Por Periodo</li>
                @include('components.sidebar.parts.gestionSoatBsisaInspeccionVehi')
                <li class="nav-main-heading">Seguros</li>
                @include('components.sidebar.parts.seguros')
                {{--############## /@ ###############--}}

            </ul>
        </li>

        {{--<li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-control-play"></i>
                <span class="nav-main-link-name">SECCION 2</span>
            </a>
            <ul class="nav-main-submenu">



            </ul>
        </li>--}}


    </ul>
</div>
<!-- END Side Navigation -->
