@extends('layouts.principal')

@section('hijos')
<h1>Modulo de Empleado</h1>

<a href="empleado/create" class="btn btn-primary">Crear Nuevo Empleado</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodEmpleado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nivel</th>
            <th>Telefono</th>
            <th>Acciones</th>
            <th>Eliminar</th>
        </tr>
    </thead>

    <body>
       
            @foreach($empleados as $empleado)
            <tr>
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->codeempleado}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th>{{$empleado->nivel}}</th>
            <th>{{$empleado->telefono}}</th>
            <th>
                <a href = "/empleado/{{$empleado->id}}/edit"class="btn btn-info">Editar</a>
                <a href = "/afiliado/{{$empleado->id}}"class="btn btn-success">Afiliados</a>
                <!-- <a href = "/empleado/{{$empleado->id}}" class="btn btn-warning">Eliminar </a> -->
            </th>
            <th>
                <form action="/empleado/{{$empleado->id}}" method="POST">
                @csrf
                @method('Delete')
                <button type="submit">Eliminar</button>
                </form>
            </th>
            </tr>
        @endforeach
    </body>

</table>

@endsection