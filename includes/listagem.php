<?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch($_GET['status']){
            case 'success':
                $mensagem = '<div class="alert alert-success"> Ação exeutada com suscesso</div>';
                break;
            case 'error':
                $mensagem = '<div class="alert alert-danger"> Ação não executada</div>';
                break;
            
        }
    }

    $resultados = '';
    foreach($alunos as $aluno){
        $resultados .='<tr>
                        <td>'.$aluno->idaluno.'</td>
                        <td>'.$aluno->nome_al.'</td>
                        <td>'.$aluno->nascimento.'</td>
                        <td>'.$aluno->sexo.'</td>
                        <td>'.$aluno->ano_serie.'</td>
                        <td>'.$aluno->data_cadastro.'</td>
                        <td>
                            <a href="editar.php?id='.$aluno->idaluno.'">
                                <button type="button" class="btn btn-success">Editar</button>
                            </a>
                            <a href="excluir.php?id='.$aluno->idaluno.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>        
                        </td>
                       
                       </tr>'; 
    }

?>

<main>

    <?=$mensagem?>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-warning">Novo Aluno</button>
        </a>
    </section>
    
    <section>

        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Ano</th>
                    <th>Data do Cadastro</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>

    </section>

</main>