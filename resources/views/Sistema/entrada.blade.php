@extends('plantillas.principal')
@section('contenido')

<form action="validar" method="post">
    @csrf
    <label for='elemento'>Usuario</label>
    <input type='text' name='usuario'><br>
    <label for='elemento'>Password</label>
    <input type='text' name='password'><br>
    <input type='submit'>
</form>

@endsection