@extends('layouts.main')

@section('title', 'Produto')

@section('content')

<p>Produto id: {{ $id }}</p>

@if($id != null)
<p>Exibindo produto id: {{$id}}</p>
@endif
@endsection