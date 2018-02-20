<?php
/**
 * Created by PhpStorm.
 * User: Wélinton
 * Date: 19/02/2018
 * Time: 21:13
 */

namespace App\DAO;


class CursoDAO
{
    private $conexao;

    /**
     * CursoDAO constructor.
     * @param $conexao
     */

    public function __construct()
    {
        $this->conexao = new \PDO("mysql:dbname=db_cursos;host=localhost","root","zetawe12");
        $this->conexao->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);

    }
    public function inserir($curso){
        $sql = "insert into cursos (nome, valor) values (:nome, :valor)";
        try{
            $insercao = $this->conexao->prepare("sql");
            $insercao->bindValue(':nome', $curso->getNome());
            $insercao->bindValue(':valor', $curso->getValor());
            $insercao->execute();

        }catch (\PDOException $erro){
            echo $erro->getMessage();
        }



    }




}