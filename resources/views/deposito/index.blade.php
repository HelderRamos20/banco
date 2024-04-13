@extends('layouts.principal')

@section('hijos')

<h1>Modulo de Retiros Afiliados: {{$afiliado}}</h1>


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
            @if($deposito->codafiliado==$afiliado)
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