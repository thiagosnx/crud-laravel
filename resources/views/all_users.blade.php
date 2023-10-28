<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários cadastrados</title>
</head>
<body>
    <header>
        <nav>
            <a href="/singin">Entrar</a> <br>
            <a href="/singup">Cadastre-se</a>
            
        </nav>
    </header>
    <ul>
        @foreach($users as $user)
        <li><img src="/img/users/{{ $user->image }}" alt="{{ $user->name }}">{{ $user->name }} -- {{ $user->email }}</li>
        @endforeach
    </ul>
</body>
</html>