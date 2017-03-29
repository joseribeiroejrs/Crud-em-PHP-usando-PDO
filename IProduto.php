<?php

/**
 * User: Eduardo
 * Date: 29/03/2017
 * Time: 08:42
 * Interface de Produto
 */
interface IProduto
{
    public function getId();
    public function getNome();
    public function getDesc();
    public function setId($id);
    public function setNome($nome);
    public function setDesc($desc);
}