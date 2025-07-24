@extends('layouts/cuerpo')

@section('title','Mensaje editar datos|Playcity')

@section('contenido')

<main>
 <div class="cuadrodetexto">

 <h2>{{$msg}}</h2>

 <h3><a href="{{ url('/Cuentapersonal') }}">Regresar</a></h3>

 </div>

</main>

@endsection
