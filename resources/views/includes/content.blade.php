    <main>
        <div class="biblio-mini">

            <div class="mini-contenedor-img">
                <img src="@yield('imgArtista')" alt="Imagen artista">
            </div>

            <div class="text">
                <span class="titulo">
                    <h2>@yield('artista')</h2>
                </span>

                @yield('contenido')
        
            </div>
        </div>

        <div class="subtitulo">
            <h2>Algunas de sus obras</h2>
        </div>

        <div class="contenedor">

            <img src="@yield('imagen1')" alt="Retrato 1">
            <img src="@yield('imagen2')" alt="Retrato 2">
            <img src="@yield('imagen3')" alt="Retrato 3">
            <img src="@yield('imagen4')" alt="Retrato 4">
            <img src="@yield('imagen5')" alt="Retrato 5">
        </div>
    </main>
