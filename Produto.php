<?php

/**
 * User: Eduardo
 * Date: 29/03/2017
 * Time: 08:43
 * Classe Produto, é aqui que esse objeto é tratado
 */
class Produto implements IProduto
{
    private $id;
    private $nome;
    private $desc;

    function __construct($nome, $desc) //Para criar um novo produto, deve-se passar o nome e a descricao da seguinte maneira $suaVariavel = new Produto('Nome do produto', 'Descricao do produto');
    {
        $this->nome = $nome;
        $this->desc = $desc;
    }

    public function getId() //retorna o ID
    {
        return $this->id;
    }
    public function getNome() //retorna o Nome
    {
        return $this->nome;
    }
    public function getDesc() //retorna a Descrição
    {
        return $this->desc;
    }
    public function setId($id) //muda o id conforme o colocado, exemplo $produto->setId(8); ira mudar o ID do produto para 8
    {
        $this->id = $id;
        return $this; //retorna o proprio objeto, dessa forma você pode fazer mais de um set por vez, exemplo $produto->setId(2)->setNome('Eduardo')->setDesc('Um Rapaz muito estudioso');
    }
    public function setNome($nome) //muda o Nome, similar ao exemplo a cima
    {
        $this->nome = $nome;
        return $this;
    }
    public function setDesc($desc) //muda a Descrição, similar ao exemplo setId()
    {
        $this->desc = $desc;
        return $this;
    }
}