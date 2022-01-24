<?php

namespace App\Entity;

use \App\Db\Database;
use  \PDO;

class Aluno{
    
    public $id;
    public $nome;
    public $data;
    public $sexo;
    public $ano;        
    public $data_cadastro;

    public function cadastrar(){
        //Definir a data do cadastro
        $this->data_cadastro = date('Y-m-d H:i:s');
        
        //Inserir o aluno no banco de dados
        $obDatabase = new Database('aluno');
        $obDatabase->insert([
            'nome_al' => $this->nome,
            'nascimento' => $this->data,
            'sexo' => $this->sexo,
            'ano_serie' => $this->ano,
            'data_cadastro' => $this->data_cadastro
        ]);

        return true;
        
    }

    public function atualizar(){
        return (new Database('aluno'))->update('idaluno = '.$this->idaluno, [
            'nome_al' => $this->nome,
            'nascimento' => $this->data,
            'sexo' => $this->sexo,
            'ano_serie' => $this->ano,
            'data_cadastro' => $this->data_cadastro                                                                    
        ]);
    }

    public function excluir(){
        return (new Database('aluno'))->delete('idaluno = '.$this->idaluno);
    }


    public static function getAlunos($where = null, $order = null, $limit = null){
        return (new Database('aluno'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getAluno($id){
        return (new Database('aluno'))->select('idaluno = '.$id)
                                      ->fetchObject(self::class);

    }

}