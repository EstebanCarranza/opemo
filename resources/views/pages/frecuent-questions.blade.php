@extends('layouts.master')
@section('content')
<h1 class="d-flex">Preguntas frecuentes</h1>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Opemo cobra alguna subscripción al usuario?
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        No, opemo es una empresa sin fines de lucro y con éste sitio (opemo.herokuapp.com) no busca que el cliente compre algún tipo de subscripción por el servicio.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿Cómo puedo encontrar algo que perdí?
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Opemo solo muestra cosas perdidas que la comunidad encuentra, si la misma comunidad no publica dicha cosa no podrá ser visualizada en el sitio.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ¿Cómo recupero mis cosas?
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Para recuperar sus cosas se le dará la oportunidad al usuario registrado de reclamar el producto, 
        contestando preguntas que la persona en posesión del producto haya decidido,  
        confiamos con fé de que las personas no entregarán el producto a cualquier persona que reclame por él, 
        por la misma razón no cobramos ya que la persona que quiere realizar la acción de regresar debe 
        tener la actitud caritativa de querer regresar dicho producto.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
          ¿La persona en posesión del producto puede poner algún precio para la recuperación del producto?
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        No, en opemo no manejamos ninguna sección donde el usuario pueda capturar el precio por el producto
        si la persona quiere cobrar por algún producto no será responsabilidad de opemo.
      </div>
    </div>
  </div>
</div>
@stop