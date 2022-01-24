<main>
    <h2 class="mt-3">Excluir Aluno</h2>

    <form method="post">

        <div class="form-group mt-2">
            <p>Você realmente deseja excluir o(a) aluno(a) <strong><?=$obAluno->nome_al?></strong>?</p>
        </div>
        
        <div class="form-group mt-3">
            <a href="index.php">
                <button type="button" class="btn btn-primary">Cancelar</button>
            </a>

            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>

</main>