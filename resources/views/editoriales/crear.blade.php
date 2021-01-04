@extends('layouts.home')
@section('title', 'Registrar Editorial')
@section('content')


<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2 class="text-center">
                REGISTRAR NUEVA EDITORIAL 
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



<form  method="post" action="{{ route('editorialData') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="body">
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la Editorial" required="true"/>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" name="sede" id="sede" placeholder="Sede" required="true"/>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-sm-12 text-center">
                <button class="btn btn-success waves-effect btn-lg btn-block waves-effect" type="submit">Guardar Editorial</button>
            </div>
        </div>

    </div>
</form>

        </div>
    </div>
</div>

@stop
