@extends('layouts.app')

@section('style1')
    <!-- Agrega el enlace de la hoja de estilo aquí, si es necesario -->
    <!-- Por ejemplo: {{ asset('css/imagen.css') }} -->
@endsection

@section('content')
    <div class="container text-dark">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="font-weight-bold h4 mb-4">
                    Restaurante de comida japonesa,
                    en ambas sucursales disfrutarás de un agradable ambiente
                    familiar con excelentes espacios, decoración y música ambiental.
                </p>
                <p class="font-weight-bold h4 mb-4">
                    Muy funcional para comida de negocios, tarde de amig@s, festejos especiales entre otros.
                </p>
                <p class="font-weight-bold h4">
                    En Vengache Pa'ca, ofrecemos una alta calidad en los alimentos, 
                    excelente servicio y una amplia variedad de productos en nuestro menú.                
                </p>
            </div>
        </div>
    </div>
@endsection
