@extends('layouts.home')
@section('title', 'Libros')
@section('content')


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 class="text-center">
                    LISTA DE LIBROS
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

            @if($libros->count())
            <div class="body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ISBN</th>
                            <th>EDITORIAL</th>
                            <th>TITULO</th>
                            <th>PORTADA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($libros as $libro)
                            <tr>
                                <th scope="row">
                                {{ $libro->id }}
                                </th>
                                <td>{{ $libro->isbn }}</td>
                                <td>{{ $libro->editoriales->nombre }}</td>
                                <td>{{ $libro->titulo }}</td>
                                <td><img src="/fotos/portadasLibros/{{ $libro->portada }}" alt="portada" class="imgs"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $libros->links() !!}

            </div>
        @else
        <p> No se han encontrado ningun Libro </p>
        @endif

        </div>
    </div>
</div>

@stop
