@extends('layouts.principal')

@section('hijos')
<h1>Empleado : {{$empleado->nombre}} {{$empleado->apellido}}</h1>
<h1>Modulo de Depositos Afiliados: {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>

<a href="/deposito/create/{{$empleado->codeempleado}}/{{$afiliado->codafiliado}}" class="btn btn-primary">Realizar Depositos</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>codempleado</th>
            <th>codafiliado</th>
            <th>fecha</th>
            <th>monto</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <body>
       
            @foreach($depositos as $deposito)
            @if($deposito->codafiliado==$afiliado->id)
            <tr>
                <th>{{$deposito->id}}</th>
                <th>{{$deposito->codempleado}}</th>
                <th>{{$deposito->codafiliado}}</th>
                <th>{{$deposito->fecha}}</th>
                <th>{{$deposito->monto}}</th>
                <th>

                </th>
            </tr>
            @endif
        @endforeach
    </body>

</table>

@endsection