@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')

<h1>Alguma coisa aqui</h1>

<img src="/img/banner.jpg" alt="Imagem Banenr da apresentação">
    @foreach($events as $event)
        <p>{{$event->title}} ---- {{$event->description}}</p> 
    @endforeach
@endsection