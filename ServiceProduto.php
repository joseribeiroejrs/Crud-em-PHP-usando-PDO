<?php

/**
 * User: Eduardo
 * Date: 29/03/2017
 * Time: 08:50
 * Aqui onde as funções se encontram
 */
class ServiceProduto implements IServiceProduto //implementa a Interface IServiceProduto
{
    private $conexao;
    private $produto;
    private $tabela = 'produtos'; //Nome da sua tabela aqui
    function __construct(IConexao $conexao, IProduto $produto) //recebe a conexao e produto que devem ser criados antes
    {
        $this->conexao = $conexao->conectar();
        $this->produto = $produto;
    }
    public function listar(){ //lista todos os dados da tabela
        $query = "SELECT * FROM {$this->tabela}";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function salvar(){ //salva o produto na tabela, substituir nome e descricao pelos nomes de suas colunas no bando de dados
        $query = "INSERT INTO {$this->tabela} (`nome`, `descricao`) values (?, ?)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->produto->getNome());
        $stmt->bindValue(2, $this->produto->getDesc());
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function atualizar($id){ //atualiza os dados do produto selecionado pelo id
        $query = "UPDATE {$this->tabela} SET nome = ?, descricao = ? WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $this->produto->getNome());
        $stmt->bindValue(2, $this->produto->getDesc());
        $stmt->bindValue(3, $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function deletar($id){ //deleta a linha da tabela do id selecionado
        $query = "DELETE FROM {$this->tabela} WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return 'Deletado com sucesso!';
    }
    public function procurar($id){ //procura o produto com respectivo id
        $query = "SELECT * FROM {$this->tabela} WHERE id = ?";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}