<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Vaga');

use \App\Entity\Aluno;  

//Validação do post
if(isset($_POST['nome'],$_POST['data'], $_POST['select_sexo'], $_POST['select_ano'])){
   
   $obAluno = new Aluno;
   $obAluno->nome = $_POST['nome'];
   $obAluno->data = $_POST['data'];
   $obAluno->sexo = $_POST['select_sexo'];
   $obAluno->ano = $_POST['select_ano'];
   $obAluno->cadastrar();

   header('location: index.php?status=success');
   exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';