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
if(isset($_POST['excluir'])){
   
   $obAluno->excluir();
   
   header('location: index.php?status=success');
   exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar_exclusao.php';
include __DIR__.'/includes/footer.php';