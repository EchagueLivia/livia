<html>
    <body>
        <h1>Listar Alunos</h1>
        @error('erro')
            <div>{{$message}}</div>
        @enderror
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                </tr>
            </thead>
        </table>
        <tbody>
            @foreach ($alunos as $aluno)
            <tr>
                <td>{{$aluno->id}}</td>
                <td>{{$aluno->nome}}</td>
            </tr>
            @endforeach
        </tbody>
    </body>
</html>