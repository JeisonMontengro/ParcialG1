@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
    <h1>Listado de Marcas</h1>
@stop

@section('content')


    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">ID MARCA</th>
            <th scope="col">DESCRIPCION</th>
            
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($marc as $m)
            <tr>
            <th scope="row">{{$i}}</th>
                <td>{{$m->idMarca}}</td>
                <td>{{$m->descripcion}}</td>

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
