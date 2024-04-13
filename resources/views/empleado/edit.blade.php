@extends('layouts.principal')

@section('hijos')

<h1> Editar Empleado </h1>


<form action="/empleado/{{$editarRegistro->id}}" method="POST">
    @csrf
    @method('PUT')

    <label for="">codeempleado</label>
    <input type="text" name="codeempleado" id="codeempleado" value="{{$editarRegistro->codeempleado}}">

    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$editarRegistro->nombre}}">

    <lable for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$editarRegistro->apellido}}">
    <br> <br>

    <lable for="">Nivel</label>
    <input type="text" name="nivel" id="nivel" value="{{$editarRegistro->nivel}}">

    <lable for="">Correo</label>
    <input type="text" name="telefono" id="telefono" value="{{$editarRegistro->telefono}}">


    <button type="submit">Guardar</button>

</form>



@endsection