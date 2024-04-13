@extends('layouts.principal')

@section('hijos')

<h1>Eliminar Registro</h1>

<form action="/empleado/{{$eliminarRegistro2->id}}" method="POST">
    @csrf
    @method('Delete')
    <label for="">codeempleado</label>
    <input type="text" name="codeempleado"  id="codeempleado" value="{{$eliminarRegistro2->codeempleado}}">

    <label for="">Nombre</label>
    <input type="text" name="nombre"  id="nombre" value="{{$eliminarRegistro2->nombre}}">

    <label for="">Apellido</label>
    <input type="text" name="apellido"  id="apellido" value="{{$eliminarRegistro2->Apellido}}">
        <br><br>
    <label for="">Nivel</label>
    <input type="text" name="nivel"  id="nivel" value="{{$eliminarRegistro2->nivel}}">

    <label for="">Telefono</label>
    <input type="text" name="telefono"  id="telefono" value="{{$eliminarRegistro2->telefono}}">

    <button type="submit">Eliminar</button>
</form>



@endsection