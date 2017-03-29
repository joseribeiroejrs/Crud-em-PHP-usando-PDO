<?php

/**
 * User: Eduardo
 * Date: 29/03/2017
 * Time: 08:52
 *Interface de ServiceProduto
 */
interface IServiceProduto
{
    public function listar();
    public function salvar();
    public function deletar($id);
    public function atualizar($id);
    public function procurar($id);
}