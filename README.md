# Crud em PHP usando PDO #
Um simples Crud criado em PHP utilizando PDO, recomendado para estudo, para uso comercial necessita de refinamento.

# Classes #
________________________________________________________________________________________________________________________________________

**Conexao ->** Responsavel por realizar a conexão com o banco de dados, sua inicialização segue o exemplo:

    $conexao = new Conexao('localhost','nomeDoBancoDeDados', 'usuario', 'senha');

Possui também tratamento de erro, caso queira personalizar a sua mensagem de erro, abra o arquivo Conexao.php e edite o catch dentro da função pública conectar().
________________________________________________________________________________________________________________________________________

**Produto ->** Responsavel por criar um novo Objeto Produto, sua inicialização segue o exemplo:

    $produto = new Produto('Nome do Produto', 'Descrição do Produto');

Possui também os métodos setters e getters para Id, Nome, Produto.
  
    $produto->setId($id); //Exemplo de setter
    
    $produto->getId(); //Exemplo de getter
    
________________________________________________________________________________________________________________________________________   
**ServiceProduto ->** Responsavel pelas funcionalidades, possui as seguintes, listar(), salvar(), atualizar($id), deletar($id) e procurar($id);

    listar(); //Mostra todos os dados do banco de dados
    
    salvar(); //Salva o último objeto no banco de dados
    
    atualizar($id); //Sobrescreve o objeto de Id selecionado, pelo objeto produto atual
    
    deletar($id); //Deleta o objeto do respectivo id selecionado
    
    procurar($id); //Retorna o objeto de id selecionado
    
    
Sua inicialização segue o modelo;

    $service = new ServiceProduto($conexao, $produto);
________________________________________________________________________________________________________________________________________

**Implementações ->** Possui também as implementações das respectivas classes, nomeadas da mesma forma das classes originais, porém precedidas de um I, IProduto, IServiceProduto, IConexao;

    

