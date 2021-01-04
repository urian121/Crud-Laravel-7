@extends('layouts.home')
@section('title', 'Nuevo Autor')
@section('content')


@if ( session('mensaje') )
    <div class="alert bg-green alert-dismissible" role="alert" id="msg">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        {{ session('mensaje') }}
    </div>
@endif


<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2 class="text-center">
                REGISTRAR NUEVO AUTOR..
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


<form  method="post" action="{{ route('dataAutor') }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <div class="body">
            <div class="row clearfix">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nombres" placeholder="Nombres" required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required="true"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="drag-drop">
                            <input type="file" name="foto_autor" id="foto_autor" required="true"/>
                            <span class="fa-stack fa-2x">
                                <i class="material-icons">cloud_upload</i>
                            </span>
                            <span class="desc">Foto del Autor</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-sm-12 text-center">
                    <button class="btn btn-danger btn-lg btn-block waves-effect" type="submit">Registrar Autor</button>
                </div>
            </div>

        </div>
    </form>

        </div>
    </div>
</div>

@stop


@section('funcionesajax')
<script type="text/javascript">
$(document).ready(function () {
    setTimeout(function () {
        $("#msg").fadeOut(1500);
    }, 3000);
});
</script>
@endsection

