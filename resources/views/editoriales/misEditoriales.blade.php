@extends('layouts.home')
@section('title', 'Editoriales')
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
                    LISTA DE EDITORIALES
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


            @if($editoriales->count())
            <div class="body table-responsive">
                
                <div id="alert" class="alert alert-warning" role="alert"></div>


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre del Editorial</th>
                            <th>Sede del Editorial</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($editoriales as $editorial)
                            <tr>
                                <th scope="row">
                                {{ $editorial->id }}
                                </th>
                                <td>{{ $editorial->nombre }}</td>
                                <td>{{ $editorial->sede }}</td>
                                <td>
                                    <ul class="flex">
                                        <li>
                                        <a href="{{ route('vistaeditar', $editorial->id) }}" title="Editar Editorial">
                                            <i class="material-icons">update</i>
                                        </a>
                                        </li>
                                        <li>
                                        <a href="{{ route('mostrarDet',$editorial->id) }}" title="Ver Detalles">
                                            <i class="material-icons">pageview</i>
                                        </a>
                                        </li>
                                        <li>
                                        <form action="{{ route('destroyEditorial',$editorial->id) }}" method="POST">
                                            {{ method_field('DELETE') }} 
                                            {{ csrf_field() }}  
                                            <a href="#" class="btn-delete" title="Eliminar Editorial">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </form>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $editoriales->links() !!}

            </div>
        @else
        <p> No se han encontrado Editorial </p>
        @endif

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

function ocultar(){
    setTimeout(function () {
     $("#alert").delay(5).fadeOut("slow");
    }, 5000);
}

$(document).ready(function(){
    $('#alert').hide();  
    $(".btn-delete").click(function(e){
        e.preventDefault();

        var row     = $(this).parents('tr');
        var form    = $(this).parents('form');
        var url     = form.attr('action');

        $('#alert').show();
        $.post(url, form.serialize(), function(result){
            row.fadeOut();  
            $('#empleados_total').html(result.resultotal);
            console.log(result.resultotal);
            $('#alert').html(result.message);
            ocultar(); 
        }).fail(function(){
            $('#alert').html("algo salió mal");
        });
    });
});
</script>
@endsection