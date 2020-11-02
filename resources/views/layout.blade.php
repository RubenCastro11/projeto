<doctype  html>
<html>
    <header></header>
        <meta  charset = " utf-8 " />
        <title >@yield('Titulo') </title>
    </head>
    <body>
        <h1>@yield('Header')</h1>
        @yield ('Body')
        <div>
            <Br><br><br>
            <A href = "{{route('pagina.index')}}"> <botão> Pagina principal </botão > </a>
            <A href = "{{route('pagina.noticias')}}"> <button> Noticias </botão > </a>
            <A href = "{{route('pagina.empresa')}}"> <botão> Empresas </botão > </a>
            <A href = "{{route('pagina.estamos')}}"> <botão>  Estamos </botão > </a>
            <A href = "{{route('pagina.contactos')}}"> <button > Contactos </botão > </a>
        </div>
    </body>
</html>