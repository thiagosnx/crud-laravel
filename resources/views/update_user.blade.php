<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="/updateuser/{{ $users->id }}" method="POST"> <!--passamos a route na action-->
        <!--recebendo o id do msm jeito do name e email la embaixo-->
        @csrf <!-- token de segurança exigido para post do laravel (so funciona com blade) -->
        @method("PUT") <!--method put do laravel-->
        <label for="">Nome:</label>
        <input type="text" placeholder="nome" name="name" value="{{ $users->name }}"> <!--input ja recebendo os valores do usuario-->
        <br>
        <br>
        <label for="">Email:</label>
        <input type="text" placeholder="email" name="email" value="{{ $users->email }}"><!--input ja recebendo os valores do usuario-->
        <br>
        <button>Atualizar</button>        
</form>
</body>
</html>