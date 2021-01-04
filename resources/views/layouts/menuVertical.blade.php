 <aside id="leftsidebar" class="sidebar">

<div class="user-info">
<div class="image">
    <img src="{{ asset('images/user.png') }}" width="48" height="48" alt="User" />
</div>
<div class="info-container">
    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Urian Viera</div>
</div>
</div>



<div class="menu">
    <ul class="list">
        <li class="active">
            <a href="{{ route('home') }}">
                <i class="material-icons">home</i>
                <span>Inicio</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>Autores</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{ route('autoradd') }}">Registrar Autor</a>
                </li>
                <li>
                    <a href="{{ route('listAutores') }}">Lista de Autores</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">view_list</i>
                <span>Editoriales</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{ route('crearEditorial') }}">Registrar Editorial</a>
                </li>
                <li>
                    <a href="{{ route('Editoriales') }}">Lista de Editoriales</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">assignment</i>
                <span>Libros</span>
            </a>
            <ul class="ml-menu">
                <li>
                    <a href="{{ route('crearLibro') }}">Registrar Libro</a>
                </li>
                <li>
                    <a href="{{ route('listLibros') }}">Lista de Libros</a>
                </li>
            </ul>
        </li>
    </ul>
</div>


<div class="legal">
    <div class="copyright">
        &copy; <a href="javascript:void(0);">Web-Developer Urian V.</a>
    </div>
</div>

</aside>
