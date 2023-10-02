@extends('layouts.main')
@section('title', 'Produtos')

@section('content')
    <h1>Essa é a página Produtos</h1>

    @if($busca != '')
        <p>O usuário está procurando <b><?php echo ucwords($busca);?><b></p>
    @endif

    <a href="/">Voltar para a home "/" do projeto.</a> 
@endsection