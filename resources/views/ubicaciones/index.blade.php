@extends('layouts.cards')
<?php
    $cardList = [
        [
        'pathImage' => 'https://media-cdn.tripadvisor.com/media/photo-s/0a/59/55/d1/calle-morelos-de-frente.jpg',
            'title' =>  'Morelos',
            'description' => 'Centro de Monterrey',
            'time-ago' => '1 min ago',
            'ubication' => 'Monterrey, N.L., México'
        ],
        [
            'pathImage' => 'https://media-cdn.tripadvisor.com/media/photo-s/01/3a/c7/b7/paseo-de-santa-lucia.jpg',
            'title' =>  'Santa Lucía',
            'description' => 'Centro de Monterrey',
            'time-ago' => '2 min ago',
            'ubication' => 'Monterrey, N.L., México'
        ],
        [
            'pathImage' => 'https://media-cdn.tripadvisor.com/media/photo-s/0a/57/91/8f/estatua.jpg',
            'title' =>  'Parque hundido',
            'description' => 'Centro de Monterrey',
            'time-ago' => '3 min ago',
            'ubication' => 'Monterrey, N.L., México'
        ],
        [
            'pathImage' => 'https://vignette.wikia.nocookie.net/monterrey/images/b/b3/Fuente_de_la_Vida.jpg/revision/latest?cb=20060219000958',
            'title' =>  'Fuente de la Vida',
            'description' => 'Centro de Monterrey',
            'time-ago' => '4 min ago',
            'ubication' => 'Monterrey, N.L., México'
        ],
        
    ];
?>
@section('title', 'Ubicaciones')
@section('body')
    @for($i=0;$i<count($cardList);$i++)
    
        <div class='col l4 m6 s12 animated-card card-row-custom-size'>
            <div class='card small hoverable card-custom-size'>
                <div class='card-image waves-effect waves-block waves-light'>
                    <img class='activator' src={{$cardList[$i]['pathImage']}}>
                </div>
                <div class='card-content'>
                    <span class='card-title activator grey-text text-darken-4'>{{$cardList[$i]['title']}}<i class='material-icons right'>more_vert</i></span>
                    <p><a href='/dashboard'>Abrir ubicación</a></p>
                    <div class="card-footer">
                        <small class="text-muted truncate">
                            {{$cardList[$i]['time-ago']}}&nbsp;
                            {{$cardList[$i]['ubication']}}
                        </small>
                    </div>
                </div>
                <div class='card-reveal'>
                    <span class='card-title grey-text text-darken-4'>{{$cardList[$i]['title']}}<i class='material-icons right'>close</i></span>
                    <p>
                        {{$cardList[$i]['description']}}
                    </p> 
                    <div class="card-footer">
                        <small class="text-muted truncate">
                            {{$cardList[$i]['time-ago']}}&nbsp;
                            {{$cardList[$i]['ubication']}}
                        </small>
                    </div> 
                </div>
            </div>
        </div>
    @endfor
@stop
@section('pagination')
    @include('inc.pagination')
@stop


