@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')

<div id="search-container" class="col-md-12">
    @if($search)
        <h1>Buscando por: <strong style="background-color:blue">{{ $search }}</strong></h1>
    @else
        <h1>Próximos Eventos</h1>
    @endif

    <h1>Busque um evento: </h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        <button type="submit" class="btn btn-primary" style="margin: 10px">Buscar</button>
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle" >Vejas os Eventos para os próximos dias:</p>
    <div id="card-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">{{date('d/m/y', strtotime($event->date))}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="/events/{{$event->id}}" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0)
            <p style="background-color: brown; color:antiquewhite; font-weight: bold">Não há eventos disponíveis !</p>
        @endif
    </div>
</div>

@endsection