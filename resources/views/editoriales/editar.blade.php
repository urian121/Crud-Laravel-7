@extends('layouts.home')
@section('title', 'Editando Editorial')
@section('content')


<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2 class="text-center">
                <a href="javascript:history.back()">
                    <i class="material-icons">reply</i>
                </a>

                MODIFICAR DATOS DEL EDITORIAL
            </h2>

            <div id="alert" class="alert alert-warning" role="alert"></div>


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

    <form method="POST" action="{{ route('updateEdit', $editorial->id) }}">
    @method('PUT')
    @csrf
        <div class="body">
            <div class="row clearfix">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nombre" value="{{ $editorial->nombre}}" placeholder="Nombre" required="true"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="sede" value="{{ $editorial->sede}}" placeholder="Sede" required="true"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn bg-teal waves-effect btn-lg btn-block waves-effect btn-enviar">
                        <i class="material-icons">forum</i>
                        <span>Actualizar Información</span>
                    </button>
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
function ocultar(){
    setTimeout(function () {
     $("#alert").delay(5).fadeOut("slow");
    }, 5000);
}

$(document).ready(function(){
    $('#alert').hide();  //AL CARGA LA PAGINA OCULTA EL ALERTA
    $(".btn-enviar").click(function(e){
        e.preventDefault();

        var form    = $(this).parents('form');
        var url     = form.attr('action');

        $('#alert').show();
        $.post(url, form.serialize(), function(result){
            $('#alert').html(result.message);
            ocultar(); // hacer desaparecer el mensaje
        }).fail(function(){
            $('#alert').html("algo salió mal");
        });
    });
});
</script>
@endsection

