@extends ('layout')
@section ('Titulo')
Projeto
@endsection
@section ('Header')
paginas
@endsection
@section ('Body')
@foreach ($paginas  as  $nom)
    <div>
    <P> <a  href = " {{ $nom } } "  alvo = " _blank " > <h3> {{$nom} } </h3 > </a> </p>
    </div>
@endforeach
@endsection
