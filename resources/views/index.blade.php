@extends ('layout')
@section ('Titulo')
Projeto
@endsection
@section ('Header')
Formulário por enviar
@endsection
@section ('Body')
<div>
<form  method = "post" action ="{{route('pagina.formulario')}}">
    @csrf
<label  for ="nome"> Nome </label>
<input  type ="text"  name = "nome">
<label  for ="idade"> Idade </label>
<input  type ="text"  name = "idade">
<br>
<label  for ="marcafavorita"> Marca Favorita </label>
<selecionar  nome = "marcafavorita">
    <option  value = "carhartt"> carhartt </option>
    <option  value = "dickies"> dickies </option >
    <option  value = "fred perry"> fred perry </option>
    <option  value = "element"> element </option>
    <option  value = "dcshoes"> dcshoes </option>
<Br> <br> <button type  = "submit"> submeter </button>
</form>
</div>
@endsection