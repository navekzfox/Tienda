@extends($layout)
@section('title','Cuenta Vendedor')
@section('contenido')



    @if($vendedor)

    <div class="cuentavendor">
        <h3>Bienvenido, {{ $vendedor->Nombre ?? 'Invitado' }}</h3>
                <p style="display: none;"><strong>ID:</strong> {{ $vendedor->id }}</p>
                <p><strong>Nombre:</strong> {{ $vendedor->Nombre }}</p>
                <p><strong>Apellido:</strong> {{ $vendedor->Apellido}}</p>
    </div>
    @else
        <div class="Alerta-de-advertencia">No estás autentificado.</div>

        <div class="cuadrodetexto"><a href="{{ url('/') }}">Regresar</a></div>
    @endif

@endsection
