<?php

require_once 'models/Projeto.php';

class ProjetoController
{
    public function all()
    {
        $obj = new Projeto();
        $Projeto = obj -> all();
        
        require_once 'views/Projeto.php'
    }

    public funciton create()
    {
        $obj = new Projeto()
        if(isset($_POST['nome']))
        {
            $obj -> setNome($_POST['nome']);
            $obj -> setDuracao($_POST['duracao']);
            $obj -> create();
            $projeto = $obj -> read();
        } else{
            $projeto = (object) ['id' => null, 'nome' => '', 'duracao' => '',];
        }

        require_once 'views/Projeto_create.php';
    }

    public function read()
    {
        $obj = new Projeto();
        $obj -> setId($_GET['id']);
        $projeto = $obj -> read();

        require_once 'views/Projeto_read.php'
    }

    public function update()
    {
        $obj = new Projeto();
        $obj -> setId($_GET['id']);
        if (isset($_POST['nome']))
        {
            $obj -> setNome($_POST['nome']);
            $obj -> setDuracao ($_POST('duracao'));
            $obj -> update();
        }

        $projeto = $obj -> read();

        require_once 'views/Projeto_update.php'
    }

    public function delete()
    {
        $obj = new Projeto();
        $obj -> setId($_GET['id']);
        $obj -> delete();

        header("Location: ./");
    }
}

?>