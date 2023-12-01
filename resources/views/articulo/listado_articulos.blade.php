@extends('adminlte::page')

@section('title', 'Articulos')

@section('content_header')
    <h1>Listado de Marcas</h1>
@stop

@section('content')


    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Referencia</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Color</th>
            <th scope="col">Precio Unitario</th>
            <th scope="col">Observacion</th>
            <th scope="col">Foto</th>
            <th scope="col">Marca</th>
            
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($art as $a)
            <tr>
            <th scope="row">{{$i}}</th>
                <td>{{$a->referencia}}</td>
                <td>{{$a->nombre}}</td>
                <td>{{$a->descripcion}}</td>
                <td>{{$a->color}}</td>
                <td>{{$a->precioUnitario}}</td>
                <td>{{$a->observacion}}</td>
                <td><img src="{{url("/imagenes/articulos/$a->foto")}}" height="50"></td>
                <td>{{$a->marca}}</td>

            @php
                $i =$i +1;
            @endphp
            </tr>
            @endforeach

        </tbody>
    </table>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
