@extends('layouts.master')
@section('content')
 <div class="card-columns">
    @for($i=0;$i<15;$i++)
        <div class="card">
            <a href="/publication">
                <img src="img/catbox.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <h5 class="card-title">@yield('card-title')</h5>
                <p class="card-text">@yield('card-description')</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">@yield('card-time-ago')</small>
            </div>
        </div>
    @endfor
</div>
@stop