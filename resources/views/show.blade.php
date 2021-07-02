@extends('layouts.main')

@section('title', 'Notícias Hoje')

@section('content')

<div class="row">


<div class="container-fluid mt-4">
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <img src="/images/16.jpg" alt="">
            <div class="card-body">
                <p class="card-date">{{ $noticias->data_materia }}</p>
                <h5 class="card-title">{{ $noticias->nome_materia }}</h5>
                <p class="card-reporter">{{ $noticias->nome_reporter }}</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    </div>
</div>

</div>



@endsection