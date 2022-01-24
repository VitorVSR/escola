<main>
    <section>
        <a href="index.php">
            <button class="btn btn-warning">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">

        <div class="form-group mt-2">
            <label>Nome: </label>
            <input type="text" class="form-control" name="nome" value="<?=isset($obAluno->nome_al) ? $obAluno->nome_al : ' '?>">
        </div>

        <div class="form-group mt-2">
            <label>Data de Nascimento: </label><br>
            <input type="date" class="datepicker" name="data" value="<?=isset($obAluno->nascimento) ? $obAluno->nascimento : ' '?>">
        </div>
        
        <div class="form-group mt-2">
            <label>Sexo: </label>
            <select name="select_sexo" class="form-select" aria-label="Default select example">
                <option value="masculino" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == 'masculino' ? 'selected' : ' ' : ' ' ?>>Masculino</option>
                <option value="feminino" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == 'feminino' ? 'selected' : ' ' : ' ' ?>>Feminino</option>
                <option value="outro" <?=isset($obAluno->ano_serie) ? $obAluno->sexo == 'outro' ? 'selected' : ' ' : ' '?>>Outro</option>
            </select>
        </div>

        <div class="form-group mt-2">
            <label>Ano: </label>
            <select name="select_ano" class="form-select" aria-label="Default select example" >
                <option value="1" <?= isset($obAluno->ano_serie) ? $obAluno->ano_serie == '1' ? 'selected' : ' ' : ' ' ?>>1º ano do Fundamental</option>
                <option value="2" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '2' ? 'selected' : ' ' : ' ' ?>>2º ano do Fundamental</option>
                <option value="3" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '3' ? 'selected' : ' ' : ' ' ?>>3º ano do Fundamental</option>
                <option value="4" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '4' ? 'selected' : ' ' : ' ' ?>>4º ano do Fundamental</option>
                <option value="5" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '5' ? 'selected' : ' ' : ' ' ?>>5º ano do Fundamental</option>
                <option value="6" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '6' ? 'selected' : ' ' : ' ' ?>>6º ano do Fundamental</option>
                <option value="7" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '7' ? 'selected' : ' ' : ' ' ?>>7º ano do Fundamental</option>
                <option value="8" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '8' ? 'selected' : ' ' : ' ' ?>>8º ano do Fundamental</option>
                <option value="9" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '9' ? 'selected' : ' ' : ' ' ?>>9º ano do Fundamental</option>
                <option value="1m" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '1m' ? 'selected' : ' ' : ' ' ?>>1º ano do Ensino médio</option>
                <option value="2m" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '2m' ? 'selected' : ' ' : ' ' ?>>2º ano do Ensino médio</option>
                <option value="3m" <?=isset($obAluno->ano_serie) ? $obAluno->ano_serie == '3m' ? 'selected' : ' ' : ' ' ?>>3º ano do Ensino médio</option>
            </select>
        </div>
        
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

</main>