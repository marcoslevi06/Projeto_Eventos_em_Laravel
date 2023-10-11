@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento: </h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label style="font-weight: bold" for="image">Imagem do Evento</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>


        <div class="form-group">
            <label style="font-weight: bold" for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do seu evento">
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade onde será realizado">
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="title">O evento é privado?</label>
            <select type="text" class="form-control" id="private" name="private" placeholder="Nome do seu evento">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label style="font-weight: bold" for="title">Descrição:</label>
            <textarea class="form-control" id="description" name="description" placeholder="Descreva como se dará o evento"></textarea>
        </div>
        <input type="submit" class="btn btm-primary" value="Criar Evento" style="background-color:#8AEEA3">
        <a style="background-color:#BAEEEC; color:black;" class="btn btm-primary" href="/">Voltar para home</a>
    </form>
</div>

@endsection