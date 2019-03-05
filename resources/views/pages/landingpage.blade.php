@extends('layouts.master')
@section('content')
<div class="col s12">
<h4>¿Quiénes somos?</h4>
<p class="flow-text">
    Objetos perdidos monterrey mejor conocida como "OPEMO" somos una empresa sin fines de lucro que se dedica a facilitar la recuperación de objetos perdidos 
    en Monterrey y su área metropolitana. ¿Cómo? Haciendo una comunidad donde cada usuario puede publicar el objeto encontrado por medio de una imagen o video.
</p>
</div>
<div class="col s12">
    <h4>Testimonios</h4>
</div>
<?php
    $testimonioTitulo = [
        '0' => 'Muy bueno',
        '1' => 'Lo recomiendo',
        '2' => 'Muchas gracias',
        '3' => 'De lo mejor',
        '4' => 'Gracias',
        '5' => 'Increíble'
    ];
    $testimonioDescripcion = [
        '0' => 'Gracias a OPEMO y a un joven caritativo pude recuperar mi cartera con las tarjetas de crédito intactas',
        '1' => 'Gracias a OPEMO y a un joven caritativo pude recuperar mi cartera con las tarjetas de crédito intactas',
        '2' => 'Gracias a OPEMO y a un joven caritativo pude recuperar mi cartera con las tarjetas de crédito intactas',
        '3' => 'Gracias a OPEMO y a un joven caritativo pude recuperar mi cartera con las tarjetas de crédito intactas',
        '4' => 'Gracias a OPEMO y a un joven caritativo pude recuperar mi cartera con las tarjetas de crédito intactas',
        '5' => 'Gracias a OPEMO y a un joven caritativo pude recuperar mi cartera con las tarjetas de crédito intactas'
    ];
?>
@for($i = 0; $i < sizeof($testimonioTitulo); $i++)
<div class="col l4 m6 s12">
    <div class="card card-testimonio">
        <div class="card-content">
            <span class="card-title">{{$testimonioTitulo[$i]}}</span>
            <p>
                {{$testimonioDescripcion[$i]}}
            </p>
        </div>
    </div>
</div>
@endfor




@stop