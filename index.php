<?php

//Importando as classes e implementações

require_once "IConexao.php";
require_once "Conexao.php";
require_once "IProduto.php";
require_once "Produto.php";
require_once "IServiceProduto.php";
require_once "ServiceProduto.php";

//Mensagem de boas vindas
echo "<h1>Bem vindo ao CRUD com PDO</h1><br>";

//conexao com o banco de dados
$host = 'localhost'; //host
$bancoDeDados = 'bancoDeDados'; //nome do bando de dados
$usuario = 'root'; //nome de usuario
$senha = 'root'; //senha do usuario

$conecta = new Conexao($host, $bancoDeDados, $usuario, $senha);

//criação de um novo produto, passando o Nome e a Descrição
$produto = new Produto('Ovo de Pascoa', 'Ouro Branco');

//Voce pode sobrescrever os valores também, exemplo, $produto->setNome('Nome qualquer')->setDesc('descricao do produto');

//Cria o service, é de onde vamos chamar nossas funções
$service = new ServiceProduto($conecta, $produto);

//Exemplo de uso de uma função que recebe $id
print_r($service->procurar(2));
echo '<br>'; //quebra de linha
//Exemplo de mais uma função, dessa vez sem $id.
print_r($service->listar());

echo "<br>";

/**
 * User: Eduardo
 * Date: 29/03/2017
 * Time: 08:41
 */