<?php

namespace App\Controller;

use App\Model\DAO\GeneroDAO;
use App\Model\Domain\Genero;

class GeneroController
{
    public function index(){
        $generoDAO = new GeneroDAO();
        $dados = $generoDAO->consultar();
        require "../src/Views/Genero/index.php";
    }

    public function create(){
        require "../src/Views/Genero/create.php";
    }

    public function store(){
        $genero = new Genero();
        $genero->setNome($_POST['nome']);
        $generoDAO = new GeneroDAO();
        if($generoDAO->inserir($genero)){
            $resultado = "Registro inserido com sucesso";
        }
        else{
            $resultado = "Não foi possivel inserir o registro";
        }
        session_start();
        $_SESSION['resultado'] = $resultado;
        header('Location: /generos');
        exit;
    }

    public function edit($parametro)
    {
        $generoDAO = new GeneroDAO();
        $dados = $generoDAO->consultarPorId($parametro[1]);
        require "../src/Views/Genero/edit.php";
    }

    public function update($parametros){
        $genero = new Genero();
        $genero->setId($parametros[1]);
        $genero->setNome($_POST['nome']);
        $generoDAO = new GeneroDAO();
        if ($generoDAO->alterar($genero)){
            $resultado = "Registro alterado com sucesso!";
        } else {
            $resultado = "Não foi possível alterar o registro!";
        }
        session_start();
        $_SESSION['resultado'] = $resultado;
        header('Location: /generos');
        exit;
    }

    public function delete($parametro)
    {
        $generoDAO = new GeneroDAO();
        $dados = $generoDAO->consultarPorId($parametro[1]);
        require "../src/Views/Genero/delete.php";
    }

    public function remove($parametros){
        $genero = new Genero();
        $genero->setId($parametros[1]);
        $generoDAO = new GeneroDAO();
        if ($generoDAO->excluir($genero)){
            $resultado = "Registro excluído com sucesso!";
        } else {
            $resultado = "Não foi possível excluir o registro!";
        }
        session_start();
        $_SESSION['resultado'] = $resultado;
        header('Location: /generos');
        exit;
    }

}

