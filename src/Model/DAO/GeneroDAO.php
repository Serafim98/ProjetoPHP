<?php

namespace App\Model\DAO;

use App\Model\Domain\Genero;

class GeneroDAO
{
    private DAO $dao;

    public function __construct(){
        $this->dao = new DAO();
    }

    public function inserir(Genero $genero){
        try{
            $sql = "INSERT INTO generos (nome) VALUES (:nome)";
            $p = $this->dao->getConn()->prepare($sql);
            $p->bindValue(":nome", $genero->getNome());
            return $p->execute();
        }catch (\Exception $e){
            return 0;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM generos";
            return $this->dao->getConn()->query($sql);
        }catch (\Exception $e){
            return 0;
        }
    }

    public function consultarPorId($id)
    {
        try{
            $sql = "SELECT * FROM generos WHERE id = ".$id;
            return $this->dao->getConn()->query($sql);
        } catch(\Exception $e){
            return 0;
        }
    }

    public function alterar(Genero $genero){
        try{
            $sql = "UPDATE generos SET nome = :nome WHERE id = :id";
            $p = $this->dao->getConn()->prepare($sql);
            $p->bindValue(":nome", $genero->getNome());
            $p->bindValue(":id", $genero->getId());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function excluir(Genero $genero){
        try{
            $sql = "DELETE FROM generos WHERE id = :id";
            $p = $this->dao->getConn()->prepare($sql);
            $p->bindValue(":id", $genero->getId());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }


}