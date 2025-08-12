@extends('layouts/cuerpo')

@section('title','Confirmación|Playcity')

@section('contenido')

<main>
 <div class="cuadrodetexto">

 <h2>{{$msg}}</h2>

 <h3><a href="{{ url('Vendedores/show') }}">Regresar</a></h3>

 </div>

</main>
@endsection
