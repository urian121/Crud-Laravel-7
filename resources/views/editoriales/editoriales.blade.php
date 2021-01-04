@extends('layouts.home')
@section('title', 'Autores')
@section('content')


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2 class="text-center">
                    LISTA DE AUTORES
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

            @if($autores->count())
            <div class="body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($autores as $autore)
                            <tr>
                                <th scope="row">
                                {{ $autore->id }}
                                </th>
                                <td>{{ $autore->nombres }}</td>
                                <td>{{ $autore->apellidos }}</td>
                                <td>{{ $autore->foto_autor }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {!! $autores->links() !!}

            </div>
        @else
        <p> No se han encontrado Autor </p>
        @endif

        </div>
    </div>
</div>

@stop
