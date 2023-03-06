@extends('plantillas.principal')

@section('contenido')

<form action="{{route("procesar")}}" method="POST">
    @csrf
    QUÉ IDIOMA QUIERES USAR?
    <input type="text" name="idioma">
    <input type="submit" value="Enviar">
</form>

@endsection