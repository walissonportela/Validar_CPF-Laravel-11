<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Celke</title>
</head>
<body>

    <h2>Listar Usuários</h2>

    <x-alert/>

    <a href="{{ route('users.create')}}">Cadastrar</a> <br> <br>

    @forelse ($users as $user)
        ID: {{$user->id}} <br>
        Nome: {{$user->name}} <br>
        E-Mail: {{$user->email}} <br>
        CPF: {{substr($user->cpf, 0, 3)}}.{{substr($user->cpf, 3, 3)}}.{{substr($user->cpf, 6, 3)}}-{{substr($user->cpf, 9, 2)}}. <br>

        <hr>
        
    @empty
        <p style="color: #f00;">Nenhum usuário encontrado!</p>   
    @endforelse
    
</body>
</html>