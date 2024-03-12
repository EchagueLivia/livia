<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
</head>
<body>
    <form method="post" action="{{route('atualizar.alunos')}}">
        @csrf 
        <label for="id">ID:</label>
        <input type="text" name="id" value="{{$aluno->id}}" required><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="{{$aluno->nome}}" required><br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="{{$aluno->email}}" required><br>

        <label for="data_nascimeno">Data de Nascimento</label>
        <input type="text" name="data_nascimento" value="{{$aluno->data_nascimento}}" required><br>

        <label for="curso">Curso</label>
        <input type="text" name="curso" value="{{$aluno->curso}}"required>


        <button type="submit">Salvar</button>
    </form>
</body>
</html>