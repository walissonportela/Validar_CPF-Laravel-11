<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Carregar o JavaScript  --}}
    @vite(['resources/js/app.js'])

    <title>Celke</title>
</head>
<body>

    <h2>Cadastrar usuário</h2>

    <x-alert/>

    <a href="{{ route('users.index')}}">Listar</a> <br><br>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @method('POST')

        <label for="name" class="form-label">Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome completo" value="{{ old('name')}}"> <br><br>

        <label for="email" class="form-label">E-Mail: </label>
        <input type="text" name="email" id="email" placeholder="Melhor e-mail do usuário" value="{{ old('email')}}"> <br><br>

        <label for="password" class="form-label">Senha: </label>
        <input type="password" name="password" id="password" placeholder="Senha com no mínimo 6 caractéres" value="{{ old('password')}}"> <br><br>

        <label for="cpf" class="form-label">CPF: </label>
        <input type="text" name="cpf" id="cpf" value="{{ old('cpf')}}"> <br><br>

        <button type="submit">Cadastrar</button>

    </form>
    
</body>
</html>