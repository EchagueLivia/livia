<html>
    <h2>Adicionar Aluno</h2>
    <form method="POST" action="{{route('alunos.salvar')}}">
        @csrf 
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required>
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="curso">curso</label>
            <input type="text" name="curso" required>
        </div>
        <div>
            <button type="submit">salvar</button>
        </div>
    </form>
</html>