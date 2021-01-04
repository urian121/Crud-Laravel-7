@extends('layouts.home')
@section('title', 'Detalles Editorial')
@section('content')


<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2 class="text-center">
                <a href="javascript:history.back()">
                    <i class="material-icons">reply</i>
                </a>
                DETALLES DE LA EDITORIAL
            </h2>

            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);">Acción</a></li>
                        <li><a href="javascript:void(0);">Borrar</a></li>
                        <li><a href="javascript:void(0);">Editar</a></li>
                    </ul>
                </li>
            </ul>
        </div>


        <div class="body">
            <div class="row clearfix">
                <div class="col-sm-4">
                    <div class="form-group">
                    <span> Nombre de la Editorial </span>
                    <br></br>
                    <strong> {{ $editorial->nombre }} </strong>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                    <span>Sede</span>
                    <br></br>
                    {{ $editorial->sede }}
                    </div>
                </div>
            </div>

        </div>
        </div>

    </div>
</div>

@stop
