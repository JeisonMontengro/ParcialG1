@extends('adminlte::page')

@section('title', 'Descripcion')

@section('content_header')
    <center><h1>Tienda Mi Closet Sport</h1></center>
@stop

@section('content')
    <p>Estamos ubicados en la ciudad de Ipiales en el parque 20 de julio 
        Contamos con una gran variedad en prendas 
        deportivas como Calzado, Ropa y Accesorios entre otros, ademas tenemos la mejor atencion para que tengas la mejor experiencia<p>
<center>
<div class="card" style="width: 18rem;">
  <img src="{{url("/imagenes/tienda/tienda.jpg")}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Horarios de Atencion <br> Lunes a Viernes: 7 am a 7 pm <br> Sabados: 7 am a 6 pm <br> Domingos: 8 am a 2 pm</p>
  </div>
</center>
<br>
<center><h1>Visitanos y Danos el Gusto de Atenderte</h1></center>


</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop