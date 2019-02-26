@extends('layouts.master')

@section('content')

<h1> Preguntas frecuentes </h1>
<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
      ¿Opemo cobra alguna subscripción al usuario?
    <div class="collapsible-body"><p>
      No, opemo es una empresa sin fines de lucro y con éste sitio (opemo.herokuapp.com) no busca que el cliente compre algún tipo de subscripción por el servicio.
    </p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
       ¿Cómo puedo encontrar algo que perdí?
    <div class="collapsible-body"><p>
      Opemo solo muestra cosas perdidas que la comunidad encuentra, si la misma comunidad no publica dicha cosa no podrá ser visualizada en el sitio.
    </p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
       ¿Cómo recupero mis cosas?
    <div class="collapsible-body"><p>
       Para recuperar sus cosas se le dará la oportunidad al usuario registrado de reclamar el producto, 
        contestando preguntas que la persona en posesión del producto haya decidido,  
        confiamos con fé de que las personas no entregarán el producto a cualquier persona que reclame por él, 
        por la misma razón no cobramos ya que la persona que quiere realizar la acción de regresar debe 
        tener la actitud caritativa de querer regresar dicho producto.
    </p></div>
  </li>
<li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
       ¿La persona en posesión del producto puede poner algún precio para la recuperación del producto?
    <div class="collapsible-body"><p>
       No, en opemo no manejamos ninguna sección donde el usuario pueda capturar el precio por el producto
        si la persona quiere cobrar por algún producto no será responsabilidad de opemo.
    </p></div>
  </li>
</ul>

@stop
