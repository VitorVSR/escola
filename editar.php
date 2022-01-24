<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Vaga');

use \App\Entity\Aluno;  

//Validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
   header('location: index.php?status=erro');
   exit;
}

$obAluno = Aluno::getAluno($_GET['id']);

//Validação do aluno


if(!$obAluno instanceof ALuno){
   header('location: index.php?status=error');
   exit;
}

//Validação do post
if(isset($_POST['nome'],$_POST['data'], $_POST['select_sexo'], $_POST['select_ano'])){
   
   $obAluno->nome = $_POST['nome'];
   $obAluno->data = $_POST['data'];
   $obAluno->sexo = $_POST['select_sexo'];
   $obAluno->ano = $_POST['select_ano'];
   $obAluno->atualizar();
   
   header('location: index.php?status=success');
   exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';