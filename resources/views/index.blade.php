@extends('layouts.main')

@section('title', 'Notícias Hoje')

@section('content')


<div class="container mt-5">
    <div id="search-container" class="col-md-12">
        <h1 class="text-center text-white">Buscar notícia</h1>
        <form action="/" method="GET">
            <div class="row mb-5">
                <div class="col-md-8">
                    <input type="text" id="search" name="search" class="form-control d-block mx-auto" placeholder="procurar">
                </div>
                <div class="col-md-4">
                    <input type="submit" value="Procurar" class="btn btn-primary">

                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">

    <div class="row-12 my-5">
        <h1 class="display-1 text-center" id="central-text">Newsletter today</h1>
    </div>
</div>

<div class="row">
@foreach($todasNoticias as $notice)
    <div class="col-md-4">
        <div class="row no-gutters bg-light position-relative my-2">
            <div class="col-md-6 mb-md-0 p-md-4">
                <img src="/images/18.jpg" class="w-100" alt="...">
            </div>
            <div class="col-md-6 position-static p-4 pl-md-0">
                <h3 class="mt-0">{{ $notice['nome_materia'] }}</h3>
                <p>{{ $notice['descricao'] }}</p>
                <hr>
                <h5>
                {{ $notice['nome_reporter'] }}
                </h5>
                <p>
                  <span class="badge badge-dark">{{ date('d/m/Y', strtotime($notice['data_materia'])) }}</span>
                </p>
              
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
    </div>
@endforeach
</div>






@endsection