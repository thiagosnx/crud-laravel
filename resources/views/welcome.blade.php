<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf 
        <!-- token de segurança exigido para post do laravel (so funciona com blade) -->
        <label for="">Nome:</label>
        <input type="text" placeholder="nome" name="name">
        <br>
        <br>
        <label for="">Email:</label>
        <input type="text" placeholder="email" name="email">
        <br>
        <button>Cadastrar</button>        
</form>
</body>
</html>