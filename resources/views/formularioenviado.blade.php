@extends ('layout')
@section ('Titulo')
Projeto 
@endsection
@section ('Header')
Formulario submetido
@endsection
@section ('Body')
<div  style = " text-align : center ">
Nome: {{$Nome}}<br>
Idade: {{$Idade}}<br>
Marca Favorita:{{$marcafavorita}}<br>
</div>
@endsection
